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
          <div class="row" style="padding-top:50px">
            <div class="col-lg-12">
              
                <div class="row" style="min-height: 250px; border-radius: 20px;width: 65%;border: 10px solid white; background-color: white;position: relative;left: 650px;">
                  <div class="col-lg-12" method="post" >
                    <h2>Inicio de sesion</h2>
                    </div>
                  <div class="col-lg-12">
                    <fieldset>
                    <label>Usuario:</label>
                        <input type="text">
                        </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                     <label>Contraseña:</label>
                        <input type="password">
                        </fieldset>
                      </div>
                 <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" style="border-radius:20px;" id="form-submit" class="btn btn-primary" >Registrar</button>
                    </fieldset>
                  </div>
                </div>
             
            </div>
          </div>
        </div>
              </div>
            </div>
          </div>
      </div>
  </section>  
  
</template>

<script>
export default {
    name: 'index'
}
</script>

