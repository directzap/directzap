<?php

namespace Database\Seeders;

use App\Models\Collaborator;
use Illuminate\Database\Seeder;

class CollaboratorsTableSeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Collaborator::create([
                'name' => "Colaborador $i",
                'phone' => "799999999$i",
                'message' => 'Seja bem vindo ao directzap',
                'active' => 1,
                'users_id' => 1,

            ]);
        }
    }
}
