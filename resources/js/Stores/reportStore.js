import { defineStore } from "pinia";

export const useReportStore = defineStore("reportStore", {
    state: () => ({
        reportData: []
    }),
    actions: {
        loadData(data) {
            this.reportData = data;
        }

    },
});
