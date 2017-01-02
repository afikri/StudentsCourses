<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
			['student_id'=>3, 'street'=>'Manfred Strasse 1'],
			['student_id'=>1, 'street'=>'Maxmillian Strasse 61'],
			['student_id'=>2, 'street'=>'Garibaldi Strasse 21'],
		]);
    }
}
