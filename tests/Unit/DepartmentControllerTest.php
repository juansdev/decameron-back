<?php

namespace Tests\Unit;

use App\Models\Department;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class DepartmentControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Crea algunos departamentos de prueba
        $departments = Department::factory()->count(3)->create();

        // Llama al método index()
        $response = $this->getJson(route('departments.index'));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $response->assertJsonCount(3, 'data');

        // Verifica que se devuelvan los departamentos correctos
        $response->assertJson(['data' => $departments->toArray()]);
    }

    public function testStore()
    {
        // Crea un departamento de prueba
        $department = Department::factory()->make();
        $data = [
            'name' => $department->name,
            'code' => $department->code
        ];
        // Llama al método store() con los datos del departamento
        $response = $this->postJson(route('departments.store'), $data);

        // Verifica que la respuesta tenga el código de estado correcto (201)
        $response->assertStatus(Response::HTTP_CREATED);
        $this->assertDatabaseHas('departments', $data);

        // Verifica que se haya creado el departamento correctamente
        $response->assertJsonFragment([
            'name' => $department['name'],
            'code' => $department['code']
        ]);
    }

    public function testShow()
    {
        // Crea un departamento de prueba
        $department = Department::factory()->create();

        // Llama al método show() con el ID del departamento
        $response = $this->getJson(route('departments.show', $department));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();

        // Verifica que se devuelva el departamento correcto
        $response->assertJson(['data' => $department->toArray()]);
    }

    /**
     * Test update department
     *
     * @return void
     */
    public function testUpdate()
    {
        // Create a department
        $department = Department::factory()->create();
        $data = [
            'name' => 'Departamento Actualizado',
            'code' => 1234,
            'status' => false
        ];
        // Send PUT request to update the department
        $response = $this->putJson(route('departments.update', $department), $data);

        // Assert response
        $response->assertOk();
        $this->assertDatabaseHas('departments', $data);
        $response->assertJsonFragment([
            'name' => $data['name'],
            'code' => $data['code'],
            'status' => $data['status'],
        ]);
    }

    /**
     * Test change department status
     *
     * @return void
     */
    public function testChangeStatus()
    {
        // Create a department
        $department = Department::factory()->create();

        // Send PUT request to change the status of the department
        $response = $this->put(route('departments.changeStatus', $department->id));

        // Assert response
        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'El estado del departamento se actualizo correctamente'
        ]);

        // Assert that the municipality status has changed to false
        $this->assertFalse($department->fresh()->status);
    }
}
