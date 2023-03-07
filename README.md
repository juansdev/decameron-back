Sistema de Administración de Hoteles
====================================

Este sistema ha sido desarrollado en Laravel y tiene como objetivo permitir al gerente de operaciones hoteleras ingresar y administrar información de los hoteles de la compañía. Además, permite asignar tipos de habitación y acomodaciones de manera eficiente, respetando las reglas de validación establecidas.

Requerimientos
--------------

*   Registrar información de hoteles, incluyendo sus datos tributarios básicos.
*   Asignar tipos de habitación a los hoteles (Estándar, Junior y Suite).
*   Validar las acomodaciones según el tipo de habitación asignada:
    *   Estándar: Sencilla o Doble.
    *   Junior: Triple o Cuádruple.
    *   Suite: Sencilla, Doble o Triple.
*   No permitir que la cantidad de habitaciones configuradas supere el máximo por hotel.
*   Evitar la existencia de hoteles repetidos.
*   No permitir tipos de habitaciones y acomodaciones repetidas para el mismo hotel.
*   No permitir hotel con dirección repetidos en una misma ciudad.
*   No permitir crear un hotel con un nombre y/o NIT que ya fue registrado.
*   Cada Hotel debe tener un mínimo de 1 habitación y un máximo de 7 habitaciones.
*   No requerir administradores para datos catálogos, como ciudades, tipos de habitación o acomodación.
*   Asegurar la compatibilidad con portátiles de 15 y algunos casos de 13 pulgadas.
*   La aplicación debe ser totalmente RESTful.

Requisitos de Despliegue
------------------------

Antes de desplegar el Backend, asegúrese de cumplir con los siguientes requisitos:

*   Tener Apache, PHP 7.3^ y Composer instalados.
*   Asegurarse de que el servicio de PostgreSQL esté activo y escuchando en un puerto.
*   Tener una base de datos en PostgreSQL para persistir los datos de este proyecto.

Pasos para Desplegar el Backend
-------------------------------

1.  Abrir la consola CMD, ubicarse en la raíz del proyecto y ejecutar el siguiente comando como administrador:

`composer install`

2.  Clonar el archivo `.env.example`, cambiar el nombre de la nueva copia a `.env` y actualizar los siguientes valores:

`DB_HOST=localhost -> Dominio del Host en el que desea desplegar el Backend DB_PORT=5432 -> El puerto de escucha del servicio de PostgreSQL DB_DATABASE=db_decameron -> Nombre de la base de datos a utilizar de Postgres DB_USERNAME=postgres -> El usuario que tenga el rol de superusuario de Postgres DB_PASSWORD=thor -> La contraseña del usuario, dejar vacío si no tiene contraseña`

3. Ejecutar el siguiente comando para generar el APP_KEY en su archivo .env:

`php artisan key:generate`

*   Este comando generará un nuevo APP_KEY en el archivo .env que será utilizado para encriptar cookies y sesiones de usuario.

4. Verificar que todos los tests pasen correctamente. Para ello, ejecute los siguientes comandos:

`php artisan migrate:fresh --seed --env=testing`

*   Este comando migrará y sembrará la base de datos en modo de prueba.

`php artisan test`

*   Este comando ejecutará los tests automatizados del sistema.

5. Si todos los tests pasan correctamente, ejecute los seeders para poblar la base de datos:

`php artisan migrate:fresh --seed`

*   Este comando migrará y sembrará la base de datos en modo producción.

6. Levante y ponga a la escucha el servidor de la aplicación ejecutando el siguiente comando:

`php artisan serve`

*   Este comando levantará el servidor de desarrollo de Laravel en el puerto por defecto 8000.

*   Recuerde que puede personalizar el puerto o la dirección IP del servidor ejecutando el comando de la siguiente manera:

`php artisan serve --port=8080 --host=127.0.0.1`

7. Una vez levantado el servidor, puede acceder a la aplicación desde su navegador web en la siguiente dirección:

`http://localhost:8000`

¡Listo! Ahora tiene el backend desplegado y en funcionamiento.
