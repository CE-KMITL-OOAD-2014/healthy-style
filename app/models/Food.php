<?php
	class Food{
		private $id;
		private $foodname;
		private $foodcal;


		public function getid(){
			return $this->id;
		}
		public function getfoodname(){
			return $this->foodname;
		}
		public function getfoodcal(){
			return $this->foodcal;
		}



		public function setfoodname($value){
			return $this->foodname=$value;
		}
		public function setfoodcal($value){
			return $this->foodcal=$value;
		}

		public function newFood(){
			$new=new FoodEloquent;
			$new->foodname=$this->foodname;
			$new->foodcal=$this->foodcal;
			$new->save();
		}

		public static function getByIdFood($id){
			$data=FoodEloquent::find($id);
				if($data==NULL){
					return NULL;
				}
			$obj=new Food;
			$obj->id=$data->id;
			$obj->foodname=$data->foodname;
			$obj->foodcal=$data->foodcal;
			
			return $obj;
		}

		public function editFood(){
			$edit=FoodEloquent::find($this->id);
			$edit->foodname=$this->foodname;
			$edit->foodcal=$this->foodcal;
			$edit->save();
		}

	}
?>