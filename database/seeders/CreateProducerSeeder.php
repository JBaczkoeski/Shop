<?php

namespace Database\Seeders;

use App\Models\Producer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producers = [
            [
               'name' => 'Dell',
            ],
            [
                'name' => 'Lenovo',
            ],
            [
              'name' => 'Samsung',
            ],
            [
                'name' => 'Apple'
            ],
            [
                'name' => 'Asus',
            ],
            [
                'name' => 'Msi'
            ]
        ];

        foreach ($producers as $key => $producer) {
            Producer::create($producer);
        }
    }
}
