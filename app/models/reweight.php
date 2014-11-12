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

		

	}





 ?>