<template lang="en">
<div class="bg-gray-200 w-full h-full">
    <div class="container px-5 mx-auto">
      <div class="lg:w-1/2 md:w-4/5 sm:w-full mx-auto h-full bg-blue-100">
    <NavBar/>
    <Account />
    <AddPostComponent />
    <Posts />
  </div>
  </div>
  </div>
</template>
<script>
import NavBar from "../components/NavComponent.vue";
import Account from "../components/AccountComponent.vue";
import AddPostComponent from "../components/AddPostComponent.vue";
import Posts from "../components/PostsComponent.vue";
export default {
    data() {
        return {};
    },
    methods: {},
    components: {
        NavBar,
        Account,
        AddPostComponent,
        Posts,
    },
};
</script>
<style lang="en"></style>
