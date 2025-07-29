<script setup>
import Container from "@/Components/Container.vue";
import Pagination from "@/Components/Pagination.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/vue3";

defineProps(["posts"]);
</script>

<template>
    <AppLayout title="Posts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Posts
            </h2>
        </template>

        <Container>
            <ul class="divide-y">
                <Link v-for="post in posts.data" :key="post.id" :href="route('posts.show', post.id)">
                    <li class="py-2 text-lg font-bold">
                        {{ post.title }}
                    </li>
                </Link>
            </ul>

            <Pagination :meta="posts.meta" />
        </Container>
    </AppLayout>
</template>
