<template>
    <Layout>
        <div class="p-8 text-center">
            <h1 class="text-3xl font-bold mb-4">Hello, {{ name }} 👋</h1>
            <p>Welcome to {{ framework }}</p>
            <div class="mt-4">
                <Link href="/about" class="text-sky-500">Go to About</Link>
                <a href="#" class="btn-primary">Get started</a>
            </div>
            <div class="flex gap-1">
                <div class="w-1/3 bg-blue-200 p-4">1/3</div>
                <div class="w-1/3 bg-blue-400 p-4">1/3</div>
                <div class="w-1/3 bg-blue-600 p-4">1/3</div>
            </div>
        </div>
    </Layout>
</template>


<script setup>
import { Link } from "@inertiajs/vue3";
import Layout from "../Layouts/AppLayout.vue"

defineProps({
    name: String,
    framework: String,
})
</script>

