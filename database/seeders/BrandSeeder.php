<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Brand::truncate();

        $brands = [
            [
                'name' => 'Porsche',
                'slug' => 'porsche-001'
            ],
        ];

        Brand::insert($brands);

        Schema::enableForeignKeyConstraints();
    }
}
