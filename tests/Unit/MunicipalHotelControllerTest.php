<?php

namespace Tests\Unit;

use App\Models\Hotel;
use App\Models\MunicipalHotel;
use App\Models\Municipality;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class MunicipalHotelControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Crea algunos hoteles de municipios de prueba
        $municipalHotels = MunicipalHotel::factory()->count(3)->create();
        $response = $this->getJson(route('municipal-hotels.index'));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $response->assertJsonCount(3, 'data');

        // Verifica que se devuelvan los hoteles de municipios correctos
        $response->assertJson(['data' => $municipalHotels->toArray()]);
    }

    public function testStore()
    {
        // Crea un hotel del municipio de prueba
        $municipalHotels = MunicipalHotel::factory()->make();
        $hotel = Hotel::factory()->create();
        $municipality = Municipality::factory()->create();

        $data = [
            'address' => $municipalHotels->address,
            'number_rooms' => $municipalHotels->number_rooms,
            'hotel_id' => $hotel->id,
            'municipality_id' => $municipality->id,
        ];
        $response = $this->postJson(route('municipal-hotels.store'), $data);

        // Verífica que la respuesta tenga el código de estado correcto (201)
        $response->assertStatus(Response::HTTP_CREATED);

        // Verífica que se haya creado el hotel del municipio correctamente
        $response->assertJsonFragment([
            'address' => $municipalHotels->address,
            'number_rooms' => $municipalHotels->number_rooms,
            'hotel_id' => $hotel->id,
            'municipality_id' => $municipality->id,
        ]);
        $this->assertDatabaseHas('municipal_hotels', $data);
    }

    public function testShow()
    {
        // Crea un hotel del municipio de prueba
        $municipalHotel = MunicipalHotel::factory()->create();

        // Llama al método show() con el ID del hotel del municipio
        $response = $this->getJson(route('municipal-hotels.show', $municipalHotel));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();

        // Verifica que se devuelva el hotel del municipio correcto
        $response->assertJson(['data' => $municipalHotel->toArray()]);
    }

    public function testUpdate()
    {
        // Crea un municipio, hotel y hotel del municipio
        $municipality = Municipality::factory()->create(['id' => 1]);
        $hotel = Hotel::factory()->create(['id' => 1]);
        $municipalHotel = MunicipalHotel::factory()->create(['municipality_id' => $municipality->id, 'hotel_id' => $hotel->id]);
        $data = [
            'address' => 'Hotel del Municipio Actualizado',
            'number_rooms' => $municipalHotel->number_rooms,
            'hotel_id' => $hotel->id,
            'municipality_id' => $municipality->id,
            'status' => false
        ];
        // Envía una petición PUT para actualizar el hotel del municipio
        $response = $this->putJson(route('municipal-hotels.update', $municipalHotel), $data);

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $this->assertDatabaseHas('municipal_hotels', $data);
        // Verifica que se devuelva el hotel del municipio correcto
        $response->assertJsonFragment([
            'address' => $data['address'],
            'number_rooms' => $data['number_rooms'],
            'hotel_id' => $data['hotel_id'],
            'municipality_id' => $data['municipality_id'],
            'status' => $data['status'],
        ]);
    }

    public function testChangeStatus(): void
    {
        // Crea un hotel del municipio
        $municipalHotels = MunicipalHotel::factory()->create();
        $originalStatus = $municipalHotels->status;

        // Envía una petición PUT para cambiar el estado del hotel del municipio
        $response = $this->put(route('municipal-hotels.changeStatus', $municipalHotels->id));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'El estado del hotel del municipio se actualizo correctamente'
        ]);

        // Verifica que se devuelva el estado del hotel del municipio sea lo inverso
        $this->assertEquals(!$originalStatus, $municipalHotels->fresh()->status);
    }
}
