<template>
    <div class="vw-100   container  cont ">
       <div class="w-50">
        <div>
            <h3>Edit User</h3>
        </div>
        <div class="mt-4">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-flex flex-row ">
                    <div>
                        <input type="radio" id="html" name="role" value="HTML">
                        <label for="html" class="lef">Admin</label>
                    </div>
                    <div class=" space">
                        <input type="radio" id="html" name="role" value="HTML">
                        <label for="html" class="lef">User</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Save</button>
            </form>
        </div>
       </div>
    </div>
</template>
<style scoped>
.cont {
    margin-top: 4em;
}
</style>