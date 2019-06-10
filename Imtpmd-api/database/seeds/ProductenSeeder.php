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
        "product_naam" => 'Chaudfontaine Koolzuurvrij water, PET- fles, 500 ml',
        "ean_code" => "5449000111678",
        "merk_naam" => 'Chaudfontaine',
      ]);
      // DB::table('producten')->insert([
      //   "product_naam" => '',
      //   "ean_code" => "",
      //   "merk_naam" => '',
      // ]);
      // DB::table('producten')->insert([
      //   "product_naam" => '',
      //   "ean_code" => "",
      //   "merk_naam" => '',
      // ]);
      // DB::table('producten')->insert([
      //   "product_naam" => '',
      //   "ean_code" => "",
      //   "merk_naam" => '',
      // ]);
      // DB::table('producten')->insert([
      //   "product_naam" => '',
      //   "ean_code" => "",
      //   "merk_naam" => '',
      // ]);
      // DB::table('producten')->insert([
      //   "product_naam" => '',
      //   "ean_code" => "",
      //   "merk_naam" => '',
      // ]);
      // DB::table('producten')->insert([
      //   "product_naam" => '',
      //   "ean_code" => "",
      //   "merk_naam" => '',
      // ]);
      // DB::table('producten')->insert([
      //   "product_naam" => '',
      //   "ean_code" => "",
      //   "merk_naam" => '',
      // ]);
      // DB::table('producten')->insert([
      //   "product_naam" => '',
      //   "ean_code" => "",
      //   "merk_naam" => '',
      // ]);

    }
}
