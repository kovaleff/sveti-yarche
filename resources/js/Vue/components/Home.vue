<script setup>
import {useRoute} from "vue-router";
import Checkbox from 'primevue/checkbox';
import {ref} from "vue"

const route = useRoute()
const en = ref(true)
console.log(route)
</script>

<template>
    <Checkbox v-model="en" binary />
    <h1>Home@</h1>
</template>

<style scoped>

</style>
