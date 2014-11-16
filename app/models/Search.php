<?php
	class Search{
		
		//search by namefood for guest
		public static function searchFoodname($fooddata){
			$data=FoodEloquent::where('foodname','LIKE',"%".$fooddata."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodname;
				}
			return $output;
			}

		//search by namefood for guest
		public static function Foodcal($fooddata){
			$data=FoodEloquent::where('foodname','LIKE',"%".$fooddata."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodcal;
				}
			return $output;
			}

		//search by namefood for guest
		public static function Foodtype($fooddata){
			$data=FoodEloquent::where('foodname','LIKE',"%".$fooddata."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->type;
				}
			return $output;
			}





		public static function searchFoodforuser($fooddata){
							$data=FoodEloquent::where('foodname','LIKE',"%".$fooddata."%")->get();
							$output=array();
							$size=count($data);
									for ($a=0;$a<$size;$a++) {
										$output[$a]=$data[$a]->id;
								}
							return $output;
			}

		//search by namerestaurant for guest
		public static function searchFoodtype($type){
			$data=FoodEloquent::where('type','LIKE',"%".$type."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodname;
				}
			return $output;
			}

		//search by namerestaurant for guest	
		public static function Typecal($type){
			$data=FoodEloquent::where('type','LIKE',"%".$type."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodcal;
				}
			return $output;
			}

		//search by namerestaurant for guest
		public static function Typefood($type){
			$data=FoodEloquent::where('type','LIKE',"%".$type."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->type;
				}
			return $output;
			}


		public static function searchtypeforuser($type){
			$data=FoodEloquent::where('type','LIKE',"%".$type."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->id;
					}
			return $output;
			}



		//search by calories for guest
		public static function searchFoodCal($cal){
			$data=FoodEloquent::where('foodcal','LIKE',"%".$cal."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodname;
				}
			return $output;
			}

		//search by calories for guest
		public static function Caltype($cal){
			$data=FoodEloquent::where('foodcal','LIKE',"%".$cal."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodcal;
				}
			return $output;
			}

		//search by calories for guest
		public static function Calfood($cal){
			$data=FoodEloquent::where('foodcal','LIKE',"%".$cal."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->type;
				}
			return $output;
			}

			public static function searchcalforuser($cal){
			$data=FoodEloquent::where('foodcal','LIKE',"%".$cal."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->id;
					}
			return $output;
			}




			//search by namesport for guest
			public static function searchSportname($sportdata){
			$data=SportEloquent::where('sportname','LIKE',"%".$sportdata."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->sportname;
				}
			return $output;
			}

			//search by namesport for guest
			public static function Sportcal($sportdata){
			$data=SportEloquent::where('sportname','LIKE',"%".$sportdata."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->sportcal;
				}
			return $output;
			}


			public static function searchsportforuser($sportname){
			$data=SportEloquent::where('sportname','LIKE',"%".$sportname."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->id;
					}
			return $output;
			}

			public static function searchfoodid($userid){
			$data=likeFoodEloquent::where('userID','LIKE',"%".$userid."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodlikeID;
					}
			return $output;
			}

			public static function searchsavefoodid($userid){
			$data=DiaryEloquent::where('userID','LIKE',"%".$userid."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodID;
					}
			return $output;
			}

			public static function searchsavesportid($userid){
			$data=DiarysportEloquent::where('userID','LIKE',"%".$userid."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->sportID;
					}
			return $output;
			}


			public static function searchnameformid($userid){
			$data=FoodEloquent::where('id','LIKE',"%".$userid."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodname;
				}
			return $output;
			}

		public static function searchcalformid($userid){
			$data=FoodEloquent::where('id','LIKE',"%".$userid."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodcal;
				}
			return $output;
			}

		public static function searchtypeformid($userid){
			$data=FoodEloquent::where('id','LIKE',"%".$userid."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->type;
				}
			return $output;
			}

		public static function searchbmrformid($userid){
			$data=DiaryEloquent::where('id','LIKE',"%".$userid."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->leftbmr;
				}
			return $output;
			}

			public static function searchnamesportformid($userid){
			$data=SportEloquent::where('id','LIKE',"%".$userid."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->sportname;
				}
			return $output;
			}

		public static function searchcalsportformid($userid){
			$data=SportEloquent::where('id','LIKE',"%".$userid."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->sportcal;
				}
			return $output;
			}



			
	 

	 		
	}


?>