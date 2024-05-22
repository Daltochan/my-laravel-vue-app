<template>
    <button class="empty-button" @click="handleClick">
        <slot></slot>
    </button>
</template>

<script>
export default {
    methods: {
        handleClick() {
            console.log('Button clicked');
            this.$emit('click');
        }
    }
}
</script>

<style scoped>
.empty-button {
    display: block;
    width: 50px;
    height: 50px;
    background-color: #007bff;
    border: none;
    border-radius: 25px;
    margin-bottom: 10px;
}
</style>
