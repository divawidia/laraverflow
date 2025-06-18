<script setup>
import {onMounted, reactive} from "vue";
import * as bootstrap from 'bootstrap';
import Navbar from "../Components/Navbar.vue";
import Toast from "../Components/Toast.vue";

const state = reactive({
    toastRef: null
})

onMounted(() => {
    state.toastRef = new bootstrap.Toast('#app-toast', {
        delay: 3000,
    })
})

const showToast = () => state.toastRef.show()
</script>

<template>
    <Navbar />
    <button class="btn btn-success" @click="showToast()">Show Toast</button>
    <main class="py-4">
        <slot/>
    </main>
    <Toast id="app-toast"/>
</template>

<style scoped>

</style>
