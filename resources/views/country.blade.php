@extends('master')
@section('content')
<div class="row">
    @foreach($country as $Country)
    <div class="coninfo col-12">
        <br><br><br><br><br>
        <h2 style="color: white;">Country Name</h2><br>
        <h2 style="color: #16CF16;">{{$Country->Country}}<b></b></h2>
    </div>
    <div class="coninfo col-12">
        <br><br><br><br><br>
        <h2 style="color: white;">Total Cases</h2><br>
        <h2 style="color: #16CF16;">{{$Country->TotalCases}}<b></b></h2>
    </div>
    <div class="coninfo col-12">
        <br><br><br><br><br>
        <h2 style="color: white;">Total Deaths</h2><br>
        <h2 style="color: #16CF16;">{{$Country->TotalDeaths}}<b></b></h2>
    </div>
    <div class="coninfo col-12">
        <br><br><br><br><br>
        <h2 style="color: white;">Recovered</h2><br>
        <h2 style="color: #16CF16;">{{$Country->TotalRecovered}}<b></b></h2>
    </div>
    <div class="coninfo col-12">
        <br><br><br><br><br>
        <h2 style="color: white;">Active Cases</h2><br>
        <h2 style="color: #16CF16;">{{$Country->ActiveCases}}<b></b></h2>
    </div>
    <div class="coninfo col-12">
        <br><br><br><br><br>
        <h2 style="color: white;">Critical</h2><br>
        <h2 style="color: #16CF16;">{{$Country->SeriousCritical	}}<b></b></h2>
    </div>
    <div class="coninfo col-12">
        <br><br><br><br><br>
        <h2 style="color: white;">Total Tests</h2><br>
        <h2 style="color: #16CF16;">{{$Country->TotalTests}}<b></b></h2>
    </div>
    @endforeach
</div>
@endsection
