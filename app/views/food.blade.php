@extends ('theme')
@section('title')
<title>ค้นหาอาหาร</title>
@stop
@section('body')


<!-- Page Content -->

<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="page-header">
                <h1>ค้นหาอาหาร</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form>

                <div class="controls">
                    <input class="form-control" class="input" type="text" name="search" id="search" placeholder="ค้นหาอาหาร "><br>
                    <input type="radio" name="food" value="0" checked=true>&nbspชื่ออาหาร&nbsp&nbsp&nbsp   
                    <input type="radio" name="food" value="1">&nbspร้านอาหาร&nbsp&nbsp&nbsp                      
                    <input type="radio" name="food" value="2">&nbspจำนวนแคลอรี่

                    <div class="form-actions">
                        <br><input type="submit" class="btn btn-primary btn-block btn-lg" value="ค้นหา" >
                    </div>
                </div> 
            </form>







            <table class="table" id="table">
                @if ($searchFoodname==NULL)
                <tr class="primary">
                    <td>ไม่พบรายการอาหารที่ต้องการ</td>
                </tr>
                @else 
                <thead>
                    <tr>
                        <th>อาหาร</th>
                        <th>ชนิดอาหาร</th>
                        <th>ค่าแคลอรี่</th>
                    </tr>
                </thead>

                <tbody> 
                   @for ($i=0; $i <count($searchFoodname) ; $i++)
                   <tr>
                    <td> {{$searchFoodname[$i]}}</a></td>
                    <td> {{$typefood[$i]}}</a></td>
                    <td> {{$calfood[$i]}}</a></td>
                </tr>
                @endfor

            </tbody> 
            @endif
        </table>


    </div>


    <div class="col-lg-4 col-md-offset-1">
        <table class="table" id="table">
         <h3>ร้านอาหารยอดฮิต</h3>
         <tbody>
            <tr>
                <td><img src="http://www.fit-d.com/Services/getPicture.aspx?pictureID=DR9vB%2bLSxNM%3d" alt="" width="30" height="30">&nbsp&nbsp&nbsp McDonald's</td>
            </tr>
            <tr>
                <td><img src="http://www.fit-d.com/Services/getPicture.aspx?pictureID=tlLutizIPsQ%3d" alt="" width="30" height="30">&nbsp&nbsp&nbsp KFC</td>
            </tr>
            <tr>
                <td><img src="http://www.fit-d.com/Services/getPicture.aspx?pictureID=Ra%2blPcSnepQ%3d" alt="" width="30" height="30">&nbsp&nbsp&nbsp Red Mango</td>
            </tr>
            <tr>
                <td><img src="http://www.fit-d.com/Services/getPicture.aspx?pictureID=ighWHpcN%2bgs%3d" alt="" width="30" height="20">&nbsp&nbsp&nbsp Krispy Kreme</td>
            </tr>
            <tr>
                <td><img src="http://www.fit-d.com/Services/getPicture.aspx?pictureID=DkGXXJ1IZr0%3d" alt="" width="30" height="20">&nbsp&nbsp&nbsp Subway</td>
            </tr>
            <tr>
                <td><img src="http://www.fit-d.com/Services/getPicture.aspx?pictureID=H0%2biHmO28qA%3d" alt="" width="30" height="30">&nbsp&nbsp&nbsp Pizza Hut</td>
            </tr>
            <tr>
                <td><img src="http://www.fit-d.com/Services/getPicture.aspx?pictureID=6P9NmnYZ9dk%3d" alt="" width="30" height="30">&nbsp&nbsp&nbsp Starbucks</td>
            </tr>
        </tbody>
    </table>
    <hr> 
    </div>
</div>
</count($searchFoodname)
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>




<!-- /.row -->

<hr>

</form>

</div>
<!-- /.container -->

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

@stop