<script setup>
import { computed } from "vue";


const props = defineProps({
    user: {
        type: Object,
        required: true
    },
    postAt: {
        type: Object,
        required: true
    },
    isAnswer: {
        type: Boolean,
        default: false
    }
})

// giving posted date value, if isAnswer property is set to true then it return Answer at 12-02-2002
const postAtString = computed(() => {
    const prefix = props.isAnswer ? "Answer at" : "Asked at"
    return `${prefix} ${props.postAt.formatted}`
})

// giving class name whether owner or author, if isAnswer property is set to false then the class return owner
const classes = computed(() => {
    return {
        'owner': !props.isAnswer,
        'author': true
    }
})

</script>

<template>
    <div :class="classes">
        <div class="author-info">
            <div class="text-muted mb-1">{{ postAtString }}</div>
            <a href="#" class="avatar-md">
                <div class="d-flex align-items-center justify-content-start">
                    <img :src="user.avatar_url" class="me-2" :alt="user.name">
                    <span>{{ user.name }}</span>
                </div>
            </a>
        </div>
    </div>
</template>

<style scoped>

</style>
