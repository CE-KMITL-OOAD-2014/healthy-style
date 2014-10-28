<?php 
	class User1{
		private $id;
		private $iduser;
		private $age;
		private $weight;
		private $height;
		private $act;
		private $gender;
		private $goalweight;
		private $goaldate;

		public function getid(){
			return $this->id;
		}
		public function getiduser(){
			return $this->iduser;
		}
		public function getage(){
			return $this->age;
		}
		public function getweight(){
			return $this->weight;
		}
		public function getheight(){
			return $this->height;
		}
		public function getact(){
			return $this->act;
		}
		public function getgender(){
			return $this->gender;
		}
		public function getgoalweight(){
			return $this->goalweight;
		}
		public function getgoaldate(){
			return $this->goaldate;
		}
		

		public function setiduser($value){
			$this->iduser=$value;
		}
		public function setage($value){
			$this->age=$value;
		}
		public function setweight($value){
			$this->weight=$value;
		}
		public function setheight($value){
			$this->height=$value;
		}
		public function setact($value){
			$this->act=$value;
		}
		public function setgender($value){
			$this->gender=$value;
		}
		public function setgoalweight($value){
			$this->goalweight=$value;
		}
		public function setgoaldate($value){
			$this->goaldate=$value;
		}

	

		public function newUser1(){
			$new=new User1Eloquent;
			$new->iduser=$this->iduser;
			$new->age=$this->age;
			$new->weight=$this->weight;
			$new->height=$this->height;
			$new->act=$this->act;
			$new->gender=$this->gender;
			$new->goalweight=$this->goalweight;
			$new->goaldate=$this->goaldate;
			$new->save();
		}

		public static function getById($id){
			$data=User1Eloquent::find($id);
				if($data==NULL){
					return NULL;
				}
			$obj=new User1;
			$obj->id=$data->id;
			$obj->iduser=$data->iduser;
			$obj->age=$data->age;
			$obj->weight=$data->weight;
			$obj->height=$data->height;
			$obj->act=$data->act;
			$obj->gender=$data->gender;
			$obj->goalweight=$data->goalweight;
			$obj->goaldate=$data->goaldate;
			
			return $obj;
		}

		public function editUser1(){
			$edit=User1Eloquent::find($this->id);
			$edit->iduser=$this->iduser;
			$edit->age=$this->age;
			$edit->weight=$this->weight;
			$edit->height=$this->height;
			$edit->act=$this->act;
			$edit->gender=$this->gender;
			$edit->goalweight=$this->goalweight;
			$edit->goaldate=$this->goaldate;
			$edit->save();	
		}
	}



 ?>