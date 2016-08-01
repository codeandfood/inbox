<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testURL()
    {
        $response = $this->call('GET','/login');

        $this->assertEquals(200,$response->status());

    }

    public function testBlankFields(){
    	$this->visit('/login')
    		->press('Login')
    		->seePageIs('/login');
    }

    public function testWrongEmail(){
    	$this->visit('/login')
    		->type('blabla','email')
    		->type('bla','password')
    		->press('Login')
    		->seePageIs('/login');
    }

    public function testMismatchedData(){
    	$this->visit('/login')
    		->type('admin@gmail.com','email')
    		->type('wrong','password')
    		->press('Login')
    		->seePageIs('/login');
    }

    public function testCorrectData(){

    	$this->visit('/login')
    		->type('admin@gmail.com','email')
    		->type('12345678','password')
    		->press('Login')
    		->seePageIs('/');
    }
}
