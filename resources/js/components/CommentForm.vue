<template>
    <div>
        <div class="border-b pb-4 mb-8">
            <div class="border rounded p-3 mb-4" v-for="comment in comments">
                {{ comment.body }}
            </div>
        </div>

        <form class="flex flex-col" @submit.prevent="submitComment">
            <textarea class="border rounded p-3 mb-3" v-model="comment"></textarea>
            <button type="submit" class="border rounded py-2"> Envoyer</button>
        </form>
    </div>

</template>

<script>
    export default {
        props: ['dataComments'],

        methods: {
            submitComment() {
                axios.post('/comments', {
                    content: this.comment
                }).then((result) => {
                    this.comments.push({
                        body: this.comment
                    })
                    this.comment = ""
                })
            }
        },

        data() {
            return {
                comment: '',
                comments: this.dataComments,
            }
        },

    }
</script>