import { defineStore } from "pinia";

export const useUserStore = defineStore("userStore", {
    state: () => ({
        userData: [],
    }),
    actions: {
        loadData(data) {
            this.reportData = data;
        },
    },
});
