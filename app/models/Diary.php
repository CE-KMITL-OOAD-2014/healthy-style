<?php

class Diary{
	private $id;
	private $userid;
	private $foodid;
	private $meal;
	private $leftbmr;
	private $day;


	public function getid(){
		return $this->id;
	}
	public function getuserid(){
		return $this->userid;
	}
	public function getfoodid(){
		return $this->foodid;
	}
	public function getmeal(){
		return $this->meal;
	}
	public function getleftbmr(){
		return $this->leftbmr;
	}
	public function getday(){
		return $this->day;
	}


	public function setuserid($value){
		$this->userid=$value;
	}
	public function setfoodid($value){
		$this->foodid=$value;
	}
	public function setmeal($value){
		$this->meal=$value;
	}
	public function setleftbmr($value){
		$this->leftbmr=$value;
	}
	public function setday($value){
		$this->day=$value;
	}


	// public function newSumcal(){
	// 		$user=User1::getById($this->userid);
	// 		$food=Food::getByIdFood($this->foodid);
	

	// 			//$ans=($user->getbmr())-($food->getfoodcal());	

	// 			//$ans=$ans-$food->getfoodcal();

	// 		return $ans;
	// 	}

//add food to database
	public function newDiary(){
		$new=new DiaryEloquent;
		$new->userid=Auth::user()->id;
		$new->foodid=$this->foodid;
		$new->meal=$this->meal;
		$new->leftbmr=$this->leftbmr;
		$new->day=$this->day;
		$new->save();
	}
//recieve id to find object from database
	public static function getbyidDiary($id){
		$data=DiaryEloquent::find($id);
		if($data==NULL){
			return NULL;
		}
		$obj=new Diary;
		$obj->id=$data->id;
		$obj->userid=$data->userid;
		$obj->foodid=$data->foodid;
		$obj->meal=$data->meal;
		$obj->leftbmr=$data->leftbmr;
		$obj->day=$data->day;
		
		return $obj;
	}
//recieve value when user edit then update to database
	public function editDiary(){
		$edit=DiaryEloquent::find($this->id);
		$edit->userid=$this->userid;
		$edit->foodid=$this->foodid;
		$edit->meal=$this->meal;
		$edit->save();
	}
//find id user 
	public static function searchiduser($id){
		$data=DiaryEloquent::where('userID','=',$id)->get();
		$output=array();
		$size=count($data);
				// 	for ($a=0;$a<$size;$a++) {
				// 		$output[$a]=$data[$a]->iduser;
				// }
		return $data;
	}
//find by id
	public static function searchidfood($id,$day,$foodid){
		$data=DiaryEloquent::where('userID','=',$id);
		$data=$data->where('day','=',$day);
		$data=$data->get();
		
		$output=array();
		$size=count($data);
				// 	for ($a=0;$a<$size;$a++) {
				// 		$output[$a]=$data[$a]->foodID;
				// }
		$food = new Food;
		$ans=$food->getcalByIdFood($foodid);
				//var_dump($data);
				//var_dump (count($data));
			//exit();
		for ($a=0;$a<$size;$a++) {
			
			$cal=$food->getcalByIdFood($data[$a]->foodID);
			$ans+=$cal;
		}
		return $ans;
	}
//find food 
	public static function searchfood($id){
		$data=DiaryEloquent::where('userID','=',$id)->get();
		$output=array();
		$size=count($data);
		for ($a=0;$a<$size;$a++) {
			$output[$a]=$data[$a]->foodID;
		}
		return $output;
	}


	



}


?>