import { defineStore } from 'pinia'
export  const useMainStore = defineStore('main', {
    state: () => (
        {
            menu: {
                menuItems:[
                    {label: '1'},
                    {label: '2'},
                    {label: '3'},
                ]
            },
        }),
    getters: {
        mainMenu: (state) => state.menu.menuItems,
    },
    actions: {
        // increment() {
        //     this.count++
        // },
    },
})
