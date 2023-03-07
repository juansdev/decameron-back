<?php

namespace Tests\Unit;

use App\Models\Hotel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class HotelControllerTest extends TestCase
{
    use RefreshDatabase;

    // desactivar temporalmente el middleware VerifyCsrfToken

    public function testIndex()
    {
        // Crea algunos hoteles de prueba
        $hotels = Hotel::factory()->count(3)->create();
        $response = $this->getJson(route('hotels.index'));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $response->assertJsonCount(3, 'data');

        // Verifica que se devuelvan los hoteles correctos
        $response->assertJson(['data' => $hotels->toArray()]);
    }

    public function testStore()
    {
        // Crea un hotel de prueba
        $hotel = Hotel::factory()->make();
        $data = [
            'name' => $hotel->name,
            'nit' => $hotel->nit
        ];
        $response = $this->postJson(route('hotels.store'), $data);

        // Verifica que la respuesta tenga el código de estado correcto (201)
        $response->assertStatus(Response::HTTP_CREATED);
        $this->assertDatabaseHas('hotels', $data);

        // Verifica que se haya creado el hotel correctamente
        $response->assertJsonFragment([
            'name' => $hotel['name'],
            'nit' => $hotel['nit']
        ]);
    }

    public function testShow()
    {
        // Crea un hotel de prueba
        $hotel = Hotel::factory()->create();

        // Llama al método show() con el ID del hotel
        $response = $this->getJson(route('hotels.show', $hotel));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();

        // Verifica que se devuelva el hotel correcto
        $response->assertJson(['data' => $hotel->toArray()]);
    }

    public function testUpdate()
    {
        // Crea un hotel de prueba
        $hotel = Hotel::factory()->create();
        $data = [
            'name' => 'Hotel actualizado',
            'nit' => 'NIT actualizado',
            'status' => false
        ];
        // Envía una petición PUT para actualizar el hotel
        $response = $this->putJson(route('hotels.update', $hotel), $data);

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $this->assertDatabaseHas('hotels', $data);
        // Verifica que se devuelva el hotel correcto
        $response->assertJsonFragment([
            'name' => $data['name'],
            'nit' => $data['nit'],
            'status' => $data['status'],
        ]);
    }

    public function testChangeStatus()
    {
        // Crea un hotel
        $hotel = Hotel::factory()->create();
        $originalStatus = $hotel->status;

        // Envía una petición PUT para cambiar el estado del hotel
        $response = $this->put(route('hotels.changeStatus', $hotel->id));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'El estado del hotel se actualizo correctamente'
        ]);

        // Verifica que se devuelva el estado del hotel sea lo inverso
        $this->assertEquals(!$originalStatus, $hotel->fresh()->status);
    }
}
