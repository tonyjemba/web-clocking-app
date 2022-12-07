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
                        <div >
                            <button type="button" class="btn btn-danger bl">Delete</button>
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
                        <div >
                            <button type="button" class="btn btn-danger bl">Delete</button>
                        </div>
                    </td>

                </tr>

            </tbody>
        </table>

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