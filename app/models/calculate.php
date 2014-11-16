<?php 


class calculate{
	private $id;
	private $weight;
	private $height;
	private $age;
	private $gender;
	private $act;
	private $goalweight;
	private $weightday;


	public function getid(){
		return $this->id;
	}
	public function getweight(){
		return $this->weight;
	}
	public function getheight(){
		return $this->height;
	}
	public function getage(){
		return $this->age;
	}
	public function getgender(){
		return $this->gender;
	}
	public function getact(){
		return $this->act;
	}
	public function getgoalweight(){
		return $this->$goalweight;
	}
	public function getweightday(){
		return $this->$weightday;
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
		$this->$goalweight=$value;
	}
	public function setweightday($value){
		$this->$weightday=$value;
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
		$this->txtSum=$txtSum;
		return $this->txtSum;
	}



		//calculate BMI
	public function calBMI(){
		$valueBMI= ($this->weight/(($this->height/100)*($this->height/100)));
		$this->valueBMI=$valueBMI;
		return $this->valueBMI;
	}

	public function getvalueBMI(){
		return $this->valueBMI;
	}

	

	public function getvalueBMR(){
		return $this->txtSum;
	}


	

	
}







?>