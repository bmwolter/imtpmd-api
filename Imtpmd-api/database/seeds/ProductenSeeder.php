<?php

use Illuminate\Database\Seeder;

class ProductenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('producten')->insert([
        "product_naam" => 'Chaudfontaine water',
        "ean_code" => "5449000111678",
        "merk_naam" => 'Chaudfontaine',
        "categorie" => 'water',
      ]);
      DB::table('producten')->insert([
        "product_naam" => 'Cola',
        "ean_code" => "5000112544633",
        "merk_naam" => 'Coca Cola',
        "categorie" => 'frisdrank',
      ]);
      DB::table('producten')->insert([
        "product_naam" => 'Aarbeien kwark',
        "ean_code" => "5410146404313",
        "merk_naam" => 'Danio Aarbeien kwark',
        "categorie" => 'kwark',
      ]);
      DB::table('producten')->insert([
        "product_naam" => 'Eieren',
        "ean_code" => "8718452261017",
        "merk_naam" => 'Jumbo Eieren',
        "categorie" => 'eieren',
      ]);
      DB::table('producten')->insert([
        "product_naam" => 'Kaas',
        "ean_code" => "8718452299270",
        "merk_naam" => 'Jumbo Jong belegen kaas',
        "categorie" => 'kaas',
      ]);
      DB::table('producten')->insert([
        "product_naam" => 'Achterham',
        "ean_code" => "8718375463246",
        "merk_naam" => 'Jumbo Achterham',
        "categorie" => 'ham',
      ]);
      DB::table('producten')->insert([
        "product_naam" => 'Pizza speciale',
        "ean_code" => "4001724819509",
        "merk_naam" => 'Dr. Oetker Pizza speciale',
        "categorie" => 'pizza',
      ]);
      DB::table('producten')->insert([
        "product_naam" => 'Melk',
        "ean_code" => "8711715872722",
        "merk_naam" => 'Jumbo Volle Melk',
        "categorie" => 'melk',
      ]);
      DB::table('producten')->insert([
        "product_naam" => 'Bruinbrood Tijger Half',
        "ean_code" => "8718452356270",
        "merk_naam" => 'Jumbo Bruinbrood Tijger Half',
        "categorie" => 'brood',
      ]);

    }
}
