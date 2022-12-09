<script setup>
import {useUserStore} from '../../Stores/userStore';
import moment from 'moment';
import { Inertia } from '@inertiajs/inertia';

//accessing user data from pinia store
const store = useUserStore();

const tableData = store.userData
const cleanData = JSON.parse(tableData)


const deleteUser = (id) =>{

   Inertia.post('deleteUser',{data:{id:id}})
}
</script>
<template>
    <div>
        <table class="table">
            <thead class="hdrcolor">
                <tr >
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Created</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in cleanData">
                    <td>{{item.id}}</td>
                    <td class="text-decoration-underline name cus">{{item.name}}</td>
                    <td>{{item.email}}</td>
                    <td>{{item.type}}</td>
                    <td>{{ moment(item.created_at).format('DD/MMM/YYYY') }}</td>
                    <td>
                        <div>
                            <button type="button" class="btn btn-danger bl" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" >Delete</button>
                        </div>
                    </td>
                            <!-- Delete cofirmation model -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                            
                                        <div class="modal-body">
                                            <div class="mt-4 mb-4 w-100 text-center fs-5">Please confirm you wish to delete this user?</div>
                                        </div>
                                        <div class="modal-footer bg">
                                            <div class="wid d-flex justify-content-around">
                                                <button type="button" class="wid" data-bs-dismiss="modal" @click="deleteUser(item.id)">OK</button>
                                                <button type="button" class="ps-3 pe-3" data-bs-dismiss="modal"> Cancel </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
.cus{cursor: pointer;}
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