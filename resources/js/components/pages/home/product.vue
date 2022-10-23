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