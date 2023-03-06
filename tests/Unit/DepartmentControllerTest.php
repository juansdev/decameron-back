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

    public function testUpdate()
    {
        // Crea un departamento
        $department = Department::factory()->create();
        $data = [
            'name' => 'Departamento Actualizado',
            'code' => 1234,
            'status' => false
        ];
        // Envía una petición PUT para actualizar el departamento
        $response = $this->putJson(route('departments.update', $department), $data);

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $this->assertDatabaseHas('departments', $data);
        // Verifica que se devuelva el departamento correcto
        $response->assertJsonFragment([
            'name' => $data['name'],
            'code' => $data['code'],
            'status' => $data['status'],
        ]);
    }

    public function testChangeStatus()
    {
        // Crea un departamento
        $department = Department::factory()->create();
        $originalStatus = $department->status;

        // Envía una petición PUT para cambiar el estado del departamento
        $response = $this->put(route('departments.changeStatus', $department->id));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'El estado del departamento se actualizo correctamente'
        ]);

        // Verifica que se devuelva el estado del departamento sea lo inverso
        $this->assertEquals(!$originalStatus, $department->fresh()->status);
    }
}
