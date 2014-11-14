<?php

class UserControllers extends BaseController{
		//call login page 
	public function getsignin(){
		return View::make('login');
	}
		//call regist page
	public function getprosonalfill(){
		return View::make('prosonalfill');
	}
		//recieve value then update to user database
	public function postprosonalfill(){
		$user=new User1;
		$user->setname(Input::get('name'));
		$user->setage(Input::get('age'));
		$user->setweight(Input::get('weight'));
		$user->setheight(Input::get('height'));
		$user->setgender(Input::get('gender'));
		$user->setact(Input::get('act'));
		$user->setgoalweight(Input::get('goalweight'));
		$user->setgoaldate(Input::get('goaldate'));
		$user->setpassword(Hash::make(Input::get('password')));
		$user->setemail(Input::get('email'));
		$user->newUser1();
		return Redirect::to('/signin');
		var_dump($user1);
		//return Response::make('success');

	}
		//call profile user page
	public function getprofile(){
		$obj=new User1;
		$user=$obj->getById(Auth::user()->id);
		$gender=$user->getgender();
		$set=$obj->changegender($gender);
		$act=$user->getact();
		$setact=$obj->changeact($act);

			// var_dump($set);
			// exit();

		return View::make('profile')->with(array("name"=>$user->getname(),"age"=>$user->getage(),"weight"=>$user->getweight(),"height"=>$user->getheight(),"act"=>$user->getact(),"gender"=>$user->getgender(),"goalweight"=>$user->getgoalweight(),"goaldate"=>$user->getgoaldate(),"bmr"=>$user->getbmr(),"downbmr"=>$user->getdownbmr(),"sex"=>$set,"activity"=>$setact));
		//return View::make('profile'); 
	}


		//call article page
	public function getarticle(){
		return View::make('article');
	}

	public function gettheme(){
		return View::make('theme');
	}
		//call edit profile page
	public function geteditprosonalfill(){
		return View::make('editprofile');
	}
		//recieve value when user edit then update to database and call profile page
	public function posteditprosonalfill(){
		$user=new User1;
		$user->setname(Input::get('name'));
		$user->setage(Input::get('age'));
		$user->setweight(Input::get('weight'));
		$user->setheight(Input::get('height'));
		$user->setgender(Input::get('gender'));
		$user->setact(Input::get('act'));
		$user->setgoalweight(Input::get('goalweight'));
		$user->setgoaldate(Input::get('goaldate'));
		$user->setpassword(Hash::make(Input::get('password')));
		$user->setemail(Input::get('email'));
		$user->editUserprofile(Auth::user()->id);
		var_dump($user);
		return Redirect::to('/profile');
		
		//return Response::make('success');
	}

	

} 

?>