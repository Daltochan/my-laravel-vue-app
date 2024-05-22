<template>
    <div id="app">
        <l-map
            @click="handleMapClick"
            :min-zoom="minZoom"
            :zoom="zoom"
            :center="center"
            :max-bounds="bounds"
            :max-bounds-viscosity="maxBoundsViscosity"
            :zoom-control="false">
            <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
            <l-control-zoom position="topright"></l-control-zoom>
        </l-map>
    </div>
</template>

<script>
import {LMap, LTileLayer, LMarker, LControlZoom} from '@vue-leaflet/vue-leaflet';
import 'leaflet/dist/leaflet.css';

export default {
    name: 'MapComponent',
    components: {
        LMap,
        LTileLayer,
        LControlZoom,
        LMarker
    },
    methods: {
        handleMapClick(event) {
            const lat = event.latlng.lat;
            const lng = event.latlng.lng;
            console.log({lat}, {lng});
        },
    },
    data() {
        return {
            zoom: 19,
            minZoom: 5,
            center: [52.40825733102544, 16.9335150718689],
            url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
            bounds: [
                [-90, -180], // Southwest coordinates (lat, lng)
                [90, 180]   // Northeast coordinates (lat, lng)
            ],
            maxBoundsViscosity: 1.0
        };
    }
};
</script>

<style>

</style>
