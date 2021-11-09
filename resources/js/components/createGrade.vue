<template>
    
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post" style = "border-radius:20px">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Agregar nueva sección</h2>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Grado" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                  <fieldset>
                    <input name="section" type="number" id="section"  placeholder="Sección" min="1">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">Enviar</button>
                    </fieldset>
                  </div>
              </form>
            </div>
          </div>
        </div>

</template>

<script>
    export default {
        name: "createGrade"
    }
</script>
