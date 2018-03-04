<?php

use Illuminate\Database\Seeder;

class db_Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(insertUser::class);
    }
}
class insertUser extends Seeder 
{
    public function run() 
    {
        DB::table('users')->insert([
            ['name' => 'admin','email' => 'admin@gmail.com','password' => bcrypt('123456')],
            ['name' => 'employee','email' => 'employee@gmail.com','password' => bcrypt('123456')],
            ['name' => 'manager ','email' => 'manager@gmail.com','password' => bcrypt('123456')]
        ]);
    }
}