<?php

namespace App\Http\Controllers;

use App\Models\MunicipalHotel;
use App\Models\Room;
use App\Models\RoomAccommodation;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $rooms = Room::with(['municipalHotel', 'roomType', 'roomAccommodation'])->get();
        return response()->json([
            'data' => $rooms
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
            'municipal_hotel_id' => 'required|exists:municipal_hotels,id',
            'room_type_id' => 'required|exists:room_types,id',
            'room_accommodation_id' => 'required|exists:room_accommodations,id'
        ]);

        $municipalHotel = MunicipalHotel::find($validatedData['municipal_hotel_id']);
        $roomType = RoomType::find($validatedData['room_type_id']);
        $roomAccommodation = RoomAccommodation::find($validatedData['room_accommodation_id']);

        if (!$municipalHotel || !$roomType || !$roomAccommodation) {
            if (!$municipalHotel)
                return response()->json([
                    'message' => 'El hotel no fue encontrado'
                ], 404);
            if (!$roomType)
                return response()->json([
                    'message' => 'El tipo de cuarto no fue encontrado'
                ], 404);
            else
                return response()->json([
                    'message' => 'La acomodación del cuarto no fue encontrado'
                ], 404);
        }

        $room = Room::create($validatedData);

        return response()->json([
            'message' => 'El hotel del municipio fue creado correctamente',
            'data' => $room->load(['municipalHotel', 'roomType', 'roomAccommodation'])
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Room $room
     * @return JsonResponse
     */
    public function show(Room $room): JsonResponse
    {
        $room = Room::with(['municipalHotel', 'roomType', 'roomAccommodation'])->find($room->id);
        return response()->json([
            'data' => $room
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Room $rooms
     * @return JsonResponse
     */
    public function update(Request $request, Room $rooms): JsonResponse
    {
        $validatedData = $request->validate([
            'municipal_hotel_id' => 'required|exists:municipal_hotels,id',
            'room_type_id' => 'required|exists:room_types,id',
            'room_accommodation_id' => 'required|exists:room_accommodations,id',
            'status' => 'nullable|boolean',
        ]);

        $municipalHotel = MunicipalHotel::find($validatedData['municipal_hotel_id']);
        $roomType = RoomType::find($validatedData['room_type_id']);
        $roomAccommodation = RoomAccommodation::find($validatedData['room_accommodation_id']);

        if (!$municipalHotel || !$roomType || !$roomAccommodation) {
            if (!$municipalHotel)
                return response()->json([
                    'message' => 'El hotel no fue encontrado'
                ], 404);
            if (!$roomType)
                return response()->json([
                    'message' => 'El tipo de cuarto no fue encontrado'
                ], 404);
            else
                return response()->json([
                    'message' => 'La acomodación del cuarto no fue encontrado'
                ], 404);
        }

        $rooms->status = $validatedData['status'] ?? true;
        $rooms->municipalHotel()->associate($municipalHotel);
        $rooms->roomType()->associate($roomType);
        $rooms->roomAccommodation()->associate($roomAccommodation);
        $rooms->save();

        return response()->json([
            'message' => 'El cuarto fue actualizado correctamente',
            'data' => $rooms->load(['municipalHotel', 'roomType', 'roomAccommodation'])
        ]);
    }

    /**
     * Change the status of the specified resource in storage.
     *
     * @param Room $room
     * @return JsonResponse
     */
    public function changeStatus(Room $room): JsonResponse
    {
        $room->status = false;
        $room->save();

        return response()->json(['message' => 'El estado del cuarto se actualizo correctamente']);
    }
}
