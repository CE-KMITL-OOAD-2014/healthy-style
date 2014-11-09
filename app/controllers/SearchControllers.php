<?php
	
	class SearchControllers extends BaseController{

		// public function getfood(){
		// 	$obj=Input::get('search');
		// 	$food = new Search;
		// 	$searchfood = $food->searchFoodname($obj);
		// 	$calfood=$food->Foodcal($obj);
		// 	$typefood=$food->Foodtype($obj);

		// 	return View::make('food')->with(array('searchFoodname'=>$searchfood,'typefood'=>$typefood,'calfood'=>$calfood));

		// 	//return View::make('food');
		// } 

		public function getfood(){
			$obj=Input::get('search');
			$obj1=Input::get('food');
			if($obj1== 0){
				$food = new Search;
				$searchfood = $food->searchFoodname($obj);
				$calfood=$food->Foodcal($obj);
				$typefood=$food->Foodtype($obj);
			}else if($obj1==1){
				$food = new Search;
				$searchfood = $food->searchFoodtype($obj);
				$calfood=$food->Typecal($obj);
				$typefood=$food->Typefood($obj);
			}else{
				$food = new Search;
				$searchfood = $food->searchFoodCal($obj);
				$calfood=$food->Caltype($obj);
				$typefood=$food->Calfood($obj);
			}

			return View::make('food')->with(array('searchFoodname'=>$searchfood,'typefood'=>$typefood,'calfood'=>$calfood));
			
			//return View::make('food');
		} 

		public function getsport(){
			$obj=Input::get('search');
			$sport = new Search;
			$searchsport = $sport->searchSportname($obj);
			$calsport=$sport->Sportcal($obj);

			return View::make('sport')->with(array('searchSportname'=>$searchsport,'calsport'=>$calsport));
		}
	} 

?>