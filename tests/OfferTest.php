<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OfferTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testURL()
    {
    	$response = $this->call('GET','/offers');

    	$this->assertEquals(200,$response->status());
    }

    public function testBlankName(){
    	$this->visit('/offers')
    		->press('Post')
    		->seePageIs('/offers')
    		->seeJsonEquals([
    				'status'=> 'error',
    				'message'=>'The name field is required.'
    			]);
    }

    public function testBlankContent(){
    	$this->visit('/offers')
    		->type('boo','name')
    		->press('Post')
    		->seePageIs('/offers')
    		->seeJsonEquals([
    				'status'=> 'error',
    				'message'=>'The content field is required.'
    			]);
    }

    public function testBlankStartDate(){
    	$this->visit('/offers')
    		->type('boo','name')
    		->type('boo','content')
    		->press('Post')
    		->seePageIs('/offers')
    		->seeJsonEquals([
    				'status'=> 'error',
    				'message'=>'The start date field is required.'
    			]);
    }

    public function testBlankEndDate(){
    	$this->visit('/offers')
    		->type('boo','name')
    		->type('boo','content')
    		->type('08/09/2016','startdate')
    		->press('Post')
    		->seePageIs('/offers')
    		->seeJsonEquals([
    				'status'=> 'error',
    				'message'=>'The end date field is required.'
    			]);
    }

    public function testBlankPrice(){
    	$this->visit('/offers')
    		->type('boo','name')
    		->type('boo','content')
    		->type('08/09/2016','startdate')
    		->type('08/10/2016','startdate')
    		->press('Post')
    		->seePageIs('/offers')
    		->seeJsonEquals([
    				'status'=> 'error',
    				'message'=>'The price field is required.'
    			]);
    }

    public function testBlankMobile(){
    	$this->visit('/offers')
    		->type('boo','name')
    		->type('boo','content')
    		->type('08/09/2016','startdate')
    		->type('08/10/2016','startdate')
    		->type('123','price')
    		->press('Post')
    		->seePageIs('/offers')
    		->seeJsonEquals([
    				'status'=> 'error',
    				'message'=>'The mobile field is required.'
    			]);
    }

    public function testBlankEmail(){
    	$this->visit('/offers')
    		->type('boo','name')
    		->type('boo','content')
    		->type('08/09/2016','startdate')
    		->type('08/10/2016','startdate')
    		->type('123','price')
    		->type('0101010101','mobile')
    		->press('Post')
    		->seePageIs('/offers')
    		->seeJsonEquals([
    				'status'=> 'error',
    				'message'=>'The email field is required.'
    			]);
    }

    public function testWrongStartDate(){
    	$this->visit('/offers')
    		->type('boo','name')
    		->type('boo','content')
    		->type('12','startdate')
    		->press('Post')
    		->seePageIs('/offers')
    		->seeJsonEquals([
    				'status'=> 'error',
    				'message'=>'The start date is not a valid date.'
    			]);
    }

    public function testWrongEndDate(){
    	$this->visit('/offers')
    		->type('boo','name')
    		->type('boo','content')
    		->type('08/09/2016','startdate')
    		->type('12','enddate')
    		->press('Post')
    		->seePageIs('/offers')
    		->seeJsonEquals([
    				'status'=> 'error',
    				'message'=>'The end date is not a valid date.'
    			]);
    }

    public function testWrongEmail(){
    	$this->visit('/offers')
    		->type('boo','name')
    		->type('boo','content')
    		->type('08/09/2016','startdate')
    		->type('08/10/2016','startdate')
    		->type('123','price')
    		->type('0101010101','mobile')
    		->type('boo','email')
    		->press('Post')
    		->seePageIs('/offers')
    		->seeJsonEquals([
    				'status'=> 'error',
    				'message'=>'The email must be a valid email address.'
    			]);
    }

    public function testCreateOfferSuccess(){
    	$this->visit('/offers')
    		->type('boo','name')
    		->type('boo','content')
    		->type('08/09/2016','startdate')
    		->type('08/10/2016','startdate')
    		->type('123','price')
    		->type('0101010101','mobile')
    		->type('boo@gmail.com','email')
    		->press('Post')
    		->seePageIs('/offers')
    		->seeJsonEquals([
    				'status'=> 'success',
    				'message'=>'Successfully value stored'
    			]);
    }
}
