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

	Route::get('/profile',array('before'=>'auth',function(){
			return Redirect::to('profile');
	}));
	
	Route::get('/', 'IndexControllers@getIndex');
	Route::get('/signup','Usercontrollers@getprosonalfill');
	Route::post('/signup','Usercontrollers@postprosonalfill');

	Route::get('/theme','Usercontrollers@gettheme');
	
	Route::get('signout',function(){
		Session::flush();
		Auth::logout();
		return Redirect::to('/');
	});

	Route::get('/signin','Usercontrollers@getsignin');
	Route::post('/signin',function(){
					$credentials=Input::only('name','password');
					if(Auth::attempt($credentials)){
						return Redirect::intended('/profile');
					}
						return Redirect::to('signin');
	});

	Route::get('/bmi','calculatecontrollers@getcalBMI');
	Route::post('/bmi','calculatecontrollers@postcalBMI');

	Route::get('/bmr','calculatecontrollers@getcalBMR');
	Route::post('/bmr','calculatecontrollers@postcalBMR');
	

	Route::get('/editprofile','Usercontrollers@geteditprosonalfill');
	Route::post('/editprofile','Usercontrollers@posteditprosonalfill');

	Route::get('/afteredit','Usercontrollers@getaftereditprofile');

	Route::get('/profile','Usercontrollers@getprofile');

	Route::get('/article','Usercontrollers@getarticle');

	Route::get('/food','SearchControllers@getfood');
	Route::get('/sport','SearchControllers@getsport');

	Route::get('/saveweight','Usercontrollers@getSaveweight');
	Route::get('/chooseforsave','Usercontrollers@getchooseSave');

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

	// $obj=new Food;
	// $obj->setfoodname('ไก่ทอดต้นตำรับ');
	// $obj->settype('KFC');
	// $obj->setfoodcal(180);
	// $obj->newFood();
	// var_dump($obj);
 

?> 
