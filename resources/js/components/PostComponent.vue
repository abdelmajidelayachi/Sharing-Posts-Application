<template lang="en">
  <section class="text-gray-600 body-font bg-white rounded mb-3">
    <div class = "bg-white"
    <form class="flex items-center space-x-6 pl-6 py-2 rounded-lg bg-white ">
        <div class="shrink-0">
          <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
        </div> 
        <h1 class="title-font sm:text-base md:text-xl  lg:text-3xl mb-4 font-bold pt-3 text-gray-900">Knausgaard typewriter </h1>
     
    </form>
    <div class='px-7 mt-3'>
      <p class="mb-8 leading-relaxed lg:text-xl md:text-base sm:text-sm ">Kickstarter biodiesel roof party wayfarers cold-pressed. Palo santo live-edge tumeric scenester copper mug flexitarian. Prism vice offal plaid everyday carry. Gluten-free chia VHS squid listicle artisan.</p>  
    </div>
     
  <div class="container mx-auto flex flex-col   justify-center items-center">
      <img class="w-full object-cover object-center rounded" alt="hero" src="https://images.unsplash.com/photo-1649842289379-bcceaddc4d62?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
      
     
    </div>
    <div class="w-full flex  my-3  items-center justify-evenly py-1 border ">
       <div class="w-1/2 flex justify-around" >
        <div class="flex items-center">
          <div  @click="upVoteHandler" class='text-gray-500' >
            <!-- <i class="fas fa-up"></i><i class="fa-light fa-thumbs-up"></i>
            <i class="fa-solid fa-up"></i> -->
            <i class="fa-thumbs-up fa-2x" v-bind:class="[upVote  ?' fas text-red-500': ' fa-regular ' ]"
                       ></i>
            
            <!-- <i v-if='upVote' class="fa-light fa-up"></i> -->
            <!-- <ion-icon @click="upVoteHandler" v-if='upVote' class='text-red-500' name="arrow-up-circle"></ion-icon>
            <ion-icon @click="upVoteHandler" v-else name="arrow-up-circle-outline"></ion-icon> -->
            </div>
            <div class='text-gray-500 ml-2'>
            <!-- <span class='cursor-pointer'>upVote</span> -->
            </div>
        </div>
        <div  class="flex items-center">
          <div @click="downVoteHandler" class='text-gray-500 mt-1'>
            <i class="fa-thumbs-down fa-2x" v-bind:class="[downVote  ?' fas text-red-500': ' fa-regular ' ]"
                       ></i>
            </div>
            <div class='text-gray-500'>
            <!-- <span class=''>downVote</span> -->
            </div>
        </div>
        </div>
         <div class="w-1/2 flex justify-center" >
        <div class="flex items-center">
          <div  @click="showCommentHandler" class='text-gray-500 mt-1'>
             <i class="fa-message fa-2x" v-bind:class="[commentTap  ?' fas': ' fa-regular ' ]"
                       ></i>
            </div>
            <div class='text-gray-500'>
            <!-- <span class='mb-1'>comment</span> -->
            </div>
        </div>
        </div>

  </div>
  </div>
  <div v-if='commentTap'>
  <Comments/>
  </div>
</section>
</template>
<script>
import Comments from './CommentsComponent.vue'
export default {
  data() {
    return {
      upVote : false,
      downVote : false,
      commentTap : false,
    }
  },
  methods: {
    showCommentHandler(){
      this.commentTap = !this.commentTap
    },
    upVoteHandler(){
      this.upVote = !this.upVote
      this.downVote = false
    },
    downVoteHandler(){
      this.downVote = !this.downVote
      this.upVote = false
    }
  
    
  },
  components: {
    Comments
    
  }


};
</script>
<style lang="en">
</style>