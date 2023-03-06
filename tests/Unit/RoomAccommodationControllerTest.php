<?php

namespace Tests\Unit;

use App\Models\RoomAccommodation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class RoomAccommodationControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Crea algunas acomodaciones de habitaciones de prueba
        $roomAccommodations = RoomAccommodation::factory()->count(3)->create();
        $response = $this->getJson(route('room-accommodations.index'));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $response->assertJsonCount(3, 'data');

        // Verifica que se devuelvan las acomodaciones de habitaciones correctas
        $response->assertJson(['data' => $roomAccommodations->toArray()]);
    }

    public function testStore()
    {
        // Crea un acomodación de habitación de prueba
        $roomAccommodation = RoomAccommodation::factory()->make();
        $data = [
            'name' => $roomAccommodation->name
        ];
        $response = $this->postJson(route('room-accommodations.store'), $data);

        // Verifica que la respuesta tenga el código de estado correcto (201)
        $response->assertStatus(Response::HTTP_CREATED);
        $this->assertDatabaseHas('room_accommodations', $data);

        // Verifica que se haya creado el acomodación de habitación correctamente
        $response->assertJsonFragment([
            'name' => $roomAccommodation['name']
        ]);
    }

    public function testShow()
    {
        // Crea un acomodación de habitación de prueba
        $roomAccommodation = RoomAccommodation::factory()->create();

        // Llama al método show() con el ID de la acomodación de habitación
        $response = $this->getJson(route('room-accommodations.show', $roomAccommodation));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();

        // Verifica que se devuelva la acomodación de habitación correcta
        $response->assertJson(['data' => $roomAccommodation->toArray()]);
    }

    public function testUpdate()
    {
        // Crea un acomodación de habitación de prueba
        $roomAccommodation = RoomAccommodation::factory()->create();
        $data = [
            'name' => 'Acomodación de habitación actualizado',
            'status' => false
        ];
        // Envía una petición PUT para actualizar la acomodación de habitación
        $response = $this->putJson(route('room-accommodations.update', $roomAccommodation), $data);

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $this->assertDatabaseHas('room_accommodations', $data);
        // Verifica que se devuelva la acomodación de habitación correcta
        $response->assertJsonFragment([
            'name' => $data['name'],
            'status' => $data['status'],
        ]);
    }

    public function testChangeStatus()
    {
        // Crea un acomodación de habitación
        $roomAccommodation = RoomAccommodation::factory()->create();
        $originalStatus = $roomAccommodation->status;

        // Envía una petición PUT para cambiar el estado de la acomodación de habitación
        $response = $this->put(route('room-accommodations.changeStatus', $roomAccommodation->id));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'El estado de la acomodación de la habitación se actualizo correctamente'
        ]);

        // Verifica que se devuelva el estado de la acomodación de habitación sea lo inverso
        $this->assertEquals(!$originalStatus, $roomAccommodation->fresh()->status);
    }
}
