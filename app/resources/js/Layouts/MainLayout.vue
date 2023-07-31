<template>
    <Link href="/">Main Page</Link>
    <Link href="/show">Show Page</Link>
    <div>
        <p>The Page with time {{ timer }}</p>
    </div>
    <slot></slot>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
const timer = ref(0);

setInterval(() => timer.value++, 1000);
</script>
