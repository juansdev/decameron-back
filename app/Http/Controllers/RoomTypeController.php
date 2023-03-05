<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $roomTypes = RoomType::all();
        return response()->json(['data' => $roomTypes]);
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
            'name' => 'required|string|max:255|unique:room_types,name'
        ]);

        $roomType = RoomType::create($validatedData);

        return response()->json(['message' => 'Tipo de habitación creado correctamente', 'data' => $roomType], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param RoomType $roomType
     * @return JsonResponse
     */
    public function show(RoomType $roomType): JsonResponse
    {
        $roomType = RoomType::find($roomType->id);
        return response()->json(['data' => $roomType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param RoomType $roomType
     * @return JsonResponse
     */
    public function update(Request $request, RoomType $roomType): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:room_types,name,' . $roomType->id,
            'status' => 'nullable|boolean'
        ]);

        $roomType->update($validatedData);

        return response()->json(['message' => 'Tipo de habitación actualizado correctamente', 'data' => $roomType]);
    }

    /**
     * Change the status of the specified resource in storage.
     *
     * @param RoomType $roomType
     * @return JsonResponse
     */
    public function changeStatus(RoomType $roomType): JsonResponse
    {
        $roomType->status = false;
        $roomType->save();

        return response()->json(['message' => 'El estado del tipo de habitación se actualizo correctamente']);
    }
}
