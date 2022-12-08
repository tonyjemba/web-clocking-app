<script setup>
import Navigation from './components/Navigation.vue';
import TimeSection from './components/TimeSection.vue';
import ReportSection from './components/ReportSection.vue';
import UserSection from './components/UserSection.vue';
import { useDashboardSectionsStore } from '../Store/dasboardSections';
//const props = defineProps(['registeredTimeIn'])
//console.log(props.registeredTimeIn)
const store = useDashboardSectionsStore();
const props = defineProps(['email','type']);
</script>
<template>
    <Navigation  :email="props.email" :type="props.type"/>
    
    <!-- conditionally rendering dashboard sections -->

     <TimeSection v-if="(store.TimeSection === true)" />
     <ReportSection v-else-if="(store.ReportSection === true)"/>
     <UserSection v-else/>


</template>



