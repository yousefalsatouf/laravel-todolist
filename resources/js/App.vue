<template>
    <div>
        <div class="cont-navbar col-lg-12">
            <nav class="navbar navbar-expand-sm bg-light navbar-dark nav-between">
                <ul class="navbar-nav nav text-info col-lg-6 d-flex">
                    <li class="nav-item">
                        <router-link to="/" class="nav-link">
                            <img class="logo" src="/logo/logo-todolist.jpg" alt="todolist-logo">
                        </router-link>
                    </li>
                    <li class="nav-item ps-cr">
                        <router-link to="/posts" class="nav-link text-info">Posts</router-link>
                    </li>
                    <li class="nav-item ps-cr">
                        <router-link to="/create" class="nav-link text-info">Create Post</router-link>
                    </li>
                </ul>
                <ul class="navbar-nav nav text-info col-lg-6 d-flex">
                    <li class="nav-item">
                        <router-link :to="{ name: 'login' }" class="nav-link text-info">Login</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'register' }" class="nav-link text-info">Register</router-link>
                    </li>
                    <li v-if="$auth.check()" class="pull-right">
                        <a class="text-info" href="#" @click.prevent="$auth.logout()">Logout</a>
                    </li>
                </ul>
            </nav><br />
        </div>
        <div class="container">
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
        opacity: 0
    }
</style>

<script>

    export default{
    }
</script>
