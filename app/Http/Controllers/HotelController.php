<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $hotels = Hotel::all();
        return response()->json(['data' => $hotels]);
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
            'name' => 'required|string|max:255|unique:hotels,name',
            'nit' => 'required|string|max:255|unique:hotels,nit'
        ]);

        $hotel = Hotel::create($validatedData);

        return response()->json(['message' => 'Hotel creado correctamente', 'data' => $hotel], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Hotel $hotel
     * @return JsonResponse
     */
    public function show(Hotel $hotel): JsonResponse
    {
        $hotel = Hotel::find($hotel->id);
        return response()->json(['data' => $hotel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Hotel $hotel
     * @return JsonResponse
     */
    public function update(Request $request, Hotel $hotel): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:hotels,name,' . $hotel->id,
            'nit' => 'required|string|max:255|unique:hotels,nit',
            'status' => 'nullable|boolean'
        ]);

        $hotel->update($validatedData);

        return response()->json(['message' => 'Hotel actualizado correctamente', 'data' => $hotel]);
    }

    /**
     * Change the status of the specified resource in storage.
     *
     * @param Hotel $hotel
     * @return JsonResponse
     */
    public function changeStatus(Hotel $hotel): JsonResponse
    {
        $hotel->status = !$hotel->status;
        $hotel->save();
        return response()->json(['message' => 'El estado del hotel se actualizo correctamente']);
    }
}
