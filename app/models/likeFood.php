<?php

class likeFood{
	private $id;
	private $userid;
	private $foodlikeid;



	public function getid(){
		return $this->id;
	}
	public function getuserid(){
		return $this->userid;
	}
	public function getfoodlikeid(){
		return $this->foodlikeid;
	}



	public function setuserid($value){
		$this->userid=$value;
	}
	public function setfoodlikeid($value){
		$this->foodlikeid=$value;
	}


//new favorite food then update to database 
	public function newFoodlike(){
		$new=new likeFoodEloquent;
		$new->userid=Auth::user()->id;
		$new->foodlikeid=$this->foodlikeid;
		$new->save();
	}
//recieve id to find object from database 
	public static function getbyidFoodlike($id){
		$data=likeFoodEloquent::find($id);
		if($data==NULL){
			return NULL;
		}
		$obj=new likeFood;
		$obj->id=$data->id;
		$obj->userid=$data->userid;
		$obj->foodlikeid=$data->foodlikeid;
		
		return $obj;
	}
//recieve value when user edit then update to database
	public function editFoodlike(){
		$edit=likeFoodEloquent::find($this->id);
		$edit->userid=$this->userid;
		$edit->foodlikeid=$this->foodlikeid;
		$edit->save();
	}

}


?>