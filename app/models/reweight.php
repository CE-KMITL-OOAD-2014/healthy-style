<?php 
	class reweight{
		private $id;
		private $iduser;
		private $newweight;
		

		public function getid(){
			return $this->id;
		}
		public function getiduser(){
			return $this->iduser;
		}
		public function getnewweight(){
			return $this->newweight;
		}
		
		

		public function setiduser($value){
			$this->iduser=$value;
		}
		public function setnewweight($value){
			$this->newweight=$value;
		}
		
	

		public function newreweight(){
			$new=new reweightEloquent;
			$new->id=$this->id;
			$new->iduser=Auth::user()->id;
			$new->newweight=$this->newweight;
			$new->save();
		}

		// public static function getById($id){
		// 	$data=User1Eloquent::find($id);
		// 			if($data==NULL){
		// 			return NULL;
		// 		}
		// 	$obj=new User1;
		// 	$obj->id=$data->id;
		// 	$obj->name=$data->name;
		// 	$obj->age=$data->age;
		// 	$obj->weight=$data->weight;
		// 	$obj->height=$data->height;
		// 	$obj->act=$data->act;
		// 	$obj->gender=$data->gender;
		// 	$obj->goalweight=$data->goalweight;
		// 	$obj->goaldate=$data->goaldate;
		// 	$obj->password=$data->password;
		// 	$obj->email=$data->email;
			
		// 	return $obj;
		// }

		// public function editUser1(){
		// 	$edit=User1Eloquent::find($this->id);
		// 	$edit->name=$this->name;
		// 	$edit->age=$this->age;
		// 	$edit->weight=$this->weight;
		// 	$edit->height=$this->height;
		// 	$edit->act=$this->act;
		// 	$edit->gender=$this->gender;
		// 	$edit->goalweight=$this->goalweight;
		// 	$edit->goaldate=$this->goaldate;
		// 	$edit->password=$this->password;
		// 	$edit->email=$this->email;
		// 	$edit->save();	
		// }


		// public function editUserprofile($id){
		// 	$edit=User1Eloquent::find($id);
		// 		// if($this==NULL){
		// 		// 	return NULL;
		// 		// }
		// 	$edit->name=$this->name;
		// 	$edit->age=$this->age;
		// 	$edit->weight=$this->weight;
		// 	$edit->height=$this->height;
		// 	$edit->act=$this->act;
		// 	$edit->gender=$this->gender;
		// 	$edit->goalweight=$this->goalweight;
		// 	$edit->goaldate=$this->goaldate;
		// 	$edit->password=$this->password;
		// 	$edit->email=$this->email;
		// 	//var_dump($edit);
		// 	$edit->save();	


		}





 ?>