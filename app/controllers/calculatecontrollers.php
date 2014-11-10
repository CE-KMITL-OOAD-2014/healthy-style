<?php
	
	class calculatecontrollers extends BaseController{
		
			public function getcalBMI(){
				// $user=new calculate;
				// $user->setage(Input::get('age'));
				// $user->setweight(Input::get('weight'));
				// $user->setheight(Input::get('height'));
				// $bmi=$user->calBMI();

				// return View::make('calBMI')->with(array('bmi'=>$bmi));
				return View::make('calBMI');
			}

			public function postcalBMI(){
				$user=new calculate;
				$user->setage(Input::get('age'));
				$user->setweight(Input::get('weight'));
				$user->setheight(Input::get('height'));
				$user->calBMI();
				echo "ค่า bmi : ";
				echo $bmi=$user->getvalueBMI();
				//return View::make('calBMI')->with(array('bmi'=>$bmi));
				
				//var_dump($bmi);
			
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
				$bmr=$user->calBMR();
				echo "ค่า bmi : ";
				echo $bmr=$user->getvalueBMR();
				//var_dump($bmi);
			}

			
	}

?>