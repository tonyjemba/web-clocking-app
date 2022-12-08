import { defineStore } from "pinia";

export const useDashboardSectionsStore = defineStore("dashboardSections", {
    state: () => ({
        TimeSection: true,
        ReportSection: false,
        UsersSection: false,
    }),
    actions: {
        toTimeSection() {
            this.TimeSection = true;
            this.UsersSection = false;
            this.ReportSection = false;
        },
        toUserSection() {
            this.TimeSection = false;
            this.UsersSection = true;
            this.ReportSection = false;
        },
        toReportSection() {
            this.TimeSection = false;
            this.UsersSection = false;
            this.ReportSection = true;
        },
    },
});
