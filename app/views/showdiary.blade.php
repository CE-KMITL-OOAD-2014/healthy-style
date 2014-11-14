@extends ('theme')
@section('title')
<title>ดูรายการที่บันทึก....</title>
@stop
@section('body')

<div class="span7">   
	<div class="widget stacked widget-table action-table">

		<form action="{{url('/showdiary')}}" method="post">
			<div class="widget-header">
				<i class="icon-th-list"></i>
				<h3>Food Diary...</h3>
			</div> <!-- /widget-header -->
			<br>
			ค่าแคลอรี่ที่ควรได้รับในแต่ละวัน : {{$bmr}} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			ค่าแคลอรี่ที่ควรได้รับในแต่ละวันสำหรับผู้ที่ต้องการลดน้ำหนัก : {{$downbmr}} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
			<br><br>
			<div class="widget-content">

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>วันที่บันทึกอาหาร</th>
							<th>ชื่ออาหาร</th>
							<th>ชื่อร้านอาหาร</th>
							<th>มื้ออาหาร</th>
							<th>ค่าแคลอรี่</th>
							<th>ค่าแคลอรี่ที่ถูกใช้แล้วในวันที่บันทึก</th>
							
						</tr>
					</thead>
					<tbody>

						@for ($i=0; $i <count($newuser) ; $i++)
						<tr>
							<td> {{$newuser[$i]->day}}</a></td>
							<td> {{$foodname[$i]->getfoodname()}}</a></td>
							<td> {{$foodname[$i]->gettype()}}</a></td>
							<td> {{$newuser[$i]->meal}}</a></td>
							<td> {{$foodname[$i]->getfoodcal()}}</a></td>
							<td> {{$newuser[$i]->leftbmr}}</a></td>

							
						</tr>

						@endfor
					</tbody>
						</table>

						<br>
						<br>
						<div class="widget-header">
				<i class="icon-th-list"></i>
				<h3>Sport Diary...</h3>
			</div> <!-- /widget-header -->
			<br>
						<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>วันที่บันทึกกิจกรรม</th>
							<th>ชื่อกิจกรรม</th>
							<th>ค่าแคลอรี่</th>
						
							
						</tr>
					</thead>
					<tbody>

						@for ($i=0; $i <count($newuser1) ; $i++)
						<tr>
							<td> {{$newuser1[$i]->day}}</a></td>
							<td> {{$sportname[$i]->getsportname()}}</a></td>
							<td> {{$sportname[$i]->getsportcal()}}</a></td>
					

							
						</tr>

						@endfor
					</tbody>

											
										</table>

									</div> <!-- /widget-content -->

							</form>
					</div> <!-- /widget -->
							
		</div>

@stop