<?php 

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Route::get('/','CommentController@showComments');

// Route::post('/','CommentController@postComments');

Route::get('/', function(){
	// $obj=new calculate;
	// $obj->setname('5555');
	// return $obj->getname();

	// $obj = new User1;
	// $obj->setname('fern');
	// return $obj->getname();

	$obj=new User1;
	$obj->setname('fern');
	$obj->setpassword('182838');
	$obj->setemail('fern@hotmail.com');
	$obj->setage(20);
	$obj->setweight(65);
	$obj->setheight(168);
	$obj->setgender(1);
	$obj->setgoalweight(60);
	$obj->setgoaldate(50);
	$obj->newUser1();
	var_dump($obj);
	return 'eiei';


});

?>