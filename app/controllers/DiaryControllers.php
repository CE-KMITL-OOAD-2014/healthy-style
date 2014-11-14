<?php

class DiaryControllers extends BaseController{
	
	public function getSaveweight(){
		$obj=new User1;
		$user=$obj->getById(Auth::user()->id);
		
		return View::make('saveweight')->with(array("weight"=>$user->getweight(),"goalweight"=>$user->getgoalweight()));
			//return View::make('saveweight');
	}

	public function postSaveweight(){
		$user=new reweight;
		$user->setiduser(Auth::user()->id);
		$user->setnewweight(Input::get('weightday'));
		$user->newreweight();
		// $user->setpercent(0);
		// $id = reweightEloquent::where('iduser','=',Auth::user()->id)->get();
		// 	if($id == NULL){
		// 		$user->newreweight();
		// 	}else{
		// 		$user->editreweight(Auth::user()->id);
		// 	} 
		var_dump($user);
		return Redirect::to('/saveweight');
	}


	public function getchooseSave(){
		return View::make('chooseforsave');
	}

	public function postchooseSave(){
		$choose=Input::get('choose');
		if($choose == 1){
			return Redirect::to('/searchfoodforuser');
		}else{
			return Redirect::to('/searchsportforuser');
		}
		
	}

	public function getfood(){
		$obj=Input::get('search');
		$obj1=Input::get('food');
		if($obj1== 0){
			$food = new Search;
			$searchfood = $food->searchFoodname($obj);
			$calfood=$food->Foodcal($obj);
			$typefood=$food->Foodtype($obj);
			$id=$food->searchFoodforuser($obj);
		}else if($obj1==1){
			$food = new Search;
			$searchfood = $food->searchFoodtype($obj);
			$calfood=$food->Typecal($obj);
			$typefood=$food->Typefood($obj);
			$id=$food->searchtypeforuser($obj);
		}else{
			$food = new Search;
			$searchfood = $food->searchFoodCal($obj);
			$calfood=$food->Caltype($obj);
			$typefood=$food->Calfood($obj);
			$id=$food->searchcalforuser($obj);
		}

		return View::make('foodforuser')->with(array('searchFoodname'=>$searchfood,'typefood'=>$typefood,'calfood'=>$calfood,'foodid'=>$id));
	}

	public function postfood(){
		$obj=Input::all();
		$save=new Diary;
		$save->setuserid(Auth::user()->id);
		$save->setfoodid($obj['savefood']);
		$save->setmeal(Input::get('meal'));
		$obj=$save->newSumcal();
		$save->setleftbmr($obj);
		$save->newDiary();
		// $find=new Diary;
		// $find->searchiduser(Auth::user()->id);
		// if($find==NULL){
			
		// }else{
		// 	$oldbmr=new Diary;
		// 	$oldbmr->searchleftbmr(Auth::user()->id);
		// 	$obj=$save->oldSumcal($oldbmr);
		// 	$save->setleftbmr($obj);
		// 	$save->newDiary();
		// }
		var_dump($save);
		return Redirect::to('/searchfoodforuser');
	}

	public function getsport(){
		$obj=Input::get('search');
		$sport = new Search;
		$searchsport = $sport->searchSportname($obj);
		$calsport=$sport->Sportcal($obj);
		$id=$sport->searchsportforuser($obj);

		return View::make('sportforuser')->with(array('searchSportname'=>$searchsport,'calsport'=>$calsport,'id'=>$id));
	}

	public function postsport(){
		$obj=Input::all();
		$save=new Diarysport;
		$save->setuserid(Auth::user()->id);
		$save->setsportid($obj['save']);
		$save->newDiarysport();
		var_dump($save);
		return Redirect::to('/searchsportforuser');
	}

	public function getchooseforlooklike(){
		return View::make('chooseforlooklike');
	}

	public function postchooseforlooklike(){
		$choose=Input::get('choose');
		if($choose == 1){
			return Redirect::to('/likefood');
		}else{
			return Redirect::to('/looklikefood');
		}
		
	}

	public function getlikeFood(){
		$obj=Input::get('search');
		$obj1=Input::get('food');
		if($obj1== 0){
			$food = new Search;
			$searchfood = $food->searchFoodname($obj);
			$calfood=$food->Foodcal($obj);
			$typefood=$food->Foodtype($obj);
			$id=$food->searchFoodforuser($obj);
		}else if($obj1==1){
			$food = new Search;
			$searchfood = $food->searchFoodtype($obj);
			$calfood=$food->Typecal($obj);
			$typefood=$food->Typefood($obj);
			$id=$food->searchtypeforuser($obj);
		}else{
			$food = new Search;
			$searchfood = $food->searchFoodCal($obj);
			$calfood=$food->Caltype($obj);
			$typefood=$food->Calfood($obj);
			$id=$food->searchcalforuser($obj);
		}

		return View::make('likefood')->with(array('searchFoodname'=>$searchfood,'typefood'=>$typefood,'calfood'=>$calfood,'foodid'=>$id));
	}

	public function postlikeFood(){
		$obj=Input::all();
		$save=new likeFood;
		$save->setuserid(Auth::user()->id);
		$save->setfoodlikeid($obj['savefood']);
		$save->newFoodlike();
		var_dump($save);
		return Redirect::to('/likefood');
	}

	public function getlooklikefood(){
		$iduser=new Search;
		$idfood=$iduser->searchfoodid(Auth::user()->id);

		return View::make('lookforlikefood')->with(array('foodid'=>$idfood));

		//return View::make('lookforlikefood');
	}

	public function getshowdiary(){
		$iduser=new Search;
		//$idfood=$iduser->searchsavefoodid(Auth::user()->id);
		$idsport=$iduser->searchsavesportid(Auth::user()->id);
		
		$obj1=new Diary;
		$user1=new Diary;
		$user1=$obj1->searchiduser(Auth::user()->id);
		
		$obj2=new Diary;
		//$user2=new Diary;
		$user2=$obj2->searchidfood(Auth::user()->id);


		$food=new Food;
		$namefood=array();
		for ($i=0; $i <count($user2) ; $i++) { 
			$namefood[$i]=$food->searchidfood($user2[$i]);
		}
		
		

		return View::make('showdiary')->with(array("newuser"=>$user1,"foodname"=>$namefood,'sportid'=>$idsport));

		//return View::make('lookforlikefood');
	}


	public function getchangeweight(){
		$obj=new User1;
		$user=$obj->getById(Auth::user()->id);
		$obj1=new reweight;
		$user1=new reweight;
		$user1=$obj1->searchiduser(Auth::user()->id);
		//var_dump($user1[2]->newweight);
		return View::make('diaryweight')->with(array("weight"=>$user->getweight(),"diff"=>$user->getdiffweight(),"goalweight"=>$user->getgoalweight(),"newuser"=>$user1));
			//return View::make('saveweight');
	}


}
?>