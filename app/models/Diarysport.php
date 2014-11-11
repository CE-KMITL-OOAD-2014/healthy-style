<?php

	class Diarysport{
		private $id;
		private $userid;
		private $sportid;



		public function getid(){
			return $this->id;
		}
		public function getuserid(){
			return $this->userid;
		}
		public function getsportid(){
			return $this->sportid;
		}



		public function setuserid($value){
			$this->userid=$value;
		}
		public function setsportid($value){
			$this->sportid=$value;
		}



	public function newDiarysport(){
		$new=new DiarysportEloquent;
		$new->userid=Auth::user()->id;
		$new->sportid=$this->sportid;
		$new->save();
	}

	public static function getbyidDiarysport($id){
		$data=DiarysportEloquent::find($id);
				if($data==NULL){
					return NULL;
				}
		$obj=new Diarysport;
		$obj->id=$data->id;
		$obj->userid=$data->userid;
		$obj->sportid=$data->sportid;
	
		return $obj;
	}

	public function editDiarysport(){
		$edit=DiarysportEloquent::find($this->id);
		$edit->userid=$this->userid;
		$edit->sportid=$this->sportid;
		$edit->save();
	}

	}


?>