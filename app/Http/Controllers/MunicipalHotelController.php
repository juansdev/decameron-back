<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\MunicipalHotel;
use App\Models\Municipality;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class MunicipalHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $municipalHotels = MunicipalHotel::with(['municipality', 'hotel'])->get();
        return response()->json([
            'data' => $municipalHotels
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
            'hotel_id' => 'required|exists:hotels,id',
            'municipality_id' => 'required|exists:municipalities,id',
            'address' => 'required|string|max:255|unique:municipal_hotels,address',
            'number_rooms' => 'required|integer',
        ]);

        $hotel = Hotel::find($validatedData['hotel_id']);
        $municipality = Municipality::find($validatedData['municipality_id']);

        if (!$hotel || !$municipality) {
            if (!$hotel)
                return response()->json([
                    'message' => 'El hotel no fue encontrado'
                ], 404);
            else
                return response()->json([
                    'message' => 'El municipio no fue encontrado'
                ], 404);
        }

        $municipalHotel = MunicipalHotel::create($validatedData);

        return response()->json([
            'message' => 'El hotel del municipio fue creado correctamente',
            'data' => $municipalHotel->load(['hotel', 'municipality'])
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param MunicipalHotel $municipalHotel
     * @return JsonResponse
     */
    public function show(MunicipalHotel $municipalHotel): JsonResponse
    {
        $municipalHotel = MunicipalHotel::with(['municipality', 'hotel'])->find($municipalHotel->id);
        return response()->json([
            'data' => $municipalHotel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param MunicipalHotel $municipalHotels
     * @return JsonResponse
     */
    public function update(Request $request, MunicipalHotel $municipalHotels): JsonResponse
    {
        $validatedData = $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'municipality_id' => 'required|exists:municipalities,id',
            'address' => 'required|string|max:255|unique:municipal_hotels,address,' . $municipalHotels->id,
            'number_rooms' => 'required|integer',
            'status' => 'nullable|boolean',
        ]);

        $hotel = Hotel::find($validatedData['hotel_id']);
        $municipality = Municipality::find($validatedData['municipality_id']);

        if (!$hotel || !$municipality) {
            if (!$hotel)
                return response()->json([
                    'message' => 'El hotel no fue encontrado'
                ], 404);
            else
                return response()->json([
                    'message' => 'El municipio no fue encontrado'
                ], 404);
        }

        $municipalHotels->address = $validatedData['address'];
        $municipalHotels->number_rooms = $validatedData['number_rooms'];
        $municipalHotels->status = $validatedData['status'] ?? true;
        $municipalHotels->hotel()->associate($hotel);
        $municipalHotels->municipality()->associate($municipality);
        $municipalHotels->save();

        return response()->json([
            'message' => 'El hotel del municipio fue actualizado correctamente',
            'municipality' => $municipalHotels->load(['hotel', 'municipality'])
        ]);
    }

    /**
     * Change the status of the specified resource in storage.
     *
     * @param MunicipalHotel $municipalHotels
     * @return JsonResponse
     */
    public function changeStatus(MunicipalHotel $municipalHotels): JsonResponse
    {
        $municipalHotels->status = false;
        $municipalHotels->save();

        return response()->json(['message' => 'El estado del hotel del municipio se actualizo correctamente']);
    }
}
