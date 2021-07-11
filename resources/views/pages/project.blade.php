@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
@endsection

@section('body')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>water for peace</h2> 
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="img/projects/IMG_0131.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3></h3>
            <p class="fst-italic">
                To contribute to local peace building processes in South Kordofan State through enhanced access to sanitation, safe and adequate water for human and animal consumption.  
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> To Construct new water Yards (in two villages & rehabilitate the water facilities in the four villages.</li>
              <li><i class="bi bi-check-circle"></i> To initiate peace building activities in the target area.</li>
              <li><i class="bi bi-check-circle"></i> To improve the environmental health in the area through awareness raising and establishment of latrines.</li>
              <li><i class="bi bi-check-circle"></i> To improve water management and governance.To improve the reproductive of the community, especially women.</li>
            </ul>
            <a href="/img/projects/FInal Report-water-for-peace-project.docx" class="btn-get-started shadow  ">  <i class="fas fa-download mr-1"></i>    Project info </a>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up"> 
          <div class="section-title">
            <h2>What we do</h2>
            <p>Project Gallery</p>
          </div>
           
        </div>
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row mb-8">
                        <a href="img/projects/EnvironmentalDay.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                            <img src="img/projects/EnvironmentalDay.jpg" class="img-fluid">
                        </a>

                        <a href="img/projects/DSC09999.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                            <img src="img/projects/DSC09999.jpg" class="img-fluid">
                        </a>

                        <a href="img/projects/Closingday.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                            <img src="img/projects/Closingday.jpg" class="img-fluid">
                        </a>
                        
                         
                    </div>
                    <div class="row"> 
                        <a href="img/projects/openmeeting.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                            <img src="img/projects/openmeeting.jpg" class="img-fluid">
                        </a> 
                    </div>
                </div>
            </div>
        </div>
      </section><!-- End Testimonials Section -->
 

  </main><!-- End #main -->
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha512-YibiFIKqwi6sZFfPm5HNHQYemJwFbyyYHjrr3UT+VobMt/YBo1kBxgui5RWc4C3B4RJMYCdCAJkbXHt+irKfSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
</script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"  ></script> --}}
@endsection