<?php

	class Diary{
		private $id;
		private $userid;
		private $foodid;
		private $meal;
		private $leftbmr;


		public function getid(){
			return $this->id;
		}
		public function getuserid(){
			return $this->userid;
		}
		public function getfoodid(){
			return $this->foodid;
		}
		public function getmeal(){
			return $this->meal;
		}
		public function getleftbmr(){
			return $this->leftbmr;
		}


		public function setuserid($value){
			$this->userid=$value;
		}
		public function setfoodid($value){
			$this->foodid=$value;
		}
		public function setmeal($value){
			$this->meal=$value;
		}
		public function setleftbmr($value){
			$this->leftbmr=$value;
		}


	public function newSumcal(){
			$user=User1::getById($this->userid);
			$food=Food::getByIdFood($this->foodid);
			
				$ans=($user->getbmr())-($food->getfoodcal());	

				//$ans=$ans-$food->getfoodcal();

			return $ans;
		}

	public function oldSumcal($oldbmr){
			$food=Food::getByIdFood($this->foodid);
				$ans=$oldbmr-$food->getfoodcal();

			return $ans;
		}


	public function newDiary(){
		$new=new DiaryEloquent;
		$new->userid=Auth::user()->id;
		$new->foodid=$this->foodid;
		$new->meal=$this->meal;
		$new->leftbmr=$this->leftbmr;
		$new->save();
	}

	public static function getbyidDiary($id){
		$data=DiaryEloquent::find($id);
				if($data==NULL){
					return NULL;
				}
		$obj=new Diary;
		$obj->id=$data->id;
		$obj->userid=$data->userid;
		$obj->foodid=$data->foodid;
		$obj->meal=$data->meal;
		$obj->leftbmr=$data->leftbmr;
	
		return $obj;
	}

	public function editDiary(){
		$edit=DiaryEloquent::find($this->id);
		$edit->userid=$this->userid;
		$edit->foodid=$this->foodid;
		$edit->meal=$this->meal;
		$edit->save();
	}

	public static function searchiduser($id){
			$data=DiaryEloquent::where('userID','=',$id)->get();
			$output=array();
			$size=count($data);
				// 	for ($a=0;$a<$size;$a++) {
				// 		$output[$a]=$data[$a]->iduser;
				// }
			return $data;
	}

	public static function searchidfood($id){
			$data=DiaryEloquent::where('userID','=',$id)->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->foodID;
				}
			return $output;
	}

	public static function searchleftbmr($id){
			$data=DiaryEloquent::where('userID','=',$id)->get();
			$output=array();
			$size=count($data);
					for ($a=0;$a<$size;$a++) {
						$output[$a]=$data[$a]->leftbmr;
				}
			return $output;
	}


	}


?>