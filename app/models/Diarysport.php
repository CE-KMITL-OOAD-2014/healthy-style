<?php

class Diarysport{
	private $id;
	private $userid;
	private $sportid;
	private $day;



	public function getid(){
		return $this->id;
	}
	public function getuserid(){
		return $this->userid;
	}
	public function getsportid(){
		return $this->sportid;
	}
	public function getday(){
		return $this->day;
	}



	public function setuserid($value){
		$this->userid=$value;
	}
	public function setsportid($value){
		$this->sportid=$value;
	}
	public function setday($value){
		$this->day=$value;
	}


//add sport to database
	public function newDiarysport(){
		$new=new DiarysportEloquent;
		$new->userid=Auth::user()->id;
		$new->sportid=$this->sportid;
		$new->day=$this->day;
		$new->save();
	}
//recieve id to find object from database
	public static function getbyidDiarysport($id){
		$data=DiarysportEloquent::find($id);
		if($data==NULL){
			return NULL;
		}
		$obj=new Diarysport;
		$obj->id=$data->id;
		$obj->userid=$data->userid;
		$obj->sportid=$data->sportid;
		$obj->day=$data->day;
		
		return $obj;
	}
//recieve value when user edit then update to database
	public function editDiarysport(){
		$edit=DiarysportEloquent::find($this->id);
		$edit->userid=$this->userid;
		$edit->sportid=$this->sportid;
		$edit->save();
	}
//find Sport 
	public static function searchsport($id){
		$data=DiarysportEloquent::where('userID','=',$id)->get();
		$output=array();
		$size=count($data);
		for ($a=0;$a<$size;$a++) {
			$output[$a]=$data[$a]->sportID;
		}
		return $output;
	}
//find id user
	public static function searchiduser($id){
		$data=DiarysportEloquent::where('userID','=',$id)->get();
		$output=array();
		$size=count($data);
				// 	for ($a=0;$a<$size;$a++) {
				// 		$output[$a]=$data[$a]->iduser;
				// }
		return $data;
	}

}


?>