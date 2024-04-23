-El gestor de paquetes en PHP es Composer. Al clonar repo:
composer install /update (el update no es obligatorio)

-Modificar .env
Poner las credenciales de nuestro "local"

-Poner en marcha el proyecto
php artisan serve

-View commands
php artisan

-Create migration
php artisan make:migration create_nameoftable_table

-Run migrations
php artisan migrate

-Create seeder file
php artisan make:seeder UserSeeder

-Delete DB, create tables and execute seeds
php artisan migrate:fresh --seed

-Create controller
php artisan make:controller GameController