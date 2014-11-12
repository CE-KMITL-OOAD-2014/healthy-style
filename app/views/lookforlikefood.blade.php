@extends ('theme')
@section('title')
<title>ดูรายการอาหารโปรดของคุณ</title>
@stop
@section('body')

<div class="span7">   
	<div class="widget stacked widget-table action-table">

		<form action="{{url('/looklikefood')}}" method="post">
			<div class="widget-header">
				<i class="icon-th-list"></i>
				<h3>รายการอาหารโปรดของคุณ....</h3>
			</div> <!-- /widget-header -->
			<br>
			<div class="widget-content">

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>ชื่ออาหาร</th>
							<th>ชื่อร้านอาหาร</th>
							<th>ค่าแคลอรี่</th>
							
						</tr>
					</thead>
					<tbody>

						@for ($i=0; $i <count($foodid) ; $i++)
                            <tr>
                                <?php
                                		$food = new Search;
										$namefood = $food->searchnameformid($foodid[$i]);
										$calfood=$food->searchcalformid($foodid[$i]);
										$typefood=$food->searchtypeformid($foodid[$i]);
                                ?>

                                <td> {{$namefood[0]}}</a></td>
                                <td> {{$typefood[0]}}</a></td>
                                <td> {{$calfood[0]}}</a></td>

                            </tr>

                        @endfor

											</tbody>
										</table>

									</div> <!-- /widget-content -->

							</form>
					</div> <!-- /widget -->
							
		</div>

@stop