<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CategoriaTableSeeder::class);
        $this->call(TipoTableSeeder::class);
        $this->call(MarcaTableSeeder::class);
        $this->call(MonedaTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        Model::reguard();
    }
}
