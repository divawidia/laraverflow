<script setup>
    defineProps({
        question: {
            type: Object,
            required: true
        }
    })
</script>

<template>
    <h1>Questions</h1>

    <div :key="question.id">
        ID :{{ question.id }}
        TITLE: {{ question.title }}
    </div>
</template>

<style scoped>

</style>
