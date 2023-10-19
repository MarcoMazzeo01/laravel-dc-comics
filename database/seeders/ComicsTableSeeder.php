<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_comics = config('comics');

        foreach ($_comics as $_comic) {
            unset($_comic['artists']);
            unset($_comic['writers']);

            $price_float = (float)ltrim($_comic['price'], '$'); //converti prezzo da stringa a float
            $_comic['price'] = $price_float;

            $comic = new Comic();
            $comic->fill($_comic);
            $comic->save();
        }
    }
}
