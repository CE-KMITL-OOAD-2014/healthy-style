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

	// $obj=new User1;
	// $obj->setname('fern');
	// $obj->setpassword('182838');
	// $obj->setemail('fern@hotmail.com');
	// $obj->setage(20);
	// $obj->setweight(65);
	// $obj->setheight(168);
	// $obj->setgender(1);
	// $obj->setgoalweight(60);
	// $obj->setgoaldate(50);
	// $obj->newUser1();
	// var_dump($obj);

	// $obj=User1::getById(3);
	// var_dump($obj);
	// $obj->setName('bb');
	// $obj->setpassword('678');
	// $obj->setemail('bb@hotmail.com');
	// $obj->setage(60);
	// $obj->setweight(64);
	// $obj->setheight(163);
	// $obj->setgender(1);
	// $obj->setgoalweight(60);
	// $obj->setgoaldate(30);
	// $obj->editUser1();

	// $obj = new Food;
	// $obj->setfoodname('ข้าวมันไก่');
	// return $obj->getfoodname();

	// $obj=new Food;
	// $obj->setfoodname('ข้าวขาหมู');
	// $obj->setfoodcal(560);
	// $obj->newFood();
	// var_dump($obj);

	// $obj=Food::getByIdFood(2);
	// var_dump($obj);
	// $obj->setfoodname('ข้าวหมูกรอบ');
	// $obj->editFood();

	// $obj = new Sport;
	// $obj->setsportname('ทำงานบ้าน');
	// return $obj->getsportname();

	// $obj=new Sport;
	// $obj->setsportname('เล่นฟุตบอล');
	// $obj->setsportcal(560);
	// $obj->newSport();
	// var_dump($obj);


	$obj=Sport::getByIdSport(1);
	var_dump($obj);
	$obj->setsportname('ตัดหญ้า');
	$obj->editsport();

	return 'eiei';


});

?>