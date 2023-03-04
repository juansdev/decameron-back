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
        $response = $this->getJson('/api/departments');

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertStatus(200);

        // Verifica que se devuelvan los departamentos correctos
        $response->assertJson(['data' => $departments->toArray()]);
    }

    public function testStore()
    {
        // Crea un departamento de prueba
        $department = Department::factory()->make();

        // Llama al método store() con los datos del departamento
        $response = $this->postJson('/api/departments', [
            'name' => $department->name,
            'code' => $department->code
        ]);

        // Verifica que la respuesta tenga el código de estado correcto (201)
        $response->assertStatus(201);

        // Verifica que se haya creado el departamento correctamente
        $response->assertJson(['message' => 'Departamento creado correctamente']);
    }

    public function testShow()
    {
        // Crea un departamento de prueba
        $department = Department::factory()->create();

        // Llama al método show() con el ID del departamento
        $response = $this->getJson('/api/departments/' . $department->id);

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertStatus(200);

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

        // Send PUT request to update the department
        $response = $this->json('PUT', "/api/departments/{$department->id}", [
            'name' => 'Updated Department',
            'code' => 1234,
            'status' => false
        ]);

        // Assert response
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJson([
            'message' => 'Departamento actualizado correctamente'
        ]);
        $this->assertDatabaseHas('departments', [
            'id' => $department->id,
            'name' => 'Updated Department',
            'code' => 1234,
            'status' => false
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
        $response = $this->json('PUT', "/api/departments/{$department->id}/status");

        // Assert response
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJson([
            'message' => 'El estado del departamento se actualizo correctamente'
        ]);
        $this->assertDatabaseHas('departments', [
            'id' => $department->id,
            'status' => false
        ]);
    }
}
