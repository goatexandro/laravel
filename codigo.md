PARA CREAR NUEVO PROYECTO

composer create-project  --prefer -dist laravel/laravel practica




PARA CREAR NUEVA MIGRATION

php artisan make:migration create_alumno_table




PARA CREAR LA TABLA ALUMNO

php artisan migrate




PARA REVERTIR LAS MIGACIONES DE LA BASE DE DATOS

php artisan migrate:rollback




PARA CREAR UN SEEDER

php artisan make:seeder




PARA EJECUTAR UN SEEDER ESPECIFICO

php artisan db:seed –class=nombredetabla




PARA EJECUTAR TODOS LOS SEEDERS

php artisan db:seed




PARA CREAR UN CONTROLADOR

php artisan make:controller 




PARA CREAR UN CONTROLADOR CON LAS FUNCIONES PREDETERMINADAS


php artisan make:controller noomberdelcontrolador –resouce




PARA CREAR LA API

php artisan install:api




PARA CREAR UN MIDDLEWARE

php artisan make:middleware

