<?php

namespace Tests\Unit;

use App\Models\Department;
use App\Models\Municipality;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class MunicipalityControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Crea algunos municipios de prueba
        $municipalities = Municipality::factory()->count(3)->create();
        $arrayMunicipalities = $municipalities->toArray();
        usort($arrayMunicipalities, function ($a, $b) {
            return strcmp($a['name'], $b['name']);
        });
        $response = $this->getJson(route('municipalities.index'));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $response->assertJsonCount(3, 'data');

        // Verifica que se devuelvan los municipios correctos
        $response->assertJson(['data' => $arrayMunicipalities]);
    }

    public function testStore()
    {
        // Crea un municipio de prueba
        $municipality = Municipality::factory()->make();
        $data = [
            'name' => $municipality->name,
            'code' => $municipality->code,
            'department_id' => $municipality->department_id,
        ];
        $response = $this->postJson(route('municipalities.store'), $data);

        // Verifica que la respuesta tenga el código de estado correcto (201)
        $response->assertStatus(Response::HTTP_CREATED);
        $this->assertDatabaseHas('municipalities', $data);

        // Verifica que se haya creado el municipio correctamente
        $response->assertJsonFragment([
            'name' => $municipality['name'],
            'code' => $municipality['code'],
            'department_id' => $municipality['department_id'],
        ]);
    }

    public function testShow()
    {
        // Crea un municipio de prueba
        $municipality = Municipality::factory()->create();

        // Llama al método show() con el ID del municipio
        $response = $this->getJson(route('municipalities.show', $municipality));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();

        // Verifica que se devuelva el municipio correcto
        $response->assertJson(['data' => $municipality->toArray()]);
    }

    public function testUpdate()
    {
        // Crea un departamento y municipio
        $department = Department::factory()->create(['id' => 1]);
        $municipality = Municipality::factory()->create();
        $data = [
            'name' => 'Municipio Actualizado',
            'code' => 1234,
            'department_id' => $department->id,
            'status' => false
        ];
        // Envía una petición PUT para actualizar el municipio
        $response = $this->putJson(route('municipalities.update', $municipality), $data);

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertOk();
        $this->assertDatabaseHas('municipalities', $data);
        // Verifica que se devuelva el municipio correcto
        $response->assertJsonFragment([
            'name' => $data['name'],
            'code' => $data['code'],
            'department_id' => $data['department_id'],
            'status' => $data['status'],
        ]);
    }

    public function testChangeStatus(): void
    {
        // Crea un municipio
        $municipality = Municipality::factory()->create();
        $originalStatus = $municipality->status;

        // Envía una petición PUT para cambiar el estado del municipio
        $response = $this->put(route('municipalities.changeStatus', $municipality->id));

        // Verifica que la respuesta tenga el código de estado correcto (200)
        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'El estado del municipio se actualizo correctamente'
        ]);

        // Verifica que se devuelva el estado del municipio sea lo inverso
        $this->assertEquals(!$originalStatus, $municipality->fresh()->status);
    }
}
