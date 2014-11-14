<?php 
class User1{
	private $id;
	private $name;
	private $age;
	private $weight;
	private $height;
	private $act;
	private $gender;
	private $goalweight;
	private $goaldate;
	private $password;
	private $email;	
	private $bmr;
	private $downbmr;
	private $diffweight;


	public function getid(){
		return $this->id;
	}
	public function getname(){
		return $this->name;
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
	public function getact(){
		return $this->act;
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
	public function getpassword(){
		return $this->password;
	}
	public function getemail(){
		return $this->email;
	}
	public function getbmr(){
		return $this->bmr;
	}
	public function getdownbmr(){
		return $this->downbmr;
	}
	public function getdiffweight(){
		return $this->diffweight;
	}

	

	public function setname($value){
		$this->name=$value;
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
	public function setact($value){
		$this->act=$value;
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
	public function setpassword($value){
		$this->password=$value;
	}
	public function setemail($value){
		$this->email=$value;
	}
	public function setbmr($bmr){
		$this->bmr=$bmr;
	}
	public function setdownbmr($downbmr){
		$this->downbmr=$downbmr;
	}
	public function setdiffweight($diffweight){
		$this->diffweight=$diffweight;
	}

	//find BMR user who want to lost weight 
	public function caldownBMR(){
		if($this->gender==0){
			$txtSum= (66+(13.7*$this->weight)+(5*$this->height)-(6.8*$this->age));
			if($this->act==1){
				$txtSum = ($txtSum-500)*1.2;
			}else if($this->act==2){
				$txtSum = ($txtSum-500)*1.375;
			}else if($this->act==3){
				$txtSum = ($txtSum-500)*1.55;
			}else if($this->act==4){
				$txtSum = ($txtSum-500)*1.725;
			}else{
				$txtSum = ($txtSum-500)*1.9;
			}
		}else{
			$txtSum= (665+(9.6*$this->weight)+(1.8*$this->height)-(4.7*$this->age));
			if($this->act==1){
				$txtSum = ($txtSum-500)*1.2;
			}else if($this->act==2){
				$txtSum = ($txtSum-500)*1.375;
			}else if($this->act==3){
				$txtSum = ($txtSum-500)*1.55;
			}else if($this->act==4){
				$txtSum =($txtSum-500)*1.725;
			}else{
				$txtSum =($txtSum-500)*1.9;
			}
		}
		return $txtSum;
	}
	//calculate BMR 
	public function calBMR(){
		if($this->gender==0){
			$txtSum= 66+(13.7*$this->weight)+(5*$this->height)-(6.8*$this->age);
			if($this->act==1){
				$txtSum = $txtSum*1.2;
			}else if($this->act==2){
				$txtSum = $txtSum*1.375;
			}else if($this->act==3){
				$txtSum = $txtSum*1.55;
			}else if($this->act==4){
				$txtSum = $txtSum*1.725;
			}else{
				$txtSum = $txtSum*1.9;
			}
		}else{
			$txtSum= 665+(9.6*$this->weight)+(1.8*$this->height)-(4.7*$this->age);
			if($this->act==1){
				$txtSum = $txtSum*1.2;
			}else if($this->act==2){
				$txtSum = $txtSum*1.375;
			}else if($this->act==3){
				$txtSum = $txtSum*1.55;
			}else if($this->act==4){
				$txtSum = $txtSum*1.725;
			}else{
				$txtSum = $txtSum*1.9;
			}
		}
		return $txtSum;
	}
	//change gender int to string
	public function changegender($gender){
		if($gender==0){
			return "ชาย";
		}else{
			return "หญิง";
		}
	}
	//change activity int to string
	public function changeact($act){
		if($act==1){
			return "น้อยมาก";
		}else if($act==2){
			return "น้อย";
		}else if($act==3){
			return "ปานกลาง";
		}else if($act==4){
			return "มาก";
		}else{
			return "มากที่สุด";
		}
	}
	//calculate different Oldweight with goalWeight 
	public function diffweightuser(){
		$diff=($this->weight)-($this->goalweight);

		return $diff;
	}
	//recieve value user then update to database 
	public function newUser1(){
		$new=new User1Eloquent;
		$new->id=$this->id;
		$new->name=$this->name;
		$new->age=$this->age;
		$new->weight=$this->weight;
		$new->height=$this->height;
		$new->act=$this->act;
		$new->gender=$this->gender;
		$new->goalweight=$this->goalweight;
		$new->goaldate=$this->goaldate;
		$new->password=$this->password;
		$new->email=$this->email;
		$new->bmr=$this->calBMR();
		$new->downbmr=$this->caldownBMR();
		$new->diffweight=$this->diffweightuser();
		$new->save();
	}
	//recieve id to find object from database 
	public static function getById($id){
		$data=User1Eloquent::find($id);
		if($data==NULL){
			return NULL;
		}
		$obj=new User1;
		$obj->id=$data->id;
		$obj->name=$data->name;
		$obj->age=$data->age;
		$obj->weight=$data->weight;
		$obj->height=$data->height;
		$obj->act=$data->act;
		$obj->gender=$data->gender;
		$obj->goalweight=$data->goalweight;
		$obj->goaldate=$data->goaldate;
		$obj->password=$data->password;
		$obj->email=$data->email;
		$obj->bmr=$data->bmr;
		$obj->downbmr=$data->downbmr;
		$obj->diffweight=$data->diffweight;
		
		return $obj;
	}
	//recieve value when user edit then update to database 
	public function editUser1(){
		$edit=User1Eloquent::find($this->id);
		$edit->name=$this->name;
		$edit->age=$this->age;
		$edit->weight=$this->weight;
		$edit->height=$this->height;
		$edit->act=$this->act;
		$edit->gender=$this->gender;
		$edit->goalweight=$this->goalweight;
		$edit->goaldate=$this->goaldate;
		$edit->password=$this->password;
		$edit->email=$this->email;
		$edit->bmr=$this->calBMR();
		$edit->downbmr=$this->caldownBMR();
		$edit->diffweight=$this->diffweightuser();
		$edit->save();	
	}

	//recieve value when user edit then update to database 
	public function editUserprofile($id){
		$edit=User1Eloquent::find($id);
				// if($this==NULL){
				// 	return NULL;
				// }
		$edit->name=$this->name;
		$edit->age=$this->age;
		$edit->weight=$this->weight;
		$edit->height=$this->height;
		$edit->act=$this->act;
		$edit->gender=$this->gender;
		$edit->goalweight=$this->goalweight;
		$edit->goaldate=$this->goaldate;
		$edit->password=$this->password;
		$edit->email=$this->email;
		$edit->bmr=$this->calBMR();
		$edit->downbmr=$this->caldownBMR();
		$edit->diffweight=$this->diffweightuser();
			//var_dump($edit);
		$edit->save();	


	}

}



?>