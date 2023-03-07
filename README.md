Antes de desplegar el Backend:

* Tener Apache y Composer instalados.
* Asegurase de que el servicio de PostgreSQL este activo y escuchando en un puerto.
* Tener una base de datos en PostgreSQL para persistir los datos de este proyecto.

Para desplegar el Backend se debe hacer lo siguiente:

1. Abrir la consola CMD, ubicarse en la raíz del proyecto y ejecutar los siguientes comandos como administrador:

- composer install
- php artisan key:generate

2. Clonar el .env.example, cambiar el nombre de la nueva copia a .env y actualizar los siguientes valores:

- DB_HOST=localhost -> Dominio del Host en el que desea desplegar el Backend
- DB_PORT=5432 -> El puerto de escucha del servicio de PostgreSQL
- DB_DATABASE=db_decameron -> Nombre de la base de datos a utilizar de Postgres
- DB_USERNAME=postgres -> El usuario que tenga el rol de superusuario de Postgres
- DB_PASSWORD=thor -> La contraseña del usuario, dejar vacío si no tiene contraseña

3. Verificar que todos los tests pasen correctamente:

- php artisan test
- php artisan migrate:fresh --seed --env=testing

4. Si todo está correcto, ejecutar los seeders:

- php artisan migrate:fresh --seed

6. Levantar y poner a la escucha el Backend:

- php artisan serv
