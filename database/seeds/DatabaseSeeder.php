<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Person;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('PeopleTableSeeder');
	}

}

class PeopleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('people')->delete();

        //Person::create(['name' => 'Nick', 'description' => 'There is one']);
    }

}