<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\MunicipalHotel;
use App\Models\Municipality;
use App\Models\Room;
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
            'address' => 'required|string|max:255',
            'number_rooms' => 'required|integer'
        ], [
            'hotel_id.required' => 'El hotel es obligatorio',
            'hotel_id.exists' => 'El hotel no se encuentra registrado',
            'municipality_id.required' => 'El municipio es obligatorio',
            'municipality_id.exists' => 'El municipio no se encuentra registrado',
            'address.required' => 'La dirección es obligatoria',
            'address.string' => 'La dirección debe ser una cadena de caracteres',
            'address.max' => 'La dirección no debe ser mayor a :max caracteres',
            'number_rooms.required' => 'El número de habitaciones es obligatorio',
            'number_rooms.integer' => 'El número de habitaciones debe ser un número entero'
        ]);
        if (MunicipalHotel::where('municipality_id', $validatedData['municipality_id'])->where('address', $validatedData['address'])->exists()) return response()->json([
            'message' => 'Ya existe un hotel del mismo municipio con la misma dirección'
        ], 400);

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
     * @param MunicipalHotel $municipalHotel
     * @return JsonResponse
     */
    public function update(Request $request, MunicipalHotel $municipalHotel): JsonResponse
    {
        $validatedData = $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'municipality_id' => 'required|exists:municipalities,id',
            'address' => 'required|string|max:255,' . $municipalHotel->id,
            'number_rooms' => 'required|integer',
            'status' => 'nullable|boolean',
        ], [
            'hotel_id.required' => 'El hotel es obligatorio',
            'hotel_id.exists' => 'El hotel no se encuentra registrado',
            'municipality_id.required' => 'El municipio es obligatorio',
            'municipality_id.exists' => 'El municipio no se encuentra registrado',
            'address.required' => 'La dirección es obligatoria',
            'address.string' => 'La dirección debe ser una cadena de caracteres',
            'address.max' => 'La dirección no debe ser mayor a :max caracteres',
            'number_rooms.required' => 'El número de habitaciones es obligatorio',
            'number_rooms.integer' => 'El número de habitaciones debe ser un número entero'
        ]);
        $isExistMunicipalHotel = MunicipalHotel::where('municipality_id', $validatedData['municipality_id'])->where('address', $validatedData['address']);
        if ($isExistMunicipalHotel->count() > 1 || $isExistMunicipalHotel->first() && ($isExistMunicipalHotel->first()->id !== $municipalHotel->id)) return response()->json([
            'message' => 'Ya existe un hotel del mismo municipio con la misma dirección'
        ], 400);
        else if (Room::where('municipal_hotel_id', $municipalHotel->id)->where('status', 1)->first()) return response()->json([
            'message' => 'No es posible editar el Hotel, debido a que tiene dependencias'
        ], 400);

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

        $municipalHotel->address = $validatedData['address'];
        $municipalHotel->number_rooms = $validatedData['number_rooms'];
        $municipalHotel->status = $validatedData['status'] ?? true;
        $municipalHotel->hotel()->associate($hotel);
        $municipalHotel->municipality()->associate($municipality);
        $municipalHotel->save();

        return response()->json([
            'message' => 'El hotel del municipio fue actualizado correctamente',
            'data' => $municipalHotel->load(['hotel', 'municipality'])
        ]);
    }

    /**
     * Change the status of the specified resource in storage.
     *
     * @param MunicipalHotel $municipalHotel
     * @return JsonResponse
     */
    public function changeStatus(MunicipalHotel $municipalHotel): JsonResponse
    {
        if ($municipalHotel->status) {
            $isExistMunicipalHotel = MunicipalHotel::where('municipality_id', $municipalHotel->municipality_id)->where('address', $municipalHotel->address);
            if ($isExistMunicipalHotel->count() > 1 || $isExistMunicipalHotel->first() && ($isExistMunicipalHotel->first()->id !== $municipalHotel->id)) return response()->json([
                'message' => 'Ya existe un hotel del mismo municipio con la misma dirección'
            ], 400);
            else if (Room::where('municipal_hotel_id', $municipalHotel->id)->where('status', 1)->first()) return response()->json([
                'message' => 'No es posible editar el Hotel, debido a que tiene dependencias'
            ], 400);
        }
        $municipalHotel->status = !$municipalHotel->status;
        $municipalHotel->save();

        return response()->json(['message' => 'El estado del hotel del municipio se actualizo correctamente']);
    }
}
