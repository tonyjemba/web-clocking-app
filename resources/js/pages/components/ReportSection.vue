<script setup>
import ReportTable from './ReportTable.vue';
import moment  from 'moment';
const props = defineProps(['email', 'type'])
</script>
<template>
    <div class="vw-100  container d-flex cont ">
        <div class="d-flex flex-column user">
            <div class="mb-4 fs-5">Users</div>
           
            <div class="card" style="width: 18rem;">
                <div class="card-body cardbg cursorp txtclor">
                    <h5 class="card-title fw-bold">{{props.type}}</h5>
                    <p class="card-text">{{props.email}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item   d-flex  flex-column cursorp ">
                            <div class="fs-5">Admin</div>
                            <div class="">tony@gmail.com</div>
                    </li>
                    <li class="list-group-item   d-flex  flex-column cursorp ">
                        <div class="fs-5">Admin</div>
                        <div class="">tony@gmail.com</div>
                    </li>
                    <li class="list-group-item   d-flex  flex-column cursorp ">
                        <div class="fs-5">Admin</div>
                        <div class="">tony@gmail.com</div>
                    </li>
                </ul>
                
            </div>
        </div>
        <div class="d-flex flex-column  flex-fill">
            <div class="mb-4 fs-5">Logs for {{ moment().format("MMM, YYYY") }}</div>
            <div>
                <ReportTable />
            </div>
        </div>
    </div>
</template>
<style scoped>
.cont{
    margin-top: 4em;
}
.crdspacing {
    padding-right: 10em;
}
.user{
    margin-right: 8em;
}
.cardbg{
    background-color: #509ed8;
    border-radius: 4px 4px 0px 0px;
}
.cursorp{
    cursor: pointer;
}
li:hover{
background-color: #e8f1f9;
}
.txtclor{
    color: #ffffff;
}
</style>