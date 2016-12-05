<?php

use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
			['name'=>'Introduction to Python Programming'],
			['name'=>'Compiler'],
			['name'=>'Database Management System'],
		]);
    }
}


	
