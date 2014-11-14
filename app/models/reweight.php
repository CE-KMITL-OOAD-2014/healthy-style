<?php 
class reweight{
	private $id;
	private $iduser;
	private $newweight;
	private $diffweight;
	

	public function getid(){
		return $this->id;
	}
	public function getiduser(){
		return $this->iduser;
	}
	public function getnewweight(){
		return $this->newweight;
	}
	public function getdiffweight(){
		return $this->diffweight;
	}
	
	

	public function setiduser($value){
		$this->iduser=$value;
	}
	public function setnewweight($value){
		$this->newweight=$value;
	}
	public function setdiffweight($value){
		$this->diffweight=$value;
	}


		//calculate weight new weight
	public function calweight(){
		$user=User1::getById($this->iduser);
		$ans=($user->getweight()-$this->newweight);
		
		return $ans;
	}

		//update new weight
	public function newreweight(){
		$new=new reweightEloquent;
		$new->id=$this->id;
		$new->iduser=Auth::user()->id;
		$new->newweight=$this->newweight;
		$new->diffweight=$this->calweight();
		$new->save();
	}
		//recieve id to find object from database 
	public static function getById($id){
		$data=reweightEloquent::find($id);
		if($data==NULL){
			return NULL;
		}
		$obj=new reweight;
		$obj->id=$data->id;
		$obj->iduser=$data->iduser;
		$obj->newweight=$data->newweight;
		$obj->diffweight=$data->diffweight;

		return $obj;
	}
	//find id user 
	public static function searchiduser($id){
		$data=reweightEloquent::where('iduser','=',$id)->get();
		$output=array();
		$size=count($data);
				// 	for ($a=0;$a<$size;$a++) {
				// 		$output[$a]=$data[$a]->iduser;
				// }
		return $data;
	}

	//recieve value when user edit then update to database
	public function editreweight($id){
		$edit=reweightEloquent::find($id);
		// if($this==NULL){
		// 	return NULL;
		// }
		$edit->iduser=$this->iduser;
		$edit->newweight=$this->newweight;
		$edit->diffweight=$this->diffweight;
		$edit->save();	

	}

}





?>