<?php 
	class User1{
		private $id;
		private $name;
		private $password;
		private $email;
		private $age;
		private $weight;
		private $height;
		private $gender;
		private $goalweight;
		private $goaldate;

		public function getid(){
			return $this->id;
		}
		public function getname(){
			return $this->name;
		}
		public function getpassword(){
			return $this->password;
		}
		public function getemail(){
			return $this->email;
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
		public function getgender(){
			return $this->gender;
		}
		public function getgoalweight(){
			return $this->goalweight;
		}
		public function getgoaldate(){
			return $this->goaldate;
		}
		


		public function setname($value){
			$this->name=$value;
		}
		public function setpassword($value){
			$this->password=$value;
		}
		public function setemail($value){
			$this->email=$value;
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
			$new->name=$this->name;
			$new->password=$this->password;
			$new->email=$this->email;
			$new->age=$this->age;
			$new->weight=$this->weight;
			$new->height=$this->height;
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
			$obj->name=$data->name;
			$obj->password=$data->password;
			$obj->email=$data->email;
			$obj->age=$data->age;
			$obj->weight=$data->weight;
			$obj->height=$data->height;
			$obj->gender=$data->gender;
			$obj->goalweight=$data->goalweight;
			$obj->goaldate=$data->goaldate;
			
			return $obj;
		}

		public function editUser1(){
			$edit=User1Eloquent::find($this->id);
			$edit->name=$this->name;
			$edit->password=$this->password;
			$edit->email=$this->email;
			$edit->age=$this->age;
			$edit->weight=$this->weight;
			$edit->height=$this->height;
			$edit->gender=$this->gender;
			$edit->goalweight=$this->goalweight;
			$edit->goaldate=$this->goaldate;
			$edit->save();	
		}
	}



 ?>