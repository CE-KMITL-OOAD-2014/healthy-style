<?php
	
	class UserControllers extends BaseController{

	public function getsignin(){
		return View::make('login');
	}

	public function getprosonalfill(){
		return View::make('prosonalfill');
	}

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

	public function getprofile(){
		$obj=new User1;
		$user=$obj->getById(Auth::user()->id);	
			//var_dump($user);
			return View::make('profile')->with(array("name"=>$user->getname(),"age"=>$user->getage(),"weight"=>$user->getweight(),"height"=>$user->getheight(),"act"=>$user->getact(),"gender"=>$user->getgender(),"goalweight"=>$user->getgoalweight(),"goaldate"=>$user->getgoaldate()));
		//return View::make('profile'); 
	}


	// public function getaftereditprofile(){
	//  	$obj=new User1;
	// 	$user=$obj->getByid(Auth::user()->id);
	// 		return View::make('aftereditprofile')->with(array("email"=>$user->getemail(),"password"=>$user->getpassword(),"name"=>$user->getname(),"age"=>$user->getage(),"weight"=>$user->getweight(),"height"=>$user->getheight(),"act"=>$user->getact(),"gender"=>$user->getgender(),"goalweight"=>$user->getgoalweight(),"goaldate"=>$user->getgoaldate()));
	// }

	public function getarticle(){
		return View::make('article');
	}

	public function gettheme(){
		return View::make('theme');
	}

	public function geteditprosonalfill(){
		return View::make('editprofile');
	}

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