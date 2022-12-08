<script setup>
import moment from 'moment';
import { Inertia } from '@inertiajs/inertia';
import {ref} from 'vue'

let time = ref(moment().format('HH:mm'));
let date = ref(moment().format("ddd, d/MMM/YY"));

const registerTimeIn = () =>{
    time.value = moment().format('HH:mm')
    date.value = moment().format("ddd, d/MMM/YY");
    Inertia.post('timein', { date: moment().format("ddd, d/MMM/YYYY"), time: moment().format('HH:mm:ss')+" Hrs" });
}
const registerTimeOut = () =>{
    time.value = moment().format('HH:mm')
    date.value = moment().format("ddd, d/MMM/YY");
    Inertia.post('timeout', { time: moment().format('HH:mm:ss') + " Hrs" });

}
</script>
<template>
    <div class=" vw-100 fs-4  d-flex flex-column align-items-center justify-content-center ">
        <div class="time ">{{ time }} Hrs </div>
        <div class=" text-muted">{{date}}</div>
        <div class="pt-4">
            <button type="button" class="btn btn-primary" @click="registerTimeIn">Time In</button>
            <button type="button" class="btn btn-danger" @click="registerTimeOut">Time Out</button>
        </div>
    </div>
</template>
<style>
.time {
    font-size: 3em;
    margin-top: 2em;

}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:visited {
    color: #ffffff !important;
}
</style>