<?php

namespace Tests\Unit;

use App\Models\Department;
use App\Models\Municipality;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class MunicipalityControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function testIndex()
    {
        $municipalities = Municipality::factory()->count(3)->create();

        $response = $this->getJson(route('municipalities.index'));

        $response->assertOk();
        $response->assertJsonCount(3, 'data');
        $response->assertJson(['data' => $municipalities->toArray()]);
    }

    /**
     * @test
     */
    public function testStore()
    {
        $municipality = Municipality::factory()->make();
        $data = [
            'name' => $municipality->name,
            'code' => $municipality->code,
            'department_id' => $municipality->department_id,
        ];

        $response = $this->postJson(route('municipalities.store'), $data);

        $response->assertStatus(Response::HTTP_CREATED);
        $this->assertDatabaseHas('municipalities', $data);
        $response->assertJsonFragment([
            'name' => $municipality['name'],
            'code' => $municipality['code'],
            'department_id' => $municipality['department_id'],
        ]);
    }

    public function testShow()
    {
        $municipality = Municipality::factory()->create();

        $response = $this->getJson(route('municipalities.show', $municipality));

        $response->assertOk();
        $response->assertJson(['data' => $municipality->toArray()]);
    }

    public function testUpdate()
    {
        $department = Department::factory()->create(['id' => 1]);
        $municipality = Municipality::factory()->create();
        $data = [
            'name' => 'Municipio Actualizado',
            'code' => 1234,
            'department_id' => $department->id,
            'status' => false
        ];
        $response = $this->putJson(route('municipalities.update', $municipality), $data);

        $response->assertOk();
        $this->assertDatabaseHas('municipalities', $data);
        $response->assertJsonFragment([
            'name' => $data['name'],
            'code' => $data['code'],
            'department_id' => $data['department_id'],
            'status' => $data['status'],
        ]);
    }

    /**
     * Test changeStatus method.
     *
     * @return void
     */
    public function testChangeStatus(): void
    {
        // Create a Municipality instance
        $municipality = Municipality::factory()->create();

        // Make a PUT request to change the municipality status
        $response = $this->put(route('municipalities.changeStatus', $municipality->id));

        // Assert that the response status is 200
        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'El estado del municipio se actualizo correctamente'
        ]);

        // Assert that the municipality status has changed to false
        $this->assertFalse($municipality->fresh()->status);
    }
}
