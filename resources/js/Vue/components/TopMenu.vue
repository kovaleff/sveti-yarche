<script setup>
    import Menubar from 'primevue/menubar';
    import {ref} from "vue";
    import {useMainStore} from '../store/main.js'
    const store = useMainStore()
    const menuItems = store.menu.menuItems
</script>

<template>
    <Menubar :model="menuItems" />
</template>

<style scoped>
</style>
