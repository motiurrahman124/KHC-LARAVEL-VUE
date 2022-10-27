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
