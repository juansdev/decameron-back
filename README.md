Para ejecutar este proyecto se debe hacer lo siguiente:

1. Abrir la consola CMD y ejecutar los siguientes comandos.
2. composer install
3. php artisan key:generate
4. Clonar el .env.example, cambiando solo el nombre de la nueva copia a .env
5. Actualizar los siguientes valores:

DB_HOST=localhost -> Dominio del Host en el que desea desplegar el Backend
DB_PORT=5432 -> Puerto de Postgres
DB_DATABASE=db_decameron -> Nombre de la base de datos a utilizar de Postgres
DB_USERNAME=postgres -> El usuario que tenga el rol de superusuario de Postgres
DB_PASSWORD=thor -> La contraseña del usuario

6. Instalar las depedencias de PHP del proyecto, mediante el siguiente comando: composer install
7. Verificar que todos los tests pasen correctamente: php artisan migrate:fresh --seed --env=testing
8. Si todo esta correcto, hacer los seeders: php artisan migrate:fresh --seed
9. Levantar y poner a la escucha el Backend: php artisan serv
