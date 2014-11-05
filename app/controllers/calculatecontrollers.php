<?php
	
	class calculatecontrollers extends BaseController{
		
			public function getcalBMI(){
				return View::make('calBMI');
			}

			public function postcalBMI(){
				$user=new calculate;
				$user->setage(Input::get('age'));
				$user->setweight(Input::get('weight'));
				$user->setheight(Input::get('height'));
				$user->calBMI();
				echo $user->getvalueBMI();
				var_dump($user);
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
				echo $user->getvalueBMR();
				var_dump($user);
			}

			
	}

?>