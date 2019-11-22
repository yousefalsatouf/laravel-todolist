// IndexComponent.vue

<template>
    <div>
        <h1><b>Posts</b></h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Post</router-link>
            </div>
        </div><br />
        <div class="d-flex flex-wrap">
            <div class="card text-white bg-primary mb-3 posts" style="max-width: 18rem;" v-for="post in posts" :key="post.id">
                <h2 class="card-header"><b>List Of Posts : </b></h2>
                <div class="card-body text-center">
                    <h4 class="card-title"><b>{{ post.title }}</b></h4>
                    <p class="card-text">{{ post.body }}</p>
                </div>
                <div class="btn">
                    <router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-secondary">Edit</router-link>
                    <button class="btn btn-danger" @click.prevent="deletePost(post.id)">Delete</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            let uri = 'https://todolist-laravel-vuejs.herokuapp.com/api/posts';
            this.axios.get(uri).then(response => {
                this.posts = response.data.data;
            });
        },
        methods: {
            deletePost(id)
            {
                let uri = `https://todolist-laravel-vuejs.herokuapp.com/api/post/delete/${id}`;
                this.axios.delete(uri).then(response => {
                    this.posts.splice(this.posts.indexOf(id), 1);
                });
            }
        }
    }
</script>
