<?php
	class Userlogin{
		private $id;
		private $name;
		private $password;
		private $email;	
	
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

		public function setname($value){
			$this->name=$value;
		}
		public function setpassword($value){
			$this->password=$value;
		}
		public function setemail($value){
			$this->email=$value;
		}

		public function newUserlogin(){
			$new=new UserLoginEloquent;
			$new->name=$this->name;
			$new->password=$this->password;
			$new->email=$this->email;
			$new->save();
		}

		public static function getbyid($id){
			$data=UserLoginEloquent::find($id);
				if($data==NULL){
					return NULL;
				}
			$obj=new Userlogin;
			$obj->id=$data->id;
			$obj->name=$data->name;
			$obj->password=$data->password;
			$obj->email=$data->email;
			
			return $obj;
		}

		public function editUserLogin(){
			$edit=UserLoginEloquent::find($this->id);
			$edit->name=$this->name;
			$edit->password=$this->password;
			$edit->email=$this->email;
			$edit->save();	
		}
	}	

?>