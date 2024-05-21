import '../css/app.css';
import './leaflet.js';

import { createApp } from 'vue';
import TaskForm from "@/Components/Tasks/TaskForm.vue";
import TaskList from "@/Components/Tasks/TaskList.vue";
import MapComponent from "@/Components/Map/MapComponent.vue";

createApp({
    components: {
        TaskForm,
        TaskList,
        MapComponent,
    },
}).mount('#app');
