@extends('layouts.main')
@include('layouts.charts')
@section('content')
  <div class="row">
  <h3>Line Chart</h3>
  <div class="col-md-6">
    <hr>
  <div id="curve_chart" style="width: auto; height:auto"></div>
</div>
<h3>Bar Chart</h3>
<div class="col-md-6">
  <hr>
<div id="curve_chart" style="width: auto; height:auto"></div>
</div>
</div>
@endsection
