<?php

class DiaryControllers extends BaseController{
	//call update weight page
	public function getSaveweight(){
		$obj=new User1;
		$user=$obj->getById(Auth::user()->id);
		
		return View::make('saveweight')->with(array("weight"=>$user->getweight(),"goalweight"=>$user->getgoalweight()));
			//return View::make('saveweight');
	}
	//recieve weight value then update to database 
	public function postSaveweight(){
		$user=new reweight;
		$user->setiduser(Auth::user()->id);
		$user->setnewweight(Input::get('weightday'));
		$user->newreweight();
		
		var_dump($user);
		return Redirect::to('/saveweight');
	}

	//call page to choose food/sport or view profile 
	public function getchooseSave(){
		return View::make('chooseforsave');
	}
	// when user choose ... then go to that page
	public function postchooseSave(){
		$choose=Input::get('choose');
		if($choose == 1){
			return Redirect::to('/searchfoodforuser');
		}else if($choose==2){
			return Redirect::to('/searchsportforuser');
		}else{
			return Redirect::to('/showdiary');
		}
		
	}
	//find food search by user 
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
		$day = new User1;
		$userday=$day->getById(Auth::user()->id);
		$goaldate=$userday->getgoaldate();
		//var_dump($goaldate);
		//exit();

		return View::make('foodforuser')->with(array('searchFoodname'=>$searchfood,'typefood'=>$typefood,'calfood'=>$calfood,'foodid'=>$id,'day'=>$goaldate));
	}
	//update food when user choose then calculate calroies 
	public function postfood(){
		$obj=Input::all();
		$save=new Diary;
		$save->setuserid(Auth::user()->id);
		$save->setfoodid($obj['savefood']);
		$save->setmeal(Input::get('meal'));
		$save->setday(Input::get('day'));
		$obj=$save->searchidfood(Auth::user()->id,Input::get('day'),$obj['savefood']);
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
	//find sport search by user 
	public function getsport(){
		$obj=Input::get('search');
		$sport = new Search;
		$searchsport = $sport->searchSportname($obj);
		$calsport=$sport->Sportcal($obj);
		$id=$sport->searchsportforuser($obj);
		$day = new User1;
		$userday=$day->getById(Auth::user()->id);
		$goaldate=$userday->getgoaldate();

		return View::make('sportforuser')->with(array('searchSportname'=>$searchsport,'calsport'=>$calsport,'id'=>$id,'day'=>$goaldate));
	}
	//update sport when user choose then calculate calroies 
	public function postsport(){
		$obj=Input::all();
		$save=new Diarysport;
		$save->setuserid(Auth::user()->id);
		$save->setsportid($obj['save']);
		$save->setday(Input::get('day'));
		$save->newDiarysport();
		var_dump($save);
		return Redirect::to('/searchsportforuser');
	}
	//go to page to update or view
	public function getchooseforlooklike(){
		return View::make('chooseforlooklike');
	}
	//go to page when is choose then go to that page 
	public function postchooseforlooklike(){
		$choose=Input::get('choose');
		if($choose == 1){
			return Redirect::to('/likefood');
		}else{
			return Redirect::to('/looklikefood');
		}
		
	}
	//find favorite food
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
	//recieve value then update to database 
	public function postlikeFood(){
		$obj=Input::all();
		$save=new likeFood;
		$save->setuserid(Auth::user()->id);
		$save->setfoodlikeid($obj['savefood']);
		$save->newFoodlike();
		var_dump($save);
		return Redirect::to('/likefood');
	}
	//view favorite food
	public function getlooklikefood(){
		$iduser=new Search;
		$idfood=$iduser->searchfoodid(Auth::user()->id);

		return View::make('lookforlikefood')->with(array('foodid'=>$idfood));

		//return View::make('lookforlikefood');
	}
	//call value from database to show
	public function getshowdiary(){
		//$iduser=new Search;
		//$idfood=$iduser->searchsavefoodid(Auth::user()->id);
		//$idsport=$iduser->searchsavesportid(Auth::user()->id);
		
		
		$obj1=new Diary;
		$user1=new Diary;
		$user1=$obj1->searchiduser(Auth::user()->id);
		
		$obj2=new Diary;
		//$user2=new Diary;
		$user2=$obj2->searchfood(Auth::user()->id);


		$food=new Food;
		$namefood=array();
		for ($i=0; $i <count($user2) ; $i++) { 
			$namefood[$i]=$food->searchfood($user2[$i]);
		}
		
		$objsport=new Diarysport;
		$usersport=new Diarysport;
		$usersport=$objsport->searchiduser(Auth::user()->id);


		
		$objsport2=new Diarysport;
		$usersport2=$objsport2->searchsport(Auth::user()->id);
		

		$sport=new Sport;
		$namesport=array();
		for ($i=0; $i <count($usersport2) ; $i++) { 
			$namesport[$i]=$sport->searchsport($usersport2[$i]);
		}
		

		$obj=new User1;
		$user=$obj->getById(Auth::user()->id);



		return View::make('showdiary')->with(array("newuser"=>$user1,"newuser1"=>$usersport,"foodname"=>$namefood,"sportname"=>$namesport,"bmr"=>$user->getbmr(),"downbmr"=>$user->getdownbmr()));

		//return View::make('lookforlikefood');
	}

	//view when user update weight 
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