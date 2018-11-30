<?php

use Illuminate\Database\Seeder;

class 12751_siswa_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 20; 

        for ($i = 0; $i < $limit; $i++) {
            DB::table('siswa')->insert([ 
                'nama' => $faker->nama,
                'username' => $faker->unique()->username, 
                'password' => $faker->password,
                'ipv4' => $faker->ipv4,
            ]);
    }
}
