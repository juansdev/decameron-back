<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

        return response()->json($departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $department = new Department();
        $department->name = $request->input('name');
        $department->code = $request->input('code');
        $department->status = $request->input('status', true);
        $department->save();

        return response()->json(['message' => 'Departamento creado correctamente', 'department' => $department]);
    }

    /**
     * Display the specified resource.
     *
     * @param Department $department
     * @return JsonResponse
     */
    public function show(Department $department): JsonResponse
    {
        return response()->json($department);
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
        $department->name = $request->input('name');
        $department->code = $request->input('code');
        $department->status = $request->input('status', true);
        $department->save();

        return response()->json(['message' => 'Departamento actualizado correctamente', 'department' => $department]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Department $department
     * @return JsonResponse
     */
    public function destroy(Department $department): JsonResponse
    {
        $department->status = false;
        $department->save();

        return response()->json(['message' => 'El estado del departamento se actualizo correctamente']);
    }
}
