Antes de desplegar este proyecto:

* Asegurarse de que el servicio de PostgreSQL este activo.
* Tener una base de datos para persistir los datos de este proyecto.

Para desplegar este proyecto se debe hacer lo siguiente:

1. Abrir la consola CMD y ejecutar los siguientes comandos:

- composer install
- php artisan key:generate

2. Clonar el .env.example, cambiando solo el nombre de la nueva copia a .env
   Actualizar los siguientes valores:

- DB_HOST=localhost -> Dominio del Host en el que desea desplegar el Backend
- DB_PORT=5432 -> Puerto de Postgres
- DB_DATABASE=db_decameron -> Nombre de la base de datos a utilizar de Postgres
- DB_USERNAME=postgres -> El usuario que tenga el rol de superusuario de Postgres
- DB_PASSWORD=thor -> La contraseña del usuario

3. Instalar las depedencias de PHP del proyecto, mediante el siguiente comando:

- composer install

4. Verificar que todos los tests pasen correctamente:

- php artisan test
- php artisan migrate:fresh --seed --env=testing

5. Si todo esta correcto, hacer los seeders:

- php artisan migrate:fresh --seed

6. Levantar y poner a la escucha el Backend:

- php artisan serv
