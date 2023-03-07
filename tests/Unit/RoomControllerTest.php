<?php

namespace Tests\Unit;

use App\Models\MunicipalHotel;
use App\Models\RoomAccommodation;
use App\Models\RoomType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;
use App\Models\Room;

class RoomControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Crea algunas habitaciones de prueba
        $rooms = Room::factory()->count(3)->create();
        $response = $this->getJson(route('rooms.index'));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $response->assertJsonCount(3, 'data');

        // Verifica que se devuelvan las habitaciones correctas
        $response->assertJson(['data' => $rooms->toArray()]);
    }

    public function testStore()
    {
        // Crea un hotel de prueba
        $municipalHotel = MunicipalHotel::factory()->create();

        // Crea un tipo de habitación y una acomodación de prueba
        $roomType = RoomType::factory()->create();
        $roomAccommodation = RoomAccommodation::factory()->create();

        // Crea un arreglo con los datos necesarios para crear una habitación
        $data = [
            'municipal_hotel_id' => $municipalHotel->id,
            'room_type_id' => $roomType->id,
            'room_accommodation_id' => $roomAccommodation->id
        ];

        // Envía una solicitud POST con los datos y verifica que se cree la habitación correctamente
        $response = $this->postJson(route('rooms.store'), $data);

        // Verifica que la respuesta tenga el código de estado correcto (201)
        $response->assertStatus(Response::HTTP_CREATED);

        // Verifica que se haya creado la habitación correctamente
        $response->assertJsonFragment([
            'municipal_hotel_id' => $municipalHotel->id,
            'room_type_id' => $roomType->id,
            'room_accommodation_id' => $roomAccommodation->id
        ]);

        // Verifica que la habitación se haya guardado en la base de datos
        $this->assertDatabaseHas('rooms', $data);
    }

    public function testShow()
    {
        // Crea un habitación de prueba
        $room = Room::factory()->create();

        // Llama al método show() con el ID de la habitación
        $response = $this->getJson(route('rooms.show', $room));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();

        // Verifica que se devuelva la habitación correcto
        $response->assertJson(['data' => $room->toArray()]);
    }

    public function testUpdate()
    {
        // Crea un habitación, hotel y habitación
        $municipalHotel = MunicipalHotel::factory()->create(['id' => 1]);
        $roomType = RoomType::factory()->create(['id' => 1]);
        $roomAccommodation = RoomAccommodation::factory()->create(['id' => 1]);
        $room = Room::factory()->create(['municipal_hotel_id' => $municipalHotel->id, 'room_type_id' => $roomType->id, 'room_accommodation_id' => $roomAccommodation->id]);
        $data = [
            'municipal_hotel_id' => $municipalHotel->id,
            'room_type_id' => $roomType->id,
            'room_accommodation_id' => $roomAccommodation->id,
            'status' => false
        ];
        // Envía una petición PUT para actualizar la habitación
        $response = $this->putJson(route('rooms.update', $room), $data);

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $this->assertDatabaseHas('rooms', $data);
        // Verifica que se devuelva la habitación correcto
        $response->assertJsonFragment([
            'municipal_hotel_id' => $data['municipal_hotel_id'],
            'room_type_id' => $data['room_type_id'],
            'room_accommodation_id' => $data['room_accommodation_id'],
            'status' => $data['status'],
        ]);
    }

    public function testChangeStatus(): void
    {
        // Crea una habitación
        $room = Room::factory()->create();
        $originalStatus = $room->status;

        // Envía una petición PUT para cambiar el estado de la habitación
        $response = $this->put(route('rooms.changeStatus', $room->id));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'El estado del cuarto se actualizo correctamente'
        ]);

        // Verifica que el estado de la habitación se haya actualizado correctamente
        $room->refresh();
        $this->assertNotEquals($originalStatus, $room->status);

        // Verifica que se devuelva un mensaje de error si se intenta crear una habitación duplicada
        $room->status = $originalStatus;
        $room->save();

        $duplicateRoom = Room::factory()->create([
            'municipal_hotel_id' => $room->municipal_hotel_id,
            'room_type_id' => $room->room_type_id,
            'room_accommodation_id' => $room->room_accommodation_id,
            'status'=>false
        ]);

        $response = $this->put(route('rooms.changeStatus', $duplicateRoom->id));
        $response->assertStatus(400);
        $response->assertJson([
            'message' => 'Ya existe una habitación del hotel con el mismo tipo de habitación y acomodación'
        ]);

        // Verifica que se devuelva un mensaje de error si el hotel alcanzó el número máximo de habitaciones
        $municipalHotel = MunicipalHotel::find($room->municipal_hotel_id);
        $roomsByHotel = Room::where('municipal_hotel_id', $room->municipal_hotel_id)->where('status', 1);

        if ($roomsByHotel->count() >= $municipalHotel->number_rooms) {
            $response = $this->put(route('rooms.changeStatus', $roomsByHotel->id));
            $response->assertStatus(400);
            $response->assertJson([
                'message' => 'El hotel ya alcanzo el máximo de habitaciones'
            ]);
        }

    }
}
