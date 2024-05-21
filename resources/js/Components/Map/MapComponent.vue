<template>
    <div id="app">
        <l-map @click="handleMapClick" :minZoom="minZoom" :zoom="zoom" :center="center" >
            <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
        </l-map>
    </div>
</template>

<script>
import { LMap, LTileLayer, LMarker } from '@vue-leaflet/vue-leaflet';
import 'leaflet/dist/leaflet.css';

export default {
    name: 'MapComponent',
    components: {
        LMap,
        LTileLayer,
        LMarker
    },
    methods: {
        handleMapClick(event) {
            const lat = event.latlng.lat;
            const lng = event.latlng.lng;
            console.log({lat},{lng});
        },
    },
    data() {
        return {
            zoom: 19,
            minZoom: 5,
            center: [52.40825733102544, 16.9335150718689],
            url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            attribution: '© OpenStreetMap contributors'
        };
    }
};
</script>

<style>

</style>
