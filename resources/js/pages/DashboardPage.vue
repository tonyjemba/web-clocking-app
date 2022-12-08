<script setup>
import Navigation from './components/Navigation.vue';
import TimeSection from './components/TimeSection.vue';
import ReportSection from './components/ReportSection.vue'
//const props = defineProps(['registeredTimeIn'])
//console.log(props.registeredTimeIn)
const props = defineProps(['email','type'])
</script>
<template>
    <Navigation  :email="props.email" :type="props.type"/>
    
    <!-- conditionally rendering dashboard sections -->

     <ReportSection />

</template>



