<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Municipality;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $municipalities = Municipality::with('department')->get();
        return response()->json([
            'data' => $municipalities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|integer',
            'department_id' => 'required|exists:departments,id'
        ]);

        $department = Department::find($validatedData['department_id']);

        if (!$department)
            return response()->json([
                'message' => 'El departamento no fue encontrado'
            ], 404);

        $municipality = new Municipality([
            'name' => $validatedData['name'],
            'code' => $validatedData['code'],
            'status' => $validatedData['status'] ?? true
        ]);

        $department->municipalities()->save($municipality);

        return response()->json([
            'message' => 'El municipio fue creado correctamente',
            'data' => $municipality->load('department')
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Municipality $municipality
     * @return JsonResponse
     */
    public function show(Municipality $municipality): JsonResponse
    {
        $municipality->load('department');
        return response()->json(['data' => $municipality]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Municipality $municipality
     * @return JsonResponse
     */
    public function update(Request $request, Municipality $municipality): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|integer',
            'department_id' => 'required|exists:departments,id',
            'status' => 'nullable|boolean',
        ]);

        $department = Department::find($validatedData['department_id']);

        if (!$department)
            return response()->json([
                'message' => 'El departamento no fue encontrado'
            ], 404);

        $municipality->name = $validatedData['name'];
        $municipality->code = $validatedData['code'];
        $municipality->status = $validatedData['status'] ?? true;

        $municipality->department()->associate($department);

        $municipality->save();

        return response()->json([
            'message' => 'El municipio fue actualizado correctamente',
            'municipality' => $municipality->load('department')
        ]);
    }

    /**
     * Change the status of the specified resource in storage.
     *
     * @param Municipality $municipality
     * @return JsonResponse
     */
    public function changeStatus(Municipality $municipality): JsonResponse
    {
        $municipality->status = false;
        $municipality->save();

        return response()->json(['message' => 'El estado del municipio se actualizo correctamente']);
    }
}
