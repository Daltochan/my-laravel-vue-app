<template>
    <div class="form-container">
        <ReusableButton @click="hideForm"></ReusableButton>
        <form class="dummy-form" v-show="isFormVisible">
            <label for="taskName">Task Name:</label>
            <input type="text" id="taskName" name="taskName">

            <label for="taskDescription">Task Description:</label>
            <input type="text" id="taskDescription" name="taskDescription">

            <input type="submit" value="Submit">
        </form>
    </div>
</template>

<script>
import ReusableButton from './ReusableButton.vue';

export default {
    components: {
        ReusableButton
    },
    data() {
        return {
            isFormVisible: true
        }
    },
    methods: {
        hideForm() {
            this.isFormVisible = false;
        }
    }
}
</script>

<style scoped>
.form-container {
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
    padding: 20px 30px 20px 20px;
    border-radius: 5px;
    width: 20%;
    height: 90%;
    box-sizing: border-box;
}

.dummy-form label {
    display: block;
    margin-bottom: 5px;
}

.dummy-form input[type="text"] {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

.dummy-form input[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>
