<?php 
	class calculate{

		private $id;
		private $userID;
		private $bmi;
		private $bmr;
		private $sumCal;
		private $diffWeight;
		

		public function getid(){
			return $this->id;
		}
		public function getuserID(){
			return $this->userID;
		}
		public function getbmi(){
			return $this->bmi;
		}
		public function getbmr(){
			return $this->bmr;
		}
		public function getsumCal(){
			return $this->sumCal;
		}
		public function getdiffWeight(){
			return $this->diffWeight;
		}


		
		public function setuserID($value){
			$this->userID=$value;
		}
		public function setbmi($value){
			$this->bmi=$value;
		}
		public function setbmr($value){
			$this->bmr=$value;
		}
		public function setsumCal($value){
			$this->sumCal=$value;
		}
		public function setdiffWeight($value){
			$this->diffWeight=$value;
		}



		public function newCalculate(){
			$new=new calculateEloquent;
			$new->id=$this->id;
			$new->userID=$this->userID;
			$new->bmi=$this->bmi;
			$new->bmr=$this->bmr;
			$new->sumCal=$this->sumCal;
			$new->diffWeight=$this->diffWeight;
			$new->save();
		}

		public static function getById($id){
			$data=calculateEloquent::find($id);
				if($data==NULL){
					return NULL;
				}
			$obj=new calculate;
			$obj->id=$data->id;
			$obj->userID=$data->userID;
			$obj->bmi=$data->bmi;
			$obj->bmr=$data->bmr;
			$obj->sumCal=$data->sumCal;
			$obj->diffWeight=$data->diffWeight;
			
			return $obj;
		}

			public function editCalculate(){
			$edit=calculateEloquent::find($this->id);
			$edit->id=$this->id;
			$edit->userID=$this->userID;
			$edit->bmi=$this->bmi;
			$edit->bmr=$this->bmr;
			$edit->sumCal=$this->sumCal;
			$edit->diffWeight=$this->diffWeight;
			$edit->save();	
		}
	}




	


 ?>