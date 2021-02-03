<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use App\Models\Akun;


use Faker\Generator as Faker;
class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

   	$faker = Faker::create('id_ID');
    for($i=1; $i <=50; $i++)
    {


    {
     $data = [
     	[
     		'idakun' =>$faker->numberBetween(2020001,2020999),
     		'nama_lengkap' => $faker->name,
     		'alamat' =>  $faker->address,
     		'tempat_lahir' =>  $faker->address,
     		'tgl_lahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
     		'phone' => $faker->phoneNumber,
     		'email'=> $faker->email,
     		'passwd' => bcrypt('12345678'),
     		'level' => "siswa",
     		'jenis_kelamin' => "L",
     		'created_at' => date('Y-m-d'),
     	],

     ];

     \DB::table('akun')->insert($data);
    }
      } //end of faker
}
