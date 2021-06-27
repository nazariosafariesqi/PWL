<?php

namespace Database\Seeders;
use Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::table('produk')->insert([
            "Nier Game For PC,800000",
            "Nier Game For Playstation,800000",
            "Nier Game For X-BOX,800000"
        ]);
        
    }
}