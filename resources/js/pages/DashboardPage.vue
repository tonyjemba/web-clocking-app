<script setup>
import Navigation from './components/Navigation.vue';
import TimeSection from './components/TimeSection.vue';
import ReportSection from './components/ReportSection.vue';
import UserSection from './components/UserSection.vue';
import { useDashboardSectionsStore } from '../Stores/dasboardSections';
import {useReportStore} from '../Stores/reportStore';
import { useUserStore } from '../Stores/userStore';


//const props = defineProps(['registeredTimeIn'])
//console.log(props.registeredTimeIn)

//accessing store for conditionally rendering dashboard sections
const store = useDashboardSectionsStore();

//report store
const store2 = useReportStore();

//userStore
const store3 = useUserStore();

//props with email and type of autenticated user
const props = defineProps(['email', 'type', 'reportData', 'otherusers']);

//making first letter upper case
const capitalizeFirstLetter = (string) => {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

//loading report data to pinia store
store2.loadData(props.reportData);

//loading user data to pinia store
store3.$patch((state)=> state.userData = props.otherusers);
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



