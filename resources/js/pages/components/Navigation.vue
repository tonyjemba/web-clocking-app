<script setup>
import { Inertia } from '@inertiajs/inertia';
import { useDashboardSectionsStore } from '../../Stores/dasboardSections';

const store = useDashboardSectionsStore();

let logout = ()=> Inertia.post('logout')
const props = defineProps(['email', 'type'])

const report = () => {
    store.toReportSection()
    Inertia.get('report')

}
const users = () => store.toUserSection()
const time = () => store.toTimeSection()
</script>
<template>
    <nav class="navbar navbar-dark bg-primary txtcolor ">
        <div class="container ">
            <div class="d-flex flex-row justify-content-between  w-100">
                <div class="d-flex flex-column   " @click="time">
                    <div class=" fs-4 fw-bold cuspointer">Clocking</div>
                    <div>{{props.email}}({{props.type}})</div>
                </div>
                <div class=" d-flex w-25  align-items-center justify-content-between ">
                    <div class="fw-bold cuspointer" @click="report">Report</div>
                    <div class="fw-bold cuspointer" @click="users">Users</div>
                    <div class="fw-bold cuspointer" @click="logout">LogOut</div>
                </div>
            </div>
        </div>
    </nav>
</template>
<style scoped>
.txtcolor{
color: #ffffff;
}
.cuspointer{
    cursor: pointer;
}
</style>