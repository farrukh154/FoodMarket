<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            ['img'=>'ProductImages/image (8).png', 'card_price'=>'45', 'price'=>'65',
            'description'=>'Молоко ПРОСТОКВАШИНО паст. питьевое цельное отборное...','star'=>'4'],
            ['img'=>'ProductImages/image (8).png', 'card_price'=>'45', 'price'=>'65',
            'description'=>'Молоко ПРОСТОКВАШИНО паст. питьевое цельное отборное...','star'=>'4'],
            ['img'=>'ProductImages/image (8).png', 'card_price'=>'45', 'price'=>'65',
            'description'=>'Молоко ПРОСТОКВАШИНО паст. питьевое цельное отборное...','star'=>'4'],
            ['img'=>'ProductImages/image (8).png', 'card_price'=>'45', 'price'=>'65',
            'description'=>'Молоко ПРОСТОКВАШИНО паст. питьевое цельное отборное...','star'=>'4'],
            ['img'=>'ProductImages/image (8).png', 'card_price'=>'45', 'price'=>'65',
            'description'=>'Молоко ПРОСТОКВАШИНО паст. питьевое цельное отборное...','star'=>'4'],
        ];

        foreach($arr as $value){
            Product::create($value);
        }
    }
}
