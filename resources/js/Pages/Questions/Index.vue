<script setup>
    import { Link } from "@inertiajs/vue3";

    defineProps({
        questions: {
            type: Array,
            required: true
        }
    })
</script>

<template>
    <h1>Questions</h1>

    <div v-for="question in questions" :key="question.id">
        <Link :href="`/questions/${question.id}`">
            {{ question.title }}
        </Link>

    </div>
</template>

<style scoped>

</style>
