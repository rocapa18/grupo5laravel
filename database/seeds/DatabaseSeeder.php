<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
        $this->call(SeederFaq::class);
        */
        factory(App\Faq::class, 100)->create();
        factory(App\Contacto::class, 100)->create();
        factory(App\Producto::class, 100)->create();
    }
}
