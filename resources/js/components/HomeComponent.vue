// HomeComponent.vue

<template>
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active size">
                                <div class="carousel-caption d-none d-md-block choice">
                                    <h5 class="title">Welcome TO Do List </h5>
                                    <p class="content">Here is the home page, you can do the next ...</p>
                                </div>
                            </div>
                            <div class="carousel-item size">
                                <div class="carousel-caption d-none d-md-block choice">
                                    <h5 class="title">Add posts</h5>
                                    <p class="content">you can add posts as you want ...</p>
                                </div>
                            </div>
                            <div class="carousel-item size">
                                <div class="carousel-caption d-none d-md-block choice">
                                    <h5 class="title">Update posts </h5>
                                    <p class="content">You can update your post ...</p>
                                </div>
                            </div>
                            <div class="carousel-item size">
                                <div class="carousel-caption d-none d-md-block choice">
                                    <h5 class="title">Delete post  </h5>
                                    <p class="content">you can delete your post</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
