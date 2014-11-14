<?php

	class BMRcalTest extends TestCase{

		public function testBMR()
		{
			$weight=Mockery::mock('calculate');
			$height=Mockery::mock('calculate');
			$age=Mockery::mock('calculate');
			$act=Mockery::mock('calculate');
			$gender=Mockery::mock('calculate');
			$weight->shouldReceive('getweight')->andReturn($weight);
			$height->shouldReceive('getheight')->andReturn($height);
			$age->shouldReceive('getage')->andReturn($age);
			$act->shouldReceive('getact')->andReturn($act);
			$gender->shouldReceive('getgender')->andReturn($gender);
			$BMRcal=new calculate($weight,$height,$age,$act,$gender);
			
		
			if($gender==0){ //gender=0 คือ male
				$BMR= 66+(13.7*$weight)+(5*$height)-(6.8*$age);
					if($act==1){ //act=1 คือ น้อยมาก ไม่ออกกำลังกาย-ทำงานที่ส่วนใหญ่นั่ง
						$BMR = $BMR*1.2;
					}else if($act==2){ //act=2 คือ น้อย: ออกกำลังกายหรืเล่นกีฬา 1-2 วัน/อาทิตย์ หรือทำงานที่มีการเคลื่อนไหว
						$BMR = $BMR*1.375;
					}else if($act==3){ //act=3 คือ ปานกลาง: ออกกำลังกายหรือเล่นกีฬา 3-5 วัน/อาทิตย์
						$BMR = $BMR*1.55;
					}else if($act==4){ //act=4 คือ มาก: ออกกำลังกายหรือเล่นกีฬา 6-7 วัน/อาทิตย์
						$BMR = $BMR*1.725;
					}else{ //act=5 คือ ออกกำลังกายหรือเล่นกีฬาอย่างหนัก, อาชีพที่ใช้แรงงาน
						$BMR = $BMR*1.9;
					}
			}else{ //gender=1 คือ female
				$BMR = 665+(9.6*$weight)+(1.8*$height)-(4.7*$age);
					if($act==1){
						$BMR = $BMR*1.2;
					}else if($act==2){
						$BMR = $BMR*1.375;
					}else if($act==3){
						$BMR = $BMR*1.55;
					}else if($act==4){
						$BMR = $BMR*1.725;
					}else{
						$BMR = $BMR*1.9;
					}
			}
			
			$BMRcal=$BMRcal->calBMR();

			$this->assertEquals($BMR,$BMRcal);
		}
	}


?>