<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
    public function run(){
        User::create([
            'name' => 'System Admin',
            'email'      => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
    }
}


/**
 * 1 - composer dump-autoload - ejecutar este comando en consola
 * 2 - php artisan db:seed - ejecutar este comando en consola
 * https://stackoverflow.com/questions/36206742/class-usertableseeder-does-not-exist-laravel-5-0-php-artisan-dbseed
 * https://styde.net/sistema-de-autenticacion-de-usuarios-en-laravel/
 */
