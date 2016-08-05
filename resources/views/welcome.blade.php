@extends('layouts.main')
@include('layouts.charts')
@section('content')
  <div class="row">

  <div class="col-md-6">
    <h3>Line Chart</h3>
    <hr>
  <div id="curve_chart" style="width: auto; height:auto"></div>
</div>
<div class="col-md-6">
  <h3>Bar Chart</h3>
  <hr>
 <div id="barchart_material" style="width: auto; height: auto;"></div>
</div>
</div>
@endsection
