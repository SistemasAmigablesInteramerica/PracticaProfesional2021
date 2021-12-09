<template>
  <section class="section main-banner" id="top" data-section="section1" >
        <video autoplay muted loop id="bg-video">
          <source src="/images/videoinicio.mp4" type="video/mp4">
        </video>
      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
                  <!-- aqui va el mensaje -->
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="row" style="padding-top:50px;">
              <login></login>
          </div>
        </div>
              </div>
            </div>
          </div>
      </div>
  </section>

</template>

<script>

import login from "./User/login"
export default {
    name: 'index',
    components: {login}
}
</script>

