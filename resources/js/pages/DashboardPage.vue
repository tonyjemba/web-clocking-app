<script setup>
import Navigation from './components/Navigation.vue';
import TimeSection from './components/TimeSection.vue';
import ReportSection from './components/ReportSection.vue';
import UserSection from './components/UserSection.vue';
import { useDashboardSectionsStore } from '../Store/dasboardSections';
//const props = defineProps(['registeredTimeIn'])
//console.log(props.registeredTimeIn)

//accessing store for conditionally rendering dashboard sections
const store = useDashboardSectionsStore();

//props with email and type of autenticated user
const props = defineProps(['email','type']);
</script>
<template>
    <Navigation  :email="props.email" :type="props.type"/>
    
    <!-- conditionally rendering dashboard sections using Pinia -->

     <TimeSection v-if="(store.TimeSection === true)" />
     <ReportSection v-else-if="(store.ReportSection === true)"/>
     <UserSection v-else/>


</template>



