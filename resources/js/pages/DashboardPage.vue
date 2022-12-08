<script setup>
import Navigation from './components/Navigation.vue';
import TimeSection from './components/TimeSection.vue';
import ReportSection from './components/ReportSection.vue';
import UserSection from './components/UserSection.vue';
import { useDashboardSectionsStore } from '../Stores/dasboardSections';
//const props = defineProps(['registeredTimeIn'])
//console.log(props.registeredTimeIn)

//accessing store for conditionally rendering dashboard sections
const store = useDashboardSectionsStore();

//props with email and type of autenticated user
const props = defineProps(['email', 'type', 'reportData', 'otherusers']);

//making first letter upper case
const capitalizeFirstLetter = (string) => {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
console.log(props.reportData)
</script>
<template>
    <Navigation :email="props.email" :type="props.type" />

    <!-- conditionally rendering dashboard sections using Pinia -->

    <TimeSection v-if="(store.TimeSection === true)" />
    <ReportSection
     v-else-if="(store.ReportSection === true)"
     :email="props.email"
     :type="capitalizeFirstLetter(props.type)" 
     />
    <UserSection v-else />


</template>



