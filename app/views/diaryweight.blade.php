@extends ('theme')
@section('title')
<title>ดูน้ำหนักที่เปลี่ยนแปลง....</title>
@stop
@section('body')

<div class="span7">   
	<div class="widget stacked widget-table action-table">

		<form action="{{url('changeweight')}}" method="get">
			<div class="widget-header">
				<i class="icon-th-list"></i>
				<h3>Weight Diary...</h3>
			</div> <!-- /widget-header -->
			<br>
			<div class="widget-content">

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>วันที่บันทึก</th>
							<th>น้ำหนักเริ่มต้น(kg.)</th>
							<th>น้ำหนักเป้าหมาย(kg.)</th>
							<th>ผลต่างของน้ำหนักเริ่มต้นและน้ำหนักเป้าหมาย(kg.)</th>
							<th>น้ำหนักที่บันทึก(kg.)</th>
							<th>น้ำหนักที่เปลี่ยนแปลง(kg.)</th>
							
						</tr>
					</thead>
					<tbody>

						@for ($i=0; $i <count($newuser) ; $i++)
						<tr>
							<td> {{$newuser[$i]->updated_at}}</a></td>
							<td> {{$weight}}</a></td>
							<td> {{$goalweight}}</a></td>
							<td> {{$diff}}</a></td>
							<td> {{$newuser[$i]->newweight}}</a></td>
							<td> {{$newuser[$i]->diffweight}}</a></td>
							
						</tr>

						@endfor

					</tbody>
				</table>

			</div> <!-- /widget-content -->

		</form>
	</div> <!-- /widget -->

</div>

@stop