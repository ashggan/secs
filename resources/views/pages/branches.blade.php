@extends('layouts.main')
@section('body')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Our branches  </h2> 
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.7324110182494!2d32.561154814851946!3d15.552469189201995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e90488e72cfa5%3A0x3e0d850f1f0249d9!2z2KfZhNis2YXYudmK2Kkg2KfZhNiz2YjYr9in2YbZitipINmE2K3Zhdin2YrYqSDYp9mE2KjZitim2Kk!5e0!3m2!1sen!2s!4v1622746484697!5m2!1sen!2s" 
              class="h-full w-full absolute overflow-hidden" 
              style="border:0;width:100% ;
              height: 100%;" 
              allowfullscreen="" 
              loading="lazy">
            </iframe> 
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
           
             
            <h3> Find the nearest branch    </h3>

            <div class="form-group ">
                        
                <select       class="form-control"> 
                        <option  >Search by city </option> 
                        <option  >Kartoum </option> 
                </select>
         
            </div>
            <div class="flex flex-row mb-4 items-center ">
                <i class="fa fa-globe gold mr-3 text-md"></i>
                <span class="  font-bold green mr-8">City</span>
                <span class=" text-gray-700 "> Kartoum</span> 
            </div>

            <div class="flex flex-row mb-4 items-center ">
                <i class="fa fa-map gold mr-3 text-md"></i>
                <span class="  font-bold green mr-8">Address</span>
                <span class=" text-gray-700 ">Sudan, Kartoum</span> 
            </div>

            <div class="flex flex-row mb-4 items-center ">
                <i class="fa fa-phone gold mr-3 text-md"></i>
                <span class="  font-bold green mr-8">PHONE</span>
                <span class=" text-gray-700 "> 234234234	  </span> 
            </div>

            <div class="flex flex-row mb-4 items-center ">
                <i class="fa fa-envelope  gold mr-3 text-md"></i>
                <span class="  font-bold green mr-8">EAMIL</span>
                <span class=" text-gray-700 ">  secs1975@yahoo.com		  </span> 
            </div>
            
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

  
  </main>
@endsection