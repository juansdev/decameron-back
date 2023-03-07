<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\MunicipalHotel;
use App\Models\Room;
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
        $nameHotel = Hotel::where('name', $request->name)->first();
        $nitHotel = Hotel::where('nit', $request->nit)->first();
        if(!($nameHotel&&$nitHotel)){
            $validatedData = $request->validate([
                'name' => 'required|string|max:255|unique:hotels,name',
                'nit' => 'required|string|max:255|unique:hotels,nit'
            ], [
                'name.required' => 'El nombre es obligatorio',
                'name.string' => 'El nombre debe ser una cadena de caracteres',
                'name.max' => 'El nombre no debe ser mayor a :max caracteres',
                'name.unique' => 'El nombre ya está en uso',
                'nit.required' => 'El NIT es obligatorio',
                'nit.string' => 'El NIT debe ser una cadena de caracteres',
                'nit.max' => 'El NIT no debe ser mayor a :max caracteres',
                'nit.unique' => 'El NIT ya está en uso'
            ]);
            $hotel = Hotel::create($validatedData);
        } else $hotel = $nameHotel;
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
            'nit' => 'required|string|max:255|unique:hotels,nit,' . $hotel->id,
            'status' => 'nullable|boolean'
        ], [
            'name.required' => 'El nombre es obligatorio',
            'name.string' => 'El nombre debe ser una cadena de caracteres',
            'name.max' => 'El nombre no debe ser mayor a :max caracteres',
            'name.unique' => 'El nombre ya está en uso',
            'nit.required' => 'El NIT es obligatorio',
            'nit.string' => 'El NIT debe ser una cadena de caracteres',
            'nit.max' => 'El NIT no debe ser mayor a :max caracteres',
            'nit.unique' => 'El NIT ya está en uso',
            'status.boolean' => 'El estado debe ser verdadero o falso'
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
