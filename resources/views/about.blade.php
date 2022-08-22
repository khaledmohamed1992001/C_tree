 @extends('master')
 @section('content')
       <section id="about" class="about-bg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
              <div class="about-image">
                <img src="image/about.png" alt="about">
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
              <div class="content-main text-left">
                <div class="content-top">
                  <span class="badge">About Covid</span>
                    <h2>What is Coronavirus?</h2>
                </div>
                <div class="content-bottom content-bottom-about">
                  <p>Coronaviruses are named for their appearance: “corona” means “crown.” The virus’s outer layers
                    are covered with spike proteins that surround them like a crown.</p>
                  <p>Coronaviruses are common in different animals. Rarely, an animal coronavirus can infect humans.
                    There are many different kinds of coronaviruses. Some of them can cause colds or other mild
                     respiratory (nose, throat, lung) illnesses.The first case of COVID-19 was reported Dec. 1, 2019, and the cause was a then-new coronavirus later named
                     SARS-CoV-2. SARS-CoV-2 may have originated in an animal and changed (mutated) so it could cause illness
                     in humans. In the past, several infectious disease outbreaks have been traced to viruses originating in birds,
                     pigs, bats and other animals that mutated to become dangerous to humans. Research continues,
                     and more study may reveal how and why the coronavirus evolved to cause pandemic disease.</p>
                  <a href="https://www.who.int/westernpacific/emergencies/covid-19/information/asymptomatic-covid-19" id="fill-btn" class="home-btn">See Symptoms</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


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
