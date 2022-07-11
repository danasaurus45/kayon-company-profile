<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            [
                'nama_produk' => '100 % Selected Coconut Shell Charcoal Briquettes for Shisha: Cube Shape',
                'ket_produk' => 'High Premium Quality',
                'level_produk' => '(Diamond Level) European Standard: France, Germany & UK',
                'calorie' => '7000 - 7500',
                'moisture' => '7',
                'ash_content' => '',
                'fixed_carbon' => '85',
                'burning_time' => '2 Hours',
                'ash_type' => 'White Ash',
                'size' => '2.5cm x 2.5cm x 2.5cm (Can be Customized)',
                'certificate' => 'SMDS Certificate 1,7-2%',
                'packaging' => '10 Kg packaging carton (Include inner box)',
                'img_produk' => 'products/Picture1.jpg',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_produk' => 'Mix Coconut Charcoal Sulawesi and Java for Shisha: Cube Shape',
                'ket_produk' => 'Premium Quality',
                'level_produk' => '(Gold Level) Middle East and Asia Standard: Dubai -  Lebanon – Egypt – South Africa',
                'calorie' => '7000',
                'moisture' => '7-10',
                'ash_content' => '2.3',
                'fixed_carbon' => '80',
                'burning_time' => '2 Hours',
                'ash_type' => 'White Ash',
                'size' => '2.5cm x 2.5cm x 2.5cm (Can be Customized)',
                'certificate' => 'SMDS Certificate',
                'packaging' => '10 Kg packaging carton (Include inner box)',
                'img_produk' => 'products/Picture2.jpg',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_produk' => 'Mix Coconut Charcoal Sulawesi and Java for Shisha: Cube Shape',
                'ket_produk' => 'Medium Quality',
                'level_produk' => '(Silver Level) Middle East and Asia Standard: Dubai -  Lebanon – Egypt – South Africa',
                'calorie' => '6800 - 7000',
                'moisture' => '7-10',
                'ash_content' => '3',
                'fixed_carbon' => '75',
                'burning_time' => '2 Hours',
                'ash_type' => 'White Ash',
                'size' => '2.5cm x 2.5cm x 2.5cm (Can be Customized)',
                'certificate' => 'SMDS Certificate',
                'packaging' => '10 Kg packaging carton (Include inner box)',
                'img_produk' => 'products/Picture3.jpg',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_produk' => 'Mix Coconut Waste Charcoal 80 % & 20 % Pure Coconut Charcoal for Shisha: Cube Shape',
                'ket_produk' => 'Regular Quality',
                'level_produk' => '(Silver Level) Middle East and Asia Standard: India -  Sri Lanka – Local Market',
                'calorie' => '6000 - 6500',
                'moisture' => '7-10',
                'ash_content' => '5',
                'fixed_carbon' => '75',
                'burning_time' => '2 Hours',
                'ash_type' => 'White Cream Ash',
                'size' => '2.5cm x 2.5cm x 2.5cm (Can be Customized)',
                'certificate' => 'SMDS Certificate',
                'packaging' => '10 Kg packaging carton (Exclude inner box)',
                'img_produk' => 'products/Picture4.jpg',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_produk' => 'Mix Coconut & Sawdust Briquettes: Hexagonal Shape',
                'ket_produk' => '',
                'level_produk' => '(Silver Level) Middle East and Asia Standard: Dubai -  Lebanon – Egypt – South Africa',
                'calorie' => '6500 - 7000',
                'moisture' => '10',
                'ash_content' => '4-10',
                'fixed_carbon' => '85',
                'burning_time' => '5 Hours',
                'ash_type' => 'White cream ash',
                'size' => '',
                'certificate' => 'SMDS Certificate',
                'packaging' => '10 Kg packaging carton (Exclude inner box)',
                'img_produk' => 'products/Picture5.png',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_produk' => 'Hardwood Charcoal / Lump Wood / Halaban Charcoal',
                'ket_produk' => '',
                'level_produk' => '(Silver Level) Middle East and Asia Standard: Dubai -  Lebanon – Egypt – South Africa',
                'calorie' => '6500 - 7000',
                'moisture' => '10',
                'ash_content' => '4-10',
                'fixed_carbon' => '85',
                'burning_time' => '5 Hours',
                'ash_type' => 'White cream ash',
                'size' => '',
                'certificate' => 'SMDS Certificate',
                'packaging' => '10 Kg packaging carton (Exclude inner box)',
                'img_produk' => 'products/Picture6.png',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ]
        ]);
    }
}
