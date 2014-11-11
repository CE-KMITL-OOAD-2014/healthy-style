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



	public function newFoodlike(){
		$new=new likeFoodEloquent;
		$new->userid=Auth::user()->id;
		$new->foodlikeid=$this->foodlikeid;
		$new->save();
	}

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

	public function editFoodlike(){
		$edit=likeFoodEloquent::find($this->id);
		$edit->userid=$this->userid;
		$edit->foodlikeid=$this->foodlikeid;
		$edit->save();
	}

}


?>