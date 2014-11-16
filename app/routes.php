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






?> 
