<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/seeders/field.json");
        $class = json_decode($json);
        foreach ($class as $key => $name) {
            Field::create([
                'name' => $name,
            ]);
        }
    }
}
