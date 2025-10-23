<template>
    <Layout>
        <div class="p-6 text-center">
            <h1 class="text-3xl font-bold text-green-600">{{ info }}</h1>
        </div>
    </Layout>
</template>

<script setup>
import Layout from "../Layouts/AppLayout.vue"
    defineProps({ info: String })
</script>
