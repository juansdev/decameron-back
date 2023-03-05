<?php

namespace App\Http\Controllers;

use App\Models\RoomAccommodation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RoomAccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $roomAccommodations = RoomAccommodation::all();
        return response()->json([
            'data' => $roomAccommodations
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
            'name' => 'required|string|max:255|unique:room_accommodations,name'
        ]);

        $roomAccommodation = RoomAccommodation::create($validatedData);

        return response()->json([
            'message' => 'Acomodación de habitación creado correctamente',
            'data' => $roomAccommodation,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param RoomAccommodation $roomAccommodation
     * @return JsonResponse
     */
    public function show(RoomAccommodation $roomAccommodation): JsonResponse
    {
        $roomAccommodation = RoomAccommodation::find($roomAccommodation->id);
        return response()->json([
            'data' => $roomAccommodation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param RoomAccommodation $roomAccommodation
     * @return JsonResponse
     */
    public function update(Request $request, RoomAccommodation $roomAccommodation): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:room_accommodations,name,' . $roomAccommodation->id,
            'status' => 'nullable|boolean'
        ]);

        $roomAccommodation->update($validatedData);

        return response()->json([
            'message' => 'Acomodación de la habitación actualizada correctamente',
            'data' => $roomAccommodation,
        ]);
    }

    /**
     * Change the status of the specified resource in storage.
     *
     * @param RoomAccommodation $roomAccommodation
     * @return JsonResponse
     */
    public function changeStatus(RoomAccommodation $roomAccommodation): JsonResponse
    {
        $roomAccommodation->status = false;
        $roomAccommodation->save();

        return response()->json(['message' => 'El estado de la acomodación de la habitación se actualizo correctamente']);
    }
}
