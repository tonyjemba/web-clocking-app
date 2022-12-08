<script setup>
import { useReportStore } from '../../Stores/reportStore';

//we get report data from store and display it in the table
const store = useReportStore();
const tableData = JSON.parse(store.reportData).reverse();
</script>
<template>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Time In</th>
                <th scope="col">Time Out</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in tableData">
                <td>{{ item.date }}</td>
                <td>{{ item.timein }}</td>
                <td>{{ item.timeout }}</td>
            </tr>
        </tbody>
    </table>
</template>