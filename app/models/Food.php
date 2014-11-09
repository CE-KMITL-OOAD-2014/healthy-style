<?php
	class Food{
		private $id;
		private $foodname;
		private $type;
		private $foodcal;


		public function getid(){
			return $this->id;
		}
		public function getfoodname(){
			return $this->foodname;
		}
		public function gettype(){
			return $this->type;
		}
		public function getfoodcal(){
			return $this->foodcal;
		}



		public function setfoodname($value){
			return $this->foodname=$value;
		}
		public function settype($value){
			return $this->type=$value;
		}
		public function setfoodcal($value){
			return $this->foodcal=$value;
		}

		public function newFood(){
			$new=new FoodEloquent;
			$new->foodname=$this->foodname;
			$new->type=$this->type;
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
			$obj->type=$data->type;
			$obj->foodcal=$data->foodcal;
			
			return $obj;
		}

		public function editFood(){
			$edit=FoodEloquent::find($this->id);
			$edit->foodname=$this->foodname;
			$edit->type=$this->type;
			$edit->foodcal=$this->foodcal;
			$edit->save();
		}

		 public static function getAll(){
			$data=FoodEloquent::all();
				$size=count($data);
				$food= array( );

			for($i=0;$i<$size;$i++){
				$obj=new Food;
				$obj->id=$data[$i]->id;
				$obj->foodname=$data[$i]->foodname;
				$obj->type=$data[$i]->type;
				$obj->foodcal=$data[$i]->foodcal;
				$food[$i]=$obj;
			}
					return $food;		
		}

	}
?>