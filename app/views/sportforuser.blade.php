@extends ('theme')
@section('title')
<title>ค้นหากิจกรรมการเผาผลาญพลังงาน</title>
@stop
@section('body')

<div class="container">


    <div class="row">

        <div class="col-lg-12">
            <div class="page-header">
                <h1>ค้นหากิจกรรมการเผาพลาญพลังงาน</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <form>
                <input class="form-control" class="input" type="text" name="search" id="search" placeholder="ค้นหากิจกรรมการเผาผลาญพลังงาน "><br>
                <div class="form-actions">
                    <input type="submit" class="btn btn-primary btn-block btn-lg" value="ค้นหา" >
                </div>
            </form>
                <br><br>
                <form action="{{url('/searchsportforuser')}}" method="post">
                วันที่ต้องการบันทึก : 
                <select class="form-control" name="day">
                    @for ($i=1; $i < $day+1 ; $i++)

                             <option name="day" value="{{$i}}">{{$i}}</option>
                    
                    @endfor
                </select>  
                <br>
                <table class="table" id="table">
                    @if ($searchSportname==NULL)
                    <tr class="primary">
                        <td>ไม่พบรายการกิจกรรมที่ต้องการ</td>
                    </tr>
                    @else 
                    <thead>
                        <tr>
                            <th>ชื่อกิจกรรม</th>
                            <th>ค่าแคลอรี่</th>
                            <th>บันทึก</th>
                        </tr>
                    </thead>

                    <tbody>

                       @for ($i=0; $i <count($searchSportname) ; $i++)
                       <tr>
                        <td> {{$searchSportname[$i]}}</a></td>
                        <td> {{$calsport[$i]}}</a></td>
                        

                        
                            <td><button type="submit" name="save"  class="btn btn-success btn-block btn-lg" value="{{$id[$i]}}" >บันทึก</button></td>
                        </form>

                    </tr>
                    @endfor

                    

                </tbody>

                @endif
            </table>
            <hr>
        </div>

        
        <!-- /.row -->

        <hr>
    </div>

    <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    @stop