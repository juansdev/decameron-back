<?php

namespace Tests\Unit;

use App\Models\RoomType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class RoomTypeControllerTest extends TestCase
{
    use RefreshDatabase;


    public function testIndex()
    {
        // Crea algunos tipos de habitaciones de prueba
        $roomTypes = RoomType::factory()->count(3)->create();

        // Llama al método index()
        $response = $this->getJson(route('room-types.index'));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $response->assertJsonCount(3, 'data');

        // Verifica que se devuelvan los departamentos correctos
        $response->assertJson(['data' => $roomTypes->toArray()]);
    }

    public function testStore()
    {
        // Crea un tipo de habitación de prueba
        $roomType = RoomType::factory()->make();
        $data = [
            'name' => $roomType->name
        ];
        // Envía la solicitud con el token CSRF en el encabezado
        $response = $this->postJson(route('room-types.store'), $data);

        // Verifica que la respuesta tenga el código de estado correcto (201)
        $response->assertStatus(Response::HTTP_CREATED);
        $this->assertDatabaseHas('room_types', $data);

        // Verifica que se haya creado el tipo de habitación correctamente
        $response->assertJsonFragment([
            'name' => $roomType['name']
        ]);
    }

    public function testShow()
    {
        // Crea un tipo de habitación de prueba
        $roomType = RoomType::factory()->create();

        // Llama al método show() con el ID del tipo de habitación
        $response = $this->getJson(route('room-types.show', $roomType));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();

        // Verifica que se devuelva el tipo de habitación correcto
        $response->assertJson(['data' => $roomType->toArray()]);
    }

    public function testUpdate()
    {
        // Crea un tipo de habitación de prueba
        $roomType = RoomType::factory()->create();
        $data = [
            'name' => 'Tipo de habitación actualizado',
            'status' => false
        ];
        // Send PUT request to update the department
        $response = $this->putJson(route('room-types.update', $roomType), $data);

        // Assert response
        $response->assertOk();
        $this->assertDatabaseHas('room_types', $data);
        $response->assertJsonFragment([
            'name' => $data['name'],
            'status' => $data['status'],
        ]);
    }

    public function testChangeStatus()
    {
        // Create a department
        $roomType = RoomType::factory()->create();

        // Send PUT request to change the status of the department
        $response = $this->put(route('room-types.changeStatus', $roomType->id));

        // Assert response
        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'El estado del tipo de habitación se actualizo correctamente'
        ]);

        $this->assertFalse($roomType->fresh()->status);
    }
}
