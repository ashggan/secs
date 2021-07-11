@extends('layouts.main')
@section('body')
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>CEID</h2>
       </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              {{-- <img src="assets/img/course-3.jpg" class="img-fluid" alt="..."> --}}
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Book</h4>
                  {{-- <p class="price">$180</p> --}}
                </div>

                <h3><a href="#">Global warming implications</a></h3>
                <p>A study about Global warming implications on Sudan </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-download"></i>&nbsp;Download
                    &nbsp;&nbsp; 
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              {{-- <img src="assets/img/course-3.jpg" class="img-fluid" alt="..."> --}}
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Case study</h4>
                  {{-- <p class="price">$180</p> --}}
                </div>

                <h3><a href="#">Livestock farming in west sudan </a></h3>
                <p>A study about Livestock farming in west sudan </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-download"></i>&nbsp;Download
                    &nbsp;&nbsp; 
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->


        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
@endsection