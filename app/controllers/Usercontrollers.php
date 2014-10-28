<?php
	
	class UserControllers extends BaseController{
		
	public function getsignup(){
		return View::make('signup');
	}

	public function getsignin(){
		return View::make('login');
	}

	public function postsignup(){
		$user=new Userlogin;
		$user->setname(Input::get('name'));
		$user->setpassword(Hash::make(Input::get('password')));
		$user->setemail(Input::get('email'));
		$user->newUserlogin();
		var_dump($user);
		return Redirect::to('prosonal');
	}

	public function getcalBMI(){
		return View::make('calBMI');
	}

	public function postcalBMI(){
		return View::make('calBMI');
	}

	public function getcalBMR(){
		return View::make('calBMR');
	}

	public function postcalBMR(){
		$user=new calculate;
		$user->setage(Input::get('age'));
		$user->setweight(Input::get('weight'));
		$user->setheight(Input::get('height'));
		$user->setgender(Input::get('gender'));
		$user->setact(Input::get('act'));
		$user->calBMR();
		$user->calBMI();
		echo $user->getvalueBMR();
		echo $user->getvalueBMI();
		var_dump($user);
	}

	public function getprosonalfill(){
		return View::make('prosonalfill');
	}

	public function postprosonalfill(){
		$user=new User1;
		$user->setiduser(Input::get('iduser'));
		$user->setage(Input::get('age'));
		$user->setweight(Input::get('weight'));
		$user->setheight(Input::get('height'));
		$user->setgender(Input::get('gender'));
		$user->setact(Input::get('act'));
		$user->setgoalweight(Input::get('goalweight'));
		$user->setgoaldate(Input::get('goaldate'));
		$user->newUser1();
		var_dump($user);
		//return Response::make('success');

	}


} 

?>