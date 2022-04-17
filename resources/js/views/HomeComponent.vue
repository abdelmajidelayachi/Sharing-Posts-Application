<template>
  <div class="bg-gray-200 w-full h-full">
    <div class="container px-5 mx-auto">
      <div class="lg:w-1/2 md:w-4/5 sm:w-full mx-auto h-full bg-blue-100">
        <NavComponent />
        <AddPostComponent />
        <Posts />
      </div>
    </div>
  </div>
</template>

<script>
import AddPostComponent from "../components/AddPostComponent.vue";
import NavComponent from "../components/NavComponent.vue";
import Posts from "../components/PostsComponent.vue";
export default {
  components: { NavComponent, AddPostComponent, Posts},
  mounted() {
    console.log("Component mounted.");
  },
};
</script>

<style>
</style>
