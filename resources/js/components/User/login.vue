<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Iniciar Sesion

                </div>
                    <div style="min-height: 250px; border-radius: 20px;width: 100%;border: 40px solid white; background-color: white;margin-top:20px;">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right ">Correo electronico:</label>

                            <div class="col-md-6">
                                <input id="email" v-model="users.email" type="email" value="old('email')" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                            </div>

                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Constraseña:</label>

                            <div class="col-md-6">
                                <input id="password" v-model="users.password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">Recordar contraseña</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="b  tn btn-primary" @click="post">
                                    Iniciar Sesion
                                </button>
                            </div>
                    </diV>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Swal from 'sweetalert2'
export default {
    name:'login',
    components: {Swal},

    data(){
        return{
            users:{

                email: '',
                password: '',

            }
        }
    },

    methods:{
        post(){
            axios.post('/login', this.users).then(response=>{
                Swal.fire({
                    icon: 'success',
                    title: 'Exito',
                    text: 'Se ha iniciado sesión con éxito',
                }).then((result) =>{
                    if (result.isConfirmed){
                        window.location.reload()
                    }
                });
            }).catch(error=>{
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se ha encontrado un error'
                })
            })
        }
    }

}
</script>
