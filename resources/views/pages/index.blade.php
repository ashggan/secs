@extends('layouts.main')
@section('body')

<!-- #main -->

  <main id="main">
   <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
      <div class="container  position-relative" data-aos="fade-in" data-aos-delay="100">
        <div class="row">
          <div class="col-md-4 h-70">
            <!-- <h1>Learning Today,<br>Leading Tomorrow</h1> -->
            <vue-typed-js :loopCount="3" :fadeOut="true" :strings="['WE ARE', 'Sudanese<span> Environment </span>Conservation Society']" :contentType="'html'">
              <h1 class="typing"></h1>
            </vue-typed-js>
            <p>SECS works towards environmental rehabilitation, sound management and rational utilization of natural resources and elimination of harmful environmental violations and malpractices</p>
            <a href="{{route('pages.about')}}" class="btn-get-started shadow  ">  
              <i class="fas fa-heart mr-1"></i>
              VOLUNTEER NOW  
            </a>
          </div>
          <div class="col-md-8">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/bg-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/about.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/footer.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

   <!-- ======= End Hero Section ======= -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about mt-50">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content"> 
            <div class="section-title">
              <h2>what we do ?</h2>
              <p>our programm   </p>
            </div>
            <p>The society targets all the Sudanese community, with special emphasis on the local communities and the multipliers (teachers, media personnel and talented people) SECS also targets women, primary schools students, decision makers, lawyers, farmers, pastoralists and local leaders.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Environmental Rehabilitation.</li>
              <li><i class="bi bi-check-circle"></i> Institutional Development and Capacity Building Program.</li>
              <li><i class="bi bi-check-circle"></i> Environmental Education Program.</li>
            </ul>
          

          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="22" data-purecounter-duration="1" class="purecounter"></span>
            <p>Branches</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="242" data-purecounter-duration="1" class="purecounter"></span>
            <p>Vulenteers</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Years old</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
          <div class="map">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.7324110182494!2d32.561154814851946!3d15.552469189201995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e90488e72cfa5%3A0x3e0d850f1f0249d9!2z2KfZhNis2YXYudmK2Kkg2KfZhNiz2YjYr9in2YbZitipINmE2K3Zhdin2YrYqSDYp9mE2KjZitim2Kk!5e0!3m2!1sen!2s!4v1622746484697!5m2!1sen!2s" 
              class="h-full w-full absolute overflow-hidden" 
              style="border:0;width:100% ;
              height: 100%;" 
              allowfullscreen="" 
              loading="lazy">
            </iframe> 
          </div>
          <div class="container" data-aos="fade-up">
    
            <div class="row">
              <div class="col-lg-4 d-flex align-items-stretch">
                <div class="content">
                  <h3>our <span>branches</span>  all over Sudan</h3>
                  <ul >
                    <li>
                      <div class="flex flex-row">
                        <i class="fa fa-globe text-green-700 mr-3 text-sm"></i>
                        <a class="text-white hover:text-gray-300 font-semibold block pb-2 text-sm"
                         
                          >Sudan, Kartoum </a>
                      </div>
                    </li>
                    <li>
                      <div class="flex flex-row">
                        <i class="fa fa-phone text-green-700 mr-3 text-sm"></i>
                        <a class="text-white hover:text-gray-300 font-semibold block pb-2 text-sm"
                          
                          >013 352 2606 </a>
                      </div>
                    </li>
                    <li>
                      <div class="flex flex-row">
                        <i class="fa fa-envelope text-green-700 mr-3 text-sm"></i>
                        <a class="text-white hover:text-gray-300 font-semibold block pb-2 text-sm" >secs1975@yahoo.com       </a>     
                      </div>
                    </li> 
                  </ul>
                  <div class="text-left">
                    <a href="about.html" class="more-btn"> Our Locations    <i class="bx bx-chevron-right"></i></a>
                  </div>
                </div>
              </div>
               
            </div>
    
          </div>
        </section>
        <!-- End Why Us Section -->

          <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Web Development</h4>
                  <p class="price">$169</p>
                </div>

                <h3><a href="course-details.html">Website Design</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Marketing</h4>
                  <p class="price">$250</p>
                </div>

                <h3><a href="course-details.html">Search Engine Optimization</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                    <span>Lana</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Content</h4>
                  <p class="price">$180</p>
                </div>

                <h3><a href="course-details.html">Copywriting</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

  </main>
  <!-- End #main -->

@endsection
@section('script')

  <script src="{{asset('js/purecounter.js')}} "></script> 
    
@endsection

 
