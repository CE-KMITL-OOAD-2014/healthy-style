<?php
	class Search{
		
		public static function searchFoodname($fooddata){
			$data=FoodEloquent::where('foodname','LIKE',"%".$fooddata."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->id;
				}
			return $output;
			}

		public static function searchFoodcal($caldata){
			$data=FoodEloquent::where('foodcal','LIKE',"%".$caldata."%")->get();
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
						$output[$a]=$data[$a]->id;
				}
			return $output;
			}

			public static function searchSportcal($caldata){
			$data=SportEloquent::where('sportcal','LIKE',"%".$caldata."%")->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->id;
				}
			return $output;
			}
	}


?>