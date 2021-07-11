@extends('layouts.main')
@section('body')
 
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Membership  </h2> 
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Become part of our family </h3>
            <p class="fst-italic">
              The Project aims at spreading culture of human and environmental rights among Sudanese communities in 7 States of Sudan affected by conflicts & natural disasters. These 7 States (North Darfur , Kassala ,Khartoum State, Bahr Elgazal River Nile, South Kordofan, Blue Nile) has been chosen to represent different communities in Sudan,  because, the environmental rights situation has been affected by the war and other conflicts over the last ten years at least in these states. Normally the people of these states complain that they have been marginalized since the independence of Sudan. The duration of the project about 18 months.
            </p>
            
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="First Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="Last Name" id="subject" placeholder="Last Name" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div> 

              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Job Title  " required>
              </div> 

              {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --}}
              <div class="text-left">
                <button type="submit" class="get-started-btn ">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

  
   
  </main>
  <!-- End #main -->


@endsection