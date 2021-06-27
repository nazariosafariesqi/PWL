<?php

namespace Database\Factories;

use App\Produk;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(Produk::class,function(Faker $faker))
    {
        return [
            'nama' => $faker->word(),
            'Harga Satuan' => $faker->numberBetween(50,100),
        ];
    }
}
