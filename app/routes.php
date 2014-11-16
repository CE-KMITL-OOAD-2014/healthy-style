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

//go to profile page
Route::get('/profile',array('before'=>'auth',function(){
	return Redirect::to('profile');
}));

//homepage
Route::get('/', 'IndexControllers@getIndex');

//signup
Route::get('/signup','Usercontrollers@getprosonalfill');
Route::post('/signup','Usercontrollers@postprosonalfill');

Route::get('/theme','Usercontrollers@gettheme');

//signout
Route::get('signout',function(){
	Session::flush();
	Auth::logout();
	return Redirect::to('/');
});

//signin
Route::get('/signin','Usercontrollers@getsignin');
Route::post('/signin',function(){
	$credentials=Input::only('name','password');
	if(Auth::attempt($credentials)){
		return Redirect::intended('/profile');
	}
	return Redirect::to('signin');
});
// calculate BMI for guest
Route::get('/bmi','calculatecontrollers@getcalBMI');
Route::post('/bmi','calculatecontrollers@postcalBMI');

//calculate BMR for guest
Route::get('/bmr','calculatecontrollers@getcalBMR');
Route::post('/bmr','calculatecontrollers@postcalBMR');

//edit profile 
Route::get('/editprofile','Usercontrollers@geteditprosonalfill');
Route::post('/editprofile','Usercontrollers@posteditprosonalfill');

Route::get('/afteredit','Usercontrollers@getaftereditprofile');

//profile
Route::get('/profile','Usercontrollers@getprofile');

//article
Route::get('/article','Usercontrollers@getarticle');

//find Food for guest
Route::get('/food','SearchControllers@getfood');

//find Sport for guest
Route::get('/sport','SearchControllers@getsport');

//update weight user
Route::get('/saveweight','DiaryControllers@getSaveweight');
Route::post('/saveweight','DiaryControllers@postSaveweight');

//go to diary then choose update Food/Sport or view diary
Route::get('/chooseforsave','DiaryControllers@getchooseSave');
Route::post('/chooseforsave','DiaryControllers@postchooseSave');

//user find Food then update to diary
Route::get('/searchfoodforuser','DiaryControllers@getfood');
Route::post('/searchfoodforuser','DiaryControllers@postfood');

//user find Sport then update to diary
Route::get('/searchsportforuser','DiaryControllers@getsport');
Route::post('/searchsportforuser','DiaryControllers@postsport');


//choose view or update Food to favorite
Route::get('/chooseforlooklike','DiaryControllers@getchooseforlooklike');
Route::post('/chooseforlooklike','DiaryControllers@postchooseforlooklike');

//find and update Food to favorite 
Route::get('/likefood','DiaryControllers@getlikeFood');
Route::post('/likefood','DiaryControllers@postlikeFood');

//view favorite 
Route::get('/looklikefood','DiaryControllers@getlooklikefood');

//show user diary 
Route::get('/showdiary','DiaryControllers@getshowdiary');

//view weight when user update 
Route::get('/changeweight','DiaryControllers@getchangeweight')


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
