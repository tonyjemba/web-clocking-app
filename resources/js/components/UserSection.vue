<script setup>
import AddIcon from '../components/AddIcon.vue';
import UserTable from '../components/UserTable.vue';
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
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control form-control-lg" id="name"
                                placeholder="Full Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="d-flex flex-row ">
                            <div>
                                <input type="radio" id="html" name="role" value="HTML">
                                <label for="html" class="lef">Admin</label>
                            </div>
                            <div class=" space">
                                <input type="radio" id="html" name="role" value="HTML" checked>
                                <label for="html" class="lef">User</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-lg">
                            <div class=" d-flex align-items-center">
                                <AddIcon />
                                Add User
                            </div>
                        </button>

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