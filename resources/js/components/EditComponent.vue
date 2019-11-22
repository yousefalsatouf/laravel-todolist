// EditComponent.vue

<template>
    <div>
        <h1>Edit Post</h1>
        <form @submit.prevent="updatePost">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-primary"><b>Post Title:</b></label>
                        <input type="text" class="form-control" v-model="post.title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-primary"><b>Post Body:</b></label>
                        <textarea class="form-control" v-model="post.body" rows="5"></textarea>
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                post: {}
            }
        },
        created() {
            let uri = `https://todolist-laravel-vuejs.herokuapp.com/api/post/edit/${this.$route.params.id}`;
            this.axios.get(uri).then((response) => {
                this.post = response.data;
            });
        },
        methods: {
            updatePost() {
                let uri = `https://todolist-laravel-vuejs.herokuapp.com/api/post/update/${this.$route.params.id}`;
                this.axios.post(uri, this.post).then((response) => {
                    this.$router.push({name: 'posts'});
                });
            }
        }
    }
</script>
