<script setup>
import AddIcon from '../components/AddIcon.vue';
import UserTable from '../components/UserTable.vue';
import { useForm } from '@inertiajs/inertia-vue3';

//two way binding of form data with user input
let form = useForm({
    name: '',
    email: '',
    password: '',
    type: ''
})

//onsumit make a post request to add user 
let submit = () => {
    form.post('adduser')

}
</script>
<template>
    <div class="vw-100  container cont ">
        <div class="w-100 d-flex justify-content-between ">
            <div class="fs-3 fw-bold">Users</div>
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class=" d-flex align-items-center">
                        <AddIcon />
                        Add User
                    </div>
                </button>
            </div>
        </div>
        <div class="mt-4">
            <UserTable />
        </div>
        <!-- Add User Modal -->
        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title " id="staticBackdropLabel">Add User</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="submit" >
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input v-model="form.name" type="text" class="form-control form-control-lg" id="name"
                                    placeholder="Full Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                                <input type="email" v-model="form.email" class="form-control form-control-lg" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                                <input type="password" v-model="form.password" class="form-control form-control-lg" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <div class="d-flex flex-row ">
                                <div>
                                    <input type="radio" v-model="form.type" id="html" name="role" value="admin">
                                    <label for="html" class="lef">Admin</label>
                                </div>
                                <div class=" space">
                                    <input type="radio" id="html2" v-model="form.type" name="role" value="user" checked>
                                    <label for="html2" class="lef">User</label>
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-secondary btn-lg"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-lg" data-bs-dismiss="modal" :disabled="form.processing">
                                    <div class=" d-flex align-items-center">
                                        <AddIcon />
                                        Add User
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>
<style scoped>
.cont {
    margin-top: 4em;
}

.lef {
    margin-left: 3px;
}

.space {
    margin-left: 2em;
}

input[name="role"] {
    accent-color: black;
}
</style>