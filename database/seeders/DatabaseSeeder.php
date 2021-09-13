<?php

namespace Database\Seeders;

use App\Models\AcademicSession;
use App\Models\ClassRoom;
use App\Models\Field;
use Illuminate\Support\Facades\File;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $roleDbAdmin = Role::create([
        //     "name" => "DbAdmin"
        // ]);
        $json = File::get("database/seeders/Role_Permission.json");
        $roles = json_decode($json);
        foreach ($roles as $key => $permissions) {
            $role = Role::create([
                "name" => $key
            ]);
            User::create([
                'first_name' => $key,
                'last_name' =>$key,
                'password' => 'password',
                'email' => $key . "@" . $key . ".com"
            ])->roles()->attach([$role->id]);
            foreach ($permissions as $key => $permission) {
                $perm = Permission::create([
                    'name' => $permission->name,
                    'slug' => $permission->slug
                ]);
                $role->permissions()->attach($perm);
            }
        }

        $year = AcademicSession::create([
            'year' => '2021-2022'
        ]);
        $year->semester()->create([
            'name' => 'first'
        ]);
        $year->semester()->create([
            'name' => 'second'
        ]);
        $json = File::get("database/seeders/classRooms.json");
        $class = json_decode($json);
        foreach ($class as $key => $capacity) {
            ClassRoom::create([
                'name' => $key,
                'capacity' => $capacity->capacity
            ]);
        }

        $json = File::get("database/seeders/field.json");
        $class = json_decode($json);
        foreach ($class as $key => $name) {
            Field::create([
                'name' => $name,
            ]);
        }

        $user = User::create([
            'email' => 'email',
            'password' => 'password',
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'gender' => 'male',
            'phone' => '123',
        ]);
        $user->giveRoleto('teacher');
        $user->teacher()->create([
            'address' => 'address',
            'qualification' => 'qualification',
            'id_number' => '1233'
        ]); 
        
        
    }
}
