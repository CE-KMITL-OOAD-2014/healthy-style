<?php

	class BMIcalTest extends TestCase{

		public function testBMI()
		{
			$weight=Mockery::mock('calculate');
			$height=Mockery::mock('calculate');
			$weight->shouldReceive('getweight')->andReturn($weight);
			$height->shouldReceive('getheight')->andReturn($height);
			$BMIcal=new calculate($weight,$height);
			
			$BMI=$weight/($height*$height);
			$BMIcal=$BMIcal->calBMI();

			$this->assertEquals($BMI,$BMIcal);
		}
	}


?>