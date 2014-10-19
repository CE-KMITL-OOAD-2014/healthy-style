<?php
	class Sport{
		private $id;
		private $sportname;
		private $sportcal;


		public function getid(){
			return $this->id;
		}
		public function getsportname(){
			return $this->sportname;
		}
		public function getsportcal(){
			return $this->sportcal;
		}



		public function setsportname($value){
			return $this->sportname=$value;
		}
		public function setsportcal($value){
			return $this->sportcal=$value;
		}

		public function newSport(){
			$new=new SportEloquent;
			$new->sportname=$this->sportname;
			$new->sportcal=$this->sportcal;
			$new->save();
		}

		public static function getByIdSport($id){
			$data=SportEloquent::find($id);
				if($data==NULL){
					return NULL;
				}
			$obj=new Sport;
			$obj->id=$data->id;
			$obj->sportname=$data->sportname;
			$obj->sportcal=$data->sportcal;
			
			return $obj;
		}

		public function editSport(){
			$edit=SportEloquent::find($this->id);
			$edit->sportname=$this->sportname;
			$edit->sportcal=$this->sportcal;
			$edit->save();
		}

	}
?>