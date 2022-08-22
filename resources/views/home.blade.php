@extends('master')
@section('content')
  <section id="home" class="home-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-6">
          <div class="home-content text-center text-md-left">
            <h1>Stay Home Stay Safe</h1>

                  <p>Globally, as of 6:05pm CEST, 27 April 2022, there have been 508,827,830 confirmed
 cases of COVID-19, including 6,227,291 deaths, reported to WHO. As of 23 march 2022,
a total of 11,426,994,800 vaccine doses have been administered.</p>
               <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" id="fill-btn" class="home-btn">about corona</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          <div class="hero-image">
            <img src="image/hero.png" alt="hero">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="countdown" class="countdown-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
          <div class="countdown-content" id="counter">
            <h6>186</h6>
            <p>Affected Country</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
          <div class="countdown-content">
            <h6>466M</h6>
            <p>Confirmed Cases</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
          <div class="countdown-content">
            <h6>391M</h6>
            <p>Recovered Cases</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
          <div class="countdown-content mb-sm-0">
            <h6>6.07M</h6>
            <p>Worldwide Deaths</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
