<script>
 import HeaderDetails from "../layouts/HeaderDetails.vue";
 import FooterDetails from "../layouts/FooterDetails.vue";
//  import { ref } from 'vue';

                    // let form = ref({
                    //     'name': "",
                    //     'phone_number': "",
                    //     'email': "",
                    //     'date': "",
                    //     'doctor': "Dr. S. K. Ballav",
                    //     'message': ""
                    // })
                    // const createData = async () =>{
                    //     await axios.post('/appoinment_store', form.value).then(
                    //     response => {
                    //         console.log(response);
                    //     }
                    // ).catch(error => {
                    //     console.log('error');
                    // })
        
                    // }
 
 // const appoinment = reactive({
        //                 'name': "",
        //                 'phone_number': "",
        //                 'email': "",
        //                 'date': "",
        //                 'doctor': "Dr. S. K. Ballav",
        //                 'message': ""
        // });

        // const createAppoinment = () => {
        //     axios.post('appoinment_store', appoinment).then(
        //                 response => {
        //                     console.log(response);
        //                 }
        //             ).catch(error => {
        //                 console.log('error');
        //             })
        // };
 
        export default {
            components: {
                HeaderDetails,
                FooterDetails
            },
            data() {
                return {
                    appoinment: {
                        'name': "",
                        'phone_number': "",
                        'email': "",
                        'date': "",
                        'doctor': "Dr. S. K. Ballav",
                        'message': ""
                    }
                }
            },

            methods: {
                createData() {
                    axios.post('/appoinment_store', this.appoinment).then(
                        response => {
                            console.log(response);
                        }
                    ).catch(error => {
                        console.log('error');
                    })
                }
            },
        };
        
</script>

<template>
  <div>
    <header-details></header-details>

    <!-- Appointment Start -->
    <div class="container-fluid bg-white my-5 py-5">
      <div class="container py-5">
        <div class="row gx-5">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="mb-4">
              <h3
                class="d-inline-block text-primary text-uppercase border-bottom border-5"
              >
                Appointment
              </h3>
              <h1 class="display-4">Make An Appointment For Your Ear Treatment</h1>
            </div>
            <p class="text-gray mb-5">
              Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum.
              Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt
              voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo
              invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et.
              Takimata takimata sanctus sed.
            </p>
            <router-link to="/" class="btn btn-dark rounded-pill py-3 px-5 me-3"
              >Find Doctor</router-link
            >
          </div>
          <div class="col-lg-6">
            <div class="bg-primary text-center rounded p-5">
              <h1 class="mb-4">Book An Appointment</h1>
              <form @submit.prevent="createData()">
                <div class="row g-3">
                  <div class="col-12 col-sm-12">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      v-model="appoinment.name"
                      placeholder="Your Name"
                      style="height: 55px"
                    />
                  </div>

                  <div class="col-12 col-sm-6">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      v-model="appoinment.phone_number"
                      placeholder="Phone Number"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 col-sm-6">
                    <input
                      type="email"
                      class="form-control bg-light border-0"
                      v-model="appoinment.email"
                      placeholder="Your Email"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 col-sm-6">
                    <input
                      type="date"
                      class="form-control bg-light border-0"
                      v-model="appoinment.date"
                      placeholder=""
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 col-sm-6">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      v-model="appoinment.doctor"
                      placeholder="Dr. S. K. Ballav"
                      style="height: 55px"
                      disabled
                    />
                  </div>
                  <div class="col-12 col-sm-12">
                    <textarea v-model="appoinment.message" class="form-control bg-light border-0" row="5" placeholder="Your Message (optional)"></textarea>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-dark w-100 py-3" type="submit">
                      Make An Appointment
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Appointment End -->

    <!-- Footer Start -->
    <footer-details></footer-details>
    <!-- Footer End -->
  </div>
</template>
