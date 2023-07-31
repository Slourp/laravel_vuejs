<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
const { message } = defineProps({ message: String });
</script>

<template>
    <div>A little index ! {{ message }}</div>
    <Link href="/show">show page</Link>
</template>
