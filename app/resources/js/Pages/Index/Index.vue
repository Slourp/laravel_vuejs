<template>
    <h1>Index Page !</h1>
    <p>{{ message }}</p>
</template>

<script setup lang="ts">
const { message } = defineProps({ message: String });
</script>

<script lang="ts">
import MainLayout from "@/Layouts/MainLayout.vue";
export default {
    layout: MainLayout,
};
</script>
