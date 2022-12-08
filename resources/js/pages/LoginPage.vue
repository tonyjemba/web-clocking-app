<script setup>
import GoogleIcon from '../components/GoogleIcon.vue';
import FacebookIcon from '../components/FacebookIcon.vue';
import { useForm } from '@inertiajs/inertia-vue3';

//two way binding of form data with user input
let form = useForm({
    email: '',
    password: ''
})

//on form submit a post request is made to login the user via the LoginController login function
let submit = () => {
    form.post('login_user');
}
</script>
<template>
    <div class=" bg-light bg-gradient vh-100 vw-100">
        <div class="container d-flex align-items-center justify-content-center  vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class=" cardcolor text-white">
                    <div class=" p-4 text-center">


                        <h2 class="fw-bold mb-4  txtcolor pt-2">Sign In</h2>

                        <form @submit.prevent="submit" class="pt-4 pb-4">
                            <div class="form-outline form-white mb-4">
                                <input v-model="form.email" type="email" class="form-control form-control-lg"
                                    placeholder="Email" />
                                <div v-if="form.errors.email" v-text="form.errors.email" class="danger"></div>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input v-model="form.password" type="password" id="typePasswordX"
                                    class="form-control form-control-lg" placeholder="Password" />
                                <div v-if="form.errors.password" v-text="form.errors.password"></div>
                            </div>

                            <div class=" w-100 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-lg " :disabled="form.processing">Login
                                    to Clocking</button>
                            </div>
                        </form>


                        <div class="">
                            <hr class="hr-text " data-content="OR SIGN IN WITH" />
                        </div>
                        <div class="d-flex justify-content-center text-center mt-4 pt-1 ">

                            <div class="w-25  d-flex justify-content-around pb-2">
                                <GoogleIcon class="cursorp" />
                                <FacebookIcon class="cursorp" />
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<style scoped>
.cardcolor {
    background-color: #ecf0f1;
    border-radius: 8px;
}

.txtcolor {
    color: #2c3e50;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:visited {
    color: #ffffff !important;
}

.cursorp {
    cursor: pointer;
}

.danger {
    color: red;
}
</style>