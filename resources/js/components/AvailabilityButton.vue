<template>
    <div>
        <button type="button" v-bind:class="classObject" @click="availableClick" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {

        props: ['available'],

        mounted() {
            console.log('Component mounted.')
        },

        
        data: function() {
            return {
                status: this.available,
            }

            
        },

        methods: {
            availableClick() {
                axios.post('edit/available/')
                    .then(response => {
                        this.status = !this.status;
                        console.log(response.data);
                        console.log(this.status);
                        
                    });
            }
        },


        computed: {
            buttonText() {
                return (this.status == 1) ? 'Beschikbaar' : 'Niet Beschikbaar';
        },

        classObject() {
            return (this.status == 1) ? 'btn btn-success' : 'btn btn-danger';
        }
    }
    }
</script>
