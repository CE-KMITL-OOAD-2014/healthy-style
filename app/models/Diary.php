<?php

	class Diary{
		private $id;
		private $userid;
		private $foodid;
		private $meal;


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


		public function setuserid($value){
			$this->userid=$value;
		}
		public function setfoodid($value){
			$this->foodid=$value;
		}
		public function setmeal($value){
			$this->meal=$value;
		}


	public function newDiary(){
		$new=new DiaryEloquent;
		$new->userid=Auth::user()->id;
		$new->foodid=$this->foodid;
		$new->meal=$this->meal;
		$new->save();
	}

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
	
		return $obj;
	}

	public function editDiary(){
		$edit=DiaryEloquent::find($this->id);
		$edit->userid=$this->userid;
		$edit->foodid=$this->foodid;
		$edit->meal=$this->meal;
		$edit->save();
	}

	}


?>