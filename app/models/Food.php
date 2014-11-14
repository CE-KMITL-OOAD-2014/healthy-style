<?php
class Food{
	private $id;
	private $foodname;
	private $type;
	private $foodcal;


	public function getid(){
		return $this->id;
	}
	public function getfoodname(){
		return $this->foodname;
	}
	public function gettype(){
		return $this->type;
	}
	public function getfoodcal(){
		return $this->foodcal;
	}



	public function setfoodname($value){
		return $this->foodname=$value;
	}
	public function settype($value){
		return $this->type=$value;
	}
	public function setfoodcal($value){
		return $this->foodcal=$value;
	}
//add food to database 
	public function newFood(){
		$new=new FoodEloquent;
		$new->foodname=$this->foodname;
		$new->type=$this->type;
		$new->foodcal=$this->foodcal;
		$new->save();
	}
//recieve id to find object from database
	public static function getByIdFood($id){
		$data=FoodEloquent::find($id);
		if($data==NULL){
			return NULL;
		}
		$obj=new Food;
		$obj->id=$data->id;
		$obj->foodname=$data->foodname;
		$obj->type=$data->type;
		$obj->foodcal=$data->foodcal;
		
		return $obj;
	}
//recieve value when user edit then update to database
	public function editFood(){
		$edit=FoodEloquent::find($this->id);
		$edit->foodname=$this->foodname;
		$edit->type=$this->type;
		$edit->foodcal=$this->foodcal;
		$edit->save();
	}
//find Food 
	public static function searchfood($id){
		$data=FoodEloquent::find($id);
		if($data==NULL){
			return NULL;
		}
		$obj=new Food;
		$obj->id=$data->id;
		$obj->foodname=$data->foodname;
		$obj->type=$data->type;
		$obj->foodcal=$data->foodcal;
		return $obj;
	}
//find  calories from id 
	public static function getcalByIdFood($id){
		$data=FoodEloquent::find($id);
		if($data==NULL){
			return NULL;
		}
		
		
		return $data->foodcal;
	}


}
?>