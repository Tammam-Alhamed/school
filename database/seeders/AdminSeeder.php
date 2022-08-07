<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;



class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $admins = \App\Models\admins::count();
        if($admins==0)
        \App\Models\admins::create([
            'name'=>"ADMIN",
            'email'=>env('DEFAULT_EMAIL'),
            'password'=>bcrypt(env('DEFAULT_PASSWORD'))
        ]);
    }
}
