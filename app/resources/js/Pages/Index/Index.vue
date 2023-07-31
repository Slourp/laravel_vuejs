<script setup lang="ts">
import MainLayout from "@/Layouts/MainLayout.vue";
import { Link } from "@inertiajs/vue3";
const { message } = defineProps({ message: String });
</script>

<template>
    <MainLayout>
        <h1>Index Page !</h1>
        <p>{{ message }}</p>
    </MainLayout>
</template>
