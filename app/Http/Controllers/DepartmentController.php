<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $departments = Department::all();

        return response()->json(['data' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|integer',
        ]);

        $department = Department::create([
            'name' => $request->input('name'),
            'code' => $request->input('code')
        ]);

        return response()->json(['message' => 'Departamento creado correctamente', 'data' => $department]);
    }

    /**
     * Display the specified resource.
     *
     * @param Department $department
     * @return JsonResponse
     */
    public function show(Department $department): JsonResponse
    {
        return response()->json(['data' => $department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Department $department
     * @return JsonResponse
     */
    public function update(Request $request, Department $department): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|integer',
            'status' => 'nullable|boolean'
        ]);

        $department->update($request->all());

        return response()->json(['message' => 'Departamento actualizado correctamente', 'data' => $department]);
    }

    /**
     * Change the status of the specified resource in storage.
     *
     * @param Department $department
     * @return JsonResponse
     */
    public function changeStatus(Department $department): JsonResponse
    {
        $department->status = false;
        $department->save();

        return response()->json(['message' => 'El estado del departamento se actualizo correctamente']);
    }
}
