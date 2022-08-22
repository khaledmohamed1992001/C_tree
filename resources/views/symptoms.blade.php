@extends('master')
@section('content')
      <!-- BEGIN SYMPTOMS SECTION -->
      <section id="symptoms" class="symptoms-bg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
              <div class="content-main text-left mt-0">
                <div class="content-top">
                  <span class="badge">Covid Symptoms</span>
                  <h2>What are symptoms?</h2>
                </div>
                <div class="content-bottom content-bottom-symptoms">
                  <p>Some people infected with the coronavirus have mild COVID-19 illness, and others have no symptoms at all.
In some cases, however, COVID-19 can lead to respiratory failure, lasting lung and heart muscle damage,
nervous system problems, kidney failure or death.</p>
                  <div class="symptoms-name d-flex align-items-center">
                    <div class="symptoms-name-inner"><i class="fa fa-check fa-icon-style"></i>Headache</div>
                    <div class="symptoms-name-inner"><i class="fa fa-check fa-icon-style"></i>Breath shortness</div>
                  </div>
                  <div class="symptoms-name d-flex align-items-center">
                    <div class="symptoms-name-inner"><i class="fa fa-check fa-icon-style"></i>Fever</div>
                    <div class="symptoms-name-inner"><i class="fa fa-check fa-icon-style"></i>Kidney Failure</div>
                  </div>
                  <div class="symptoms-name d-flex align-items-center">
                    <div class="symptoms-name-inner"><i class="fa fa-check fa-icon-style"></i>Cough</div>
                    <div class="symptoms-name-inner"><i class="fa fa-check fa-icon-style"></i>Sneeze</div>
                  </div>
                  <a href="https://www.who.int/news-room/questions-and-answers/item/coronavirus-disease-covid-19-how-is-it-transmitted" id="fill-btn" class="home-btn">Why Covid Spread</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
              <div class="symptoms-image">
                <img src="image/symptoms.png" alt="symptoms">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SYMPTOMS SECTION -->

      <section id="cta-area" class="cta-area-bg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="content-main cta-area-inner-bg text-center p-5 mt-0">
                <div class="content-top text-center">
                  <h2 class="mt-0">Want to test Covid?</h2>
                </div>
                <div class="content-bottom content-bottom-width text-center">
                  <p>Our goal at Our World in Data is to provide testing data over time for many countries around the world.</p>
                </div>
                <a href="#" id="outline-btn" class="home-btn outline-btn mr-sm-4 mr-md-4"><i class="fa fa-phone"></i>Call for test</a>
                <a href="#" id="outline-btn" class="home-btn outline-btn"><i class="fa fa-calendar fa fa-calendar"></i>Book Doctor</a>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection
