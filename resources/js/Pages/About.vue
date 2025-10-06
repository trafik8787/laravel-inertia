<template>
    <div class="p-6 text-center">
        <h1 class="text-3xl font-bold text-green-600">{{ info }}</h1>
    </div>
</template>

<script setup>
    defineProps({ info: String })
</script>
