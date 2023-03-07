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
    public function index(Request $request): JsonResponse
    {
        $municipalHotelId = $request->query('municipal_hotel_id');
        $rooms = Room::with(['municipalHotel', 'roomType', 'roomAccommodation']);
        if ($municipalHotelId) $rooms->where('municipal_hotel_id', $municipalHotelId);
        $rooms = $rooms->get();
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
        ], [
            'municipal_hotel_id.required' => 'El hotel es obligatorio',
            'municipal_hotel_id.exists' => 'El hotel no se encuentra registrado',
            'room_type_id.required' => 'El tipo de habitación es obligatorio',
            'room_type_id.exists' => 'El tipo de habitación no se encuentra registrado',
            'room_accommodation_id.required' => 'La acomodación del cuarto es obligatorio',
            'room_accommodation_id.exists' => 'La acomodación del cuarto no se encuentra registrado'
        ]);
        $municipalHotelId = $request->query('municipal_hotel_id') ? $request->query('municipal_hotel_id') : $validatedData['municipal_hotel_id'];

        $municipalHotel = MunicipalHotel::find($municipalHotelId);
        $roomType = RoomType::find($validatedData['room_type_id']);
        $roomAccommodation = RoomAccommodation::find($validatedData['room_accommodation_id']);

        if (!$municipalHotel || !$roomType || !$roomAccommodation) {
            if (!$municipalHotel)
                return response()->json([
                    'message' => 'El hotel no fue encontrado'
                ], 404);
            if (!$roomType)
                return response()->json([
                    'message' => 'El tipo de habitación no fue encontrado'
                ], 404);
            else
                return response()->json([
                    'message' => 'La acomodación del cuarto no fue encontrado'
                ], 404);
        }

        $verifyIfMaxRooms = Room::where('municipal_hotel_id', $municipalHotelId)->where('status', 1)->count();
        $verifyIfExistRoom = Room::where('municipal_hotel_id', $municipalHotelId)->where('room_type_id', $validatedData['room_type_id'])
            ->where('room_accommodation_id', $validatedData['room_accommodation_id'])
            ->first();
        if ($verifyIfMaxRooms >= $municipalHotel->number_rooms)
            return response()->json([
                'message' => 'El hotel ya alcanzo el máximo de habitaciones'
            ], 400);
        else if ($verifyIfExistRoom)
            return response()->json([
                'message' => 'El hotel ya cuenta con una habitación del tipo ' . $roomType->name . ' y de acomodación ' . $roomAccommodation->name], 400);

        $room = Room::create($validatedData);

        return response()->json([
            'message' => 'La habitación fue creado correctamente',
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
     * @param Room $room
     * @return JsonResponse
     */
    public function update(Request $request, Room $room): JsonResponse
    {
        $validatedData = $request->validate([
            'municipal_hotel_id' => 'required|exists:municipal_hotels,id',
            'room_type_id' => 'required|exists:room_types,id',
            'room_accommodation_id' => 'required|exists:room_accommodations,id',
            'status' => 'nullable|boolean'
        ], [
            'municipal_hotel_id.required' => 'El hotel es obligatorio',
            'municipal_hotel_id.exists' => 'El hotel no se encuentra registrado',
            'room_type_id.required' => 'El tipo de habitación es obligatorio',
            'room_type_id.exists' => 'El tipo de habitación no se encuentra registrado',
            'room_accommodation_id.required' => 'La acomodación del cuarto es obligatorio',
            'room_accommodation_id.exists' => 'La acomodación del cuarto no se encuentra registrado'
        ]);
        $isExistRoom = Room::where('municipal_hotel_id', $request->input('municipal_hotel_id'))->where('room_type_id', $validatedData['room_type_id'])->where('room_accommodation_id', $validatedData['room_accommodation_id']);
        if ($isExistRoom->count() > 1 || $isExistRoom->first() && ($isExistRoom->first()->id !== $room->id)) return response()->json([
            'message' => 'Ya existe una habitación del hotel con el mismo tipo de habitación y acomodación'
        ], 400);

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
                    'message' => 'El tipo de habitación no fue encontrado'
                ], 404);
            else
                return response()->json([
                    'message' => 'La acomodación del cuarto no fue encontrado'
                ], 404);
        }

        $room->status = $validatedData['status'] ?? true;
        $room->municipalHotel()->associate($municipalHotel);
        $room->roomType()->associate($roomType);
        $room->roomAccommodation()->associate($roomAccommodation);
        $room->save();

        return response()->json([
            'message' => 'La habitación fue actualizado correctamente',
            'data' => $room->load(['municipalHotel', 'roomType', 'roomAccommodation'])
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
        if (!$room->status) {
            $isExistRoom = Room::where('municipal_hotel_id', $room->municipal_hotel_id)->where('room_type_id', $room->room_type_id)->where('room_accommodation_id', $room->room_accommodation_id);
            if ($isExistRoom->count() > 1 || $isExistRoom->first() && ($isExistRoom->first()->id !== $room->id)) return response()->json([
                'message' => 'Ya existe una habitación del hotel con el mismo tipo de habitación y acomodación'
            ], 400);
            $municipalHotel = MunicipalHotel::find($room->municipal_hotel_id);
            $roomsByHotel = Room::where('municipal_hotel_id', $room->municipal_hotel_id)->where('status', 1);
            if ($roomsByHotel->count() >= $municipalHotel->number_rooms)
                return response()->json([
                    'message' => 'El hotel ya alcanzo el máximo de habitaciones'
                ], 400);
        }
        $room->status = !$room->status;
        $room->save();

        return response()->json(['message' => 'El estado del cuarto se actualizo correctamente']);
    }
}
