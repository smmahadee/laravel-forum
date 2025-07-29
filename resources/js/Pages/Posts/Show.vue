<script setup>
import Container from '@/Components/Container.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps(["post"]);
</script>

<template>
    <AppLayout title="Posts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Posts
            </h2>
        </template>

        <Container>
            <p class="text-lg font-bold">
                {{ post.title }}
            </p>
            <p>{{ post.body }}</p>
        </Container>
    </AppLayout>
</template>
