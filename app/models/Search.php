<?php
	class Search{
		
		// public function searchName($name){
		// 	$food=new Food;
		// 	$data=$food->getAll();
		// 	$size=count($data);
		// 	$result=array();
		// 	$j=0;
		// 		for($i=0;$i<$size;$i++){
		// 			if(($data[$i]->getfoodname())==$name){
		// 			$result[$j]=$data[$i];
		// 			$j++;
		// 		}
		// 	}
		// 	if(count($result)==0){
		// 		$result=NULL;
		// 	}
		// 		return $result;
		// }

		public static function searchFoodname($fooddata){
			$data=FoodEloquent::where('foodname','LIKE',"%".$fooddata."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodname;
				}
			return $output;
			}

		public static function Foodcal($fooddata){
			$data=FoodEloquent::where('foodname','LIKE',"%".$fooddata."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodcal;
				}
			return $output;
			}

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






		public static function searchFoodtype($type){
			$data=FoodEloquent::where('type','LIKE',"%".$type."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodname;
				}
			return $output;
			}

		public static function Typecal($type){
			$data=FoodEloquent::where('type','LIKE',"%".$type."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodcal;
				}
			return $output;
			}

		
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




		public static function searchFoodCal($cal){
			$data=FoodEloquent::where('foodcal','LIKE',"%".$cal."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodname;
				}
			return $output;
			}

		public static function Caltype($cal){
			$data=FoodEloquent::where('foodcal','LIKE',"%".$cal."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodcal;
				}
			return $output;
			}

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





			public static function searchSportname($sportdata){
			$data=SportEloquent::where('sportname','LIKE',"%".$sportdata."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->sportname;
				}
			return $output;
			}

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
			// public static function searchSportcal($caldata){
			// $data=SportEloquent::where('sportcal','LIKE',"%".$caldata."%")->get();
			// $output=array();
			// $size=count($data);
			// 		for ($a=0;$a<$size;$a++) {
			// 			$output[$a]=$data[$a]->id;
			// 	}
			// return $output;
			// }
	 

	 		
	}


?>