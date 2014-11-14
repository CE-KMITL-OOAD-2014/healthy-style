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
			<div class="widget-content">

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>วันที่บันทึกอาหาร</th>
							<th>ชื่ออาหาร</th>
							<th>ชื่อร้านอาหาร</th>
							<th>มื้ออาหาร</th>
							<th>ค่าแคลอรี่</th>
							<th>ค่าแคลอรี่ที่เหลือ</th>
							
						</tr>
					</thead>
					<tbody>

						@for ($i=0; $i <count($newuser) ; $i++)
						<tr>
							<td> {{$newuser[$i]->updated_at}}</a></td>
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
							<th>ชื่อกิจกรรม</th>
							<th>ค่าแคลอรี่</th>
							
						</tr>
					</thead>
					<tbody>

						@for ($i=0; $i <count($sportid) ; $i++)
                            <tr>
                                <?php
                                		$sport = new Search;
										$namesport = $sport->searchnamesportformid($sportid[$i]);
										$calsport=$sport->searchcalsportformid($sportid[$i]);
                                ?>

                                <td> {{$namesport[0]}}</a></td>
                                <td> {{$calsport[0]}}</a></td>


                            </tr>

                        @endfor

											</tbody>
										</table>

									</div> <!-- /widget-content -->

							</form>
					</div> <!-- /widget -->
							
		</div>

@stop