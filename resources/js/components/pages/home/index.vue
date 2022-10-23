<script >
    import HeaderDetails from "../layouts/HeaderDetails.vue";
    import FooterDetails from "../layouts/FooterDetails.vue";

   export default {
    components: {
        HeaderDetails,
        FooterDetails
    }
   };
</script>



<template>
    
    <div>
        

        <header-details></header-details>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-start">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"
                            style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To Khulna Hearing Center</h5>
                        <h1 class="display-1 text-white mb-md-4">Get the Best Ear Treatment</h1>
                        <div class="pt-2">
                            <a href="" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Find Doctor</a>
                            <router-link to="/appoinment"
                                class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="../layouts/assets/img/ear.jpg"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="mb-4">
                            <h3 class="d-inline-block text-primary text-uppercase border-bottom border-5">About Us</h3>
                            <h1 class="display-4">Best Ear Treatment For Yourself and Your Family</h1>
                        </div>
                        <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor
                            voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat
                            ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor
                            consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam
                            dolores dolore. Amet erat amet et magna</p>
                        <div class="row g-3 pt-3">
                            <div class="col-sm-4 col-6">
                                <div class="bg-light text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                    <h6 class="mb-0">Qualified<small class="d-block text-primary">Doctors</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="bg-light text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                    <h6 class="mb-0">Emergency<small class="d-block text-primary">Services</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="bg-light text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                    <h6 class="mb-0">Accurate<small class="d-block text-primary">Testing</small>
                                    </h6>
                                </div>
                            </div>
                            <!-- <div class="col-sm-3 col-6">
                                <div class="bg-light text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                                    <h6 class="mb-0">Free<small class="d-block text-primary">Ambulance</small></h6>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="container-fluid bg-primary my-3 py-3" style="max-height: 100%">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4 c-box c-box-border">
                        <div class="mx-auto mb-5" style="max-width: 500px;">
                            <!-- <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Find A Doctor</h5> -->
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="../layouts/assets/img/call.png" style="width: 80px; max-width: 220px;" alt="">
                                </div>
                                <div class="col-md-9 ">
                                    <h3 class="display-6">Call Us</h3>
                                        <h5 class="text-white fw-normal">
                                            +(88) 01720500437 <br>
                                            +(88) 01720500437
                                        </h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 c-box c-box-border">
                        <div class="mx-auto mb-5" style="max-width: 500px;">
                            <!-- <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Find A Doctor</h5> -->
                            <div class="row">
                                <div class="col-md-3 ml-5">
                                    <img src="../layouts/assets/img/location.png" style="width: 80px; max-width: 220px;" alt="">
                                </div>
                                <div class="col-md-9 ml-5">
                                    <h3 class="display-6">Our Location</h3>
                                        <h5 class="text-white fw-normal">
                                            51/52, Shamsur Rahman Road,<br>
                                            Baitipara Mor, Beside of -<br>
                                            Moti Moshzid (1st Floor), <br>
                                            Khulna,<b></b>
                                            Bangladesh.
                                        </h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 c-box">
                        <div class="mx-auto mb-5" style="max-width: 500px;">
                            <!-- <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Find A Doctor</h5> -->
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="../layouts/assets/img/time.png" style="width: 80px; max-width: 220px;" alt="">
                                </div>
                                <div class="col-md-9 ">
                                    <h4 class="display-6">Opening Ours</h4>
                                        <h5 class="text-white fw-normal">
                                            Saturday to Thursday <br>
                                            10:00am to 9:30pm
                                        </h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
                
                
            </div>
        </div>

        <div class="container-fluid py-5">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <h2 class="d-inline-block text-primary text-uppercase border-bottom border-5">
            Our Doctors
          </h2>
        </div>


            <div class="row g-5">
            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                <img
                    class="img-fluid w-100"
                    src="../layouts/assets/img/team-1.jpg"
                    alt=""
                />
                <div class="p-4">
                    <h3 class="text-primary">Proffesor Dr. S. K. Ballav</h3
                    >
                    <p class="m-0">
                        ENT Specialist & Head-Neck Surgeon <br>
                        Ex-Principal & Head of Dept. ENT <br>
                        <b>Khulna Medical College</b><br>
                        Khulna, Bangladesh

                    </p>
                </div>
                
                </div>
            </div>
            </div>


      </div>
    </div>

        <!-- Services Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h2 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Services</h2>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon mb-4">
                                <i class="fa fa-2x fa-user-md text-white"></i>
                            </div>
                            <h4 class="mb-3">Emergency Care</h4>
                            <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet,
                                justo elitr dolor amet sit</p>
                            <a class="btn btn-lg btn-primary rounded-pill" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon mb-4">
                                <i class="fa fa-2x fa-user-md text-white"></i>
                            </div>
                            <h4 class="mb-3">Hearing Aids</h4>
                            <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet,
                                justo elitr dolor amet sit</p>
                            <a class="btn btn-lg btn-primary rounded-pill" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon mb-4">
                                <i class="fa fa-2x fa-microscope text-white"></i>
                            </div>
                            <h4 class="mb-3">Hearing Test</h4>
                            <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet,
                                justo elitr dolor amet sit</p>
                            <a class="btn btn-lg btn-primary rounded-pill" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- Appointment Start -->
        <div class="container-fluid bg-primary my-5 py-5">
            <div class="container py-5">
                <div class="row gx-5">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="mb-4">
                            <h3 class="d-inline-block text-white text-uppercase border-bottom border-5">Appointment
                            </h3>
                            <h1 class="display-4">Make An Appointment For Your Ear Treatment</h1>
                        </div>
                        <p class="text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd
                            ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt
                            voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr
                            ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                        <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-white text-center rounded p-5">
                            <h1 class="mb-4">Book An Appointment</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-12">
                                        <input type="text" class="form-control bg-light border-0"
                                            placeholder="Your Name" style="height: 55px;">
                                    </div>
                                    
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control bg-light border-0"
                                            placeholder="Phone Number" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control bg-light border-0"
                                            placeholder="Your Email" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="date" class="form-control bg-light border-0"
                                            placeholder="" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control bg-light border-0"
                                            placeholder="Dr. S. K. Ballav" style="height: 55px;" disabled>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Make An
                                            Appointment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->


        <!-- Pricing Plan Start -->
        
        <!-- Team End -->


        <!-- Search Start -->
        
        <!-- Search End -->


        <!-- Testimonial Start -->
        
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Products</h5>
                    <h1 class="display-4">Buy An Item</h1>
                </div>
                <div class="row g-5">



                    <div class="col-xl-4 col-lg-6">
                        <div class="bg-light rounded overflow-hidden">
                            <img class="img-fluid w-100" src="../layouts/assets/img/aids-1.png" alt="">
                            <div class="p-4">
                                <a class="h3 d-block mb-3" href="">RITE hearing aids</a>
                                <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                    rebum clita rebum dolor stet amet justo</p>
                            </div>
                            <div class="d-flex border-top p-4 justify-content-center">
                                
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <footer-details></footer-details>
        <!-- Footer End -->
    </div>
</template>