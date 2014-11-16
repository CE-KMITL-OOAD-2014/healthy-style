<?php

	class bmicalTest extends TestCase{

		public function testBMI()
		{
			$weight=45;
			$height=165;
			$BMI=$weight/($height*$height);
			

			$Bmi=new calculate;
			$Bmical=$Bmi-> calBMI();

			$this->assertEquals($BMI,$Bmical);
		}
	}


?>
