<template>
    <Link href="/">Main Page</Link>
    <Link href="/show">Show Page</Link>
    <slot></slot>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>
