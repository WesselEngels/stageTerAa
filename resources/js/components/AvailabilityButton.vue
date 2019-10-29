<template>
    <div>
        <button class="btn btn-secondary ml-5" @click="availableClick">Beschikbaarheid</button>
    </div>
</template>

<script>
    export default {

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            availableClick() {
                axios.post('edit/available/')
                    .then(response => {
                        console.log(response.data);
                    });
            }
        }
    }
</script>
