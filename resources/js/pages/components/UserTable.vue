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
                        <div>
                            <button type="button" class="btn btn-danger bl" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Delete</button>
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
                        <div>
                            <button type="button" class="btn btn-danger bl" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Delete</button>
                        </div>
                    </td>

                </tr>

            </tbody>
        </table>
        <!-- Delete cofirmation model -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   
                    <div class="modal-body">
                    <div class="mt-4 mb-4 w-100 text-center fs-5">Please confirm you wish to delete this user?</div>
                    </div>
                    <div class="modal-footer bg">
                        <div class="wid d-flex justify-content-around">
                            <button type="button" class="wid" data-bs-dismiss="modal">OK</button>
                            <button type="button" class="ps-3 pe-3" data-bs-dismiss="modal"> Cancel </button>
                        </div>
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
.bg{
    background-color: rgb(225, 225, 225);
}
.wid{
    width: 40%;
    
}
</style>