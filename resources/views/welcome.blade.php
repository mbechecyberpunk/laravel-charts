@extends('layouts.main')
@include('layouts.charts')
@section('content')
  <div class="row">

  <div class="col-md-6">

  <div id="piechart_div" style="width: auto; height:auto"></div>
</div>
<div class="col-md-6">
  
 <div id="barchart_div" style="width: auto; height: auto;"></div>
</div>
</div>
<br>
<div class="row">
<div class="col-md-6">

 <div id="linechart_div" style="width: auto; height: auto;"></div>
</div>
<div class="col-md-6">

 <div id="columnchart_div" style="width: auto; height: auto;"></div>
</div>
</div>
<br>
<div class="row">
<div class="col-md-6">

 <div id="donutchart_div" style="width: auto; height: auto;"></div>
</div>
<div class="col-md-6">

 <div id="areachart_div" style="width: auto; height: auto;"></div>
</div>
</div>

</div>
@endsection
