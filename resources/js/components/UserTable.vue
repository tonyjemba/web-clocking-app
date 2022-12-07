<template>
    <div>
        <table class="table">
            <thead class="hdrcolor">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Created</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="text-decoration-underline name">Tony</td>
                    <td>tony@gmail.com</td>
                    <td>admin</td>
                    <td>Sun, 23/Oct/2016</td>
                    <td>
                        <div class="d-flex flex-row">
                            <button type="button" class="btn btn-danger bl">Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Edit</button>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>2</td>
                    <td class="text-decoration-underline name">Tony</td>
                    <td>tony@gmail.com</td>
                    <td>admin</td>
                    <td>Sun, 23/Oct/2016</td>
                    <td>
                        <div class="d-flex flex-row">
                            <button type="button" class="btn btn-danger bl">Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Edit</button>
                        </div>
                    </td>

                </tr>

            </tbody>
        </table>
        <!-- Edit User Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Edit User</h4>
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
                    <div class="modal-footer w-100  d-flex justify-content-start">
                        <div><button type="button" class="btn btn-primary">Save </button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.hdrcolor {
    background-color: #509ed8;
    color: #ffffff;
}

.name {
    color: aquamarine;
}

.bl {
    margin-right: 3em;
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