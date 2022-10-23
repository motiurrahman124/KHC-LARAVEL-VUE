<script>
import HeaderDetails from "../layouts/HeaderDetails.vue";
import FooterDetails from "../layouts/FooterDetails.vue";

export default {
  components: {
    HeaderDetails,
    FooterDetails
  },
};
</script>

<template>
  <div>
    <header-details></header-details>
    
    <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h2 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h2>
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
                                            +880 1720 500 437 <br>
                                            +880 1720 500 437
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
                                            37, shamsur rahman road,<br>
                                            Shantidham 9100,<br>
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

    <!-- Team Start -->
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
    <!-- Team End -->

    <!-- Footer Start -->
    <footer-details></footer-details>
  </div>
</template>
