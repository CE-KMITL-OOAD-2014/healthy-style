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

	Route::get('/',array('before'=>'auth',function(){
			return Redirect::to('prosonal');
	}));
	//Route::get('/', function (){ return "fern";});
	Route::get('signup','Usercontrollers@getsignup');
	Route::post('signup','Usercontrollers@postsignup');

	Route::get('signin','Usercontrollers@getsignin');
	
	Route::get('signout',function(){
		Auth::logout();
		return 'logout';
	});
	Route::post('/signin',function(){
					$credentials=Input::only('name','password');
					if(Auth::attempt($credentials)){
						return Redirect::intended('/');
					}
						return Redirect::to('signin');
	});

	Route::get('bmi','Usercontrollers@getcalBMI');

	Route::get('/bmr','Usercontrollers@getcalBMR');
	Route::post('/bmr','Usercontrollers@postcalBMR');
	
	Route::get('prosonal','Usercontrollers@getprosonalfill');
	Route::post('prosonal','Usercontrollers@postprosonalfill');

	Route::get('profile','Usercontrollers@getprofile');
	//Route::post('prosonal','Usercontrollers@postprosonalfill');

	// Route::get('/search',function(){
	// 		$data=Search::searchFoodname('หมู');
	// 		var_dump($data);
	// });

	// Route::get('/search',function(){
	// 		$data=Search::searchFoodcal('440');
	// 		var_dump($data);
	// });

	// Route::get('/search',function(){
	// 		$data=Search::searchSportname('ตัดหญ้า');
	// 		var_dump($data);
	// });

	// Route::get('/search',function(){
	// 		$data=Search::searchSportcal('560');
	// 		var_dump($data);
	// });
// Route::get('/',function(){
// 	return "hello";
// });

// Route::post('/','CommentController@postComments');

	// $obj=new calculate;
	// $obj->setname('5555');
	// return $obj->getname();

	// $obj = new User1;
	// $obj->setname('fern');
	// return $obj->getname();

	// $obj=new User1;
	// $obj->setiduser(2);
	// $obj->setage(20);
	// $obj->setweight(65);
	// $obj->setheight(168);
	// $obj->setgender(1);
	// $obj->setgoalweight(60);
	// $obj->setgoaldate(50);
	// $obj->newUser1();
	// var_dump($obj);

	// $obj=User1::getById(1);
	// var_dump($obj);
	// $obj->setiduser(1);
	// $obj->editUser1();
	//return 'eiei';


?>
