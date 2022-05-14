<template lang="en">
  <div>
    <div class="w-9/12 mx-auto">
    
      <textarea id="message" rows="3" class=" resize-none block p-2.5 w-full md:text-lg text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:outline-indigo-600 " placeholder="Write a comment..."></textarea>
    <button class="px-4 py-2 md:text-base text-gray-100 text-sm rounded-lg my-3 bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 active:text-gray-100 focus:outline-none focus:ring focus:ring-indigo-300 ...">Comment</button>

    </div>
    
    <Comment :comments='comments'/>
 

   
  </div>
</template>
<script>
import Comment from "./CommentComponent";
import axios from 'axios'
export default {
  data() {
    return {
      comments:[],
    };
  },
  methods: {
   

  },
  props: ['comments'],
  
  components: {
    Comment,
  },
};
</script>
<style lang="en">
</style>