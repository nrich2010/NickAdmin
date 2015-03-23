<?php
/**
 * Created by PhpStorm.
 * User: nir003
 * Date: 3/13/15
 * Time: 1:47 PM
 */

use Illuminate\Support\Facades\DB;

class PersonControllerTest extends TestCase {

    public function setUp() {
        parent::setUp();

        DB::statement('Create database if not exists test;');
        Artisan::call('migrate');
        Artisan::call('db:seed');
        //Mail::pretend(true);
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->call('GET', '/person');
        $this->assertResponseOk();
        //$this->assertTrue(true);
        //$this->assertViewHas('list.blade.php');
        //$this->assertEquals('NickAdmin', $this->title());

        $this->call('GET', '/api/v1/person');
        $this->assertResponseOk();

    }
    public function tearDown() {
        parent::tearDown();
//        DB::statement('drop database test;');
    }

}
