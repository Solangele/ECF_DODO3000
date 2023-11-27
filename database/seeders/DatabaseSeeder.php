<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dodo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'email' => 'aaa@ccc',
        ]);

        Dodo::factory()->create([
            'brand'=> 'EPEDA',
            'size'=> '90 x 190',
            'price'=>'759,00', 
            'reduction'=> '230,00',
            'total'=>'529,00',
            'image'=>'/uploads/epeda90.jpg'
        ]);

        Dodo::factory()->create([
            'brand'=> 'DREAMWAY',
            'size'=> '90 x 190',
            'price'=>'809,00', 
            'reduction'=> '100,00',
            'total'=>'709,00',
            'image'=>'/uploads/Dreamway90.jpeg'
        ]);

        Dodo::factory()->create([
            'brand'=> 'BULTEX',
            'size'=> '140 x 190',
            'price'=>'759,00', 
            'reduction'=> '230,00',
            'total'=>'529,00',
            'image'=>'/uploads/bultex.jpeg'
        ]);

        Dodo::factory()->create([
            'brand'=> 'EPEDA',
            'size'=> '160 x 200',
            'price'=>'1019,00', 
            'reduction'=> '00,00',
            'image'=>'/uploads/epeda2.webp'
        ]);

        Dodo::factory()->create([
            'brand'=> 'DORSOLINE',
            'size'=> '140 x 190',
            'price'=>'830,00', 
            'reduction'=> '100,00',
            'total'=>'730,00',
            'image'=>'/uploads/Dorsoline.jpg'
        ]);

        Dodo::factory()->create([
            'brand'=> 'MEMORYLINE',
            'size'=> '160 x 190',
            'price'=>'1200,00', 
            'reduction'=> '150,00',
            'total'=>'1050,00',
            'image'=>'/uploads/MemoryLine.jpg'
        ]);

        Dodo::factory()->create([
            'brand'=> 'EPEDA',
            'size'=> '140 x 190',
            'price'=>'670,00', 
            'reduction'=> '50,00',
            'total'=>'620,00',
            'image'=>'/uploads/epeda.jpg'
        ]);

        Dodo::factory()->create([
            'brand'=> 'DORSOLINE',
            'size'=> '200 x 200',
            'price'=>'1400,00', 
            'reduction'=> '200,00',
            'total'=>'1200,00',
            'image'=>'/uploads/Dorsoline200.png'
        ]);

        Dodo::factory()->create([
            'brand'=> 'BULTEX',
            'size'=> '180 x 200',
            'price'=>'1309,00', 
            'reduction'=> '00,00',
            'image'=>'/uploads/Bultex180.jpg'
        ]);

        Dodo::factory()->create([
            'brand'=> 'DREAMWAY',
            'size'=> '140 x 190',
            'price'=>'840,00', 
            'reduction'=> '100,00',
            'total'=>'740,00',
            'image'=>'/uploads/dreamway.jpg'
        ]);
    }
}
