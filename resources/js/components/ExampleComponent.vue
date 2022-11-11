<template>
    <div>
        <p>
            <input type="text" v-model="name">
            <input type="checkbox" v-model="checkbox">
        </p>
        Bonjour {{name}} ! 
        <p v-if="checkbox"> Vue is awesome ! </p>
        <p v-else> Else statement</p>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                'name' : 'Louis',
                'checkbox': true,
            }
        }
    }
</script>
