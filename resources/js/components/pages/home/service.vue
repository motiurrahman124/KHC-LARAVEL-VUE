<script>
import HeaderDetails from "../layouts/HeaderDetails.vue";
import FooterDetails from "../layouts/FooterDetails.vue";
import LocationDetails from "../layouts/LocationDetails.vue";

export default {
  components: {
    HeaderDetails,
    FooterDetails,
    LocationDetails
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

        <location-details></location-details>

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
