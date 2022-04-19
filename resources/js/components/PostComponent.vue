<template lang="en">
<section class="text-gray-600 body-font bg-white rounded mb-3">

  <div class="bg-white">
    <form class="flex items-center space-x-6 pl-6 py-1 rounded-lg bg-white ">
      <div class="shrink-0">
        <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
      </div>
      <div class="flex flex-col">
        <h1 class="title-font sm:text-base md:text-xl  lg:text-3xl mb-1 font-bold pt-3 text-gray-900">Sarah Smith </h1>
        <p class="">{{getTimeOfThePost().value +' ' +getTimeOfThePost().name }}</p>
      
      </div>
    </form>
    <div class='px-7 mt-3'>
      <p class="mb-8 leading-relaxed lg:text-xl md:text-base sm:text-sm ">{{post.description}}</p>
    </div>
    <div class="container mx-auto flex flex-col  justify-center items-center">
    
      <img v-if="post.image!==null"  class="w-full object-cover object-center rounded" alt="hero" :src="`${post.image}`">

      <video v-if="post.video!=null" class=" rounded-lg " controls>
        <source :src="`${post.video}`" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
      </video>

    </div>

     

    <div class="w-full flex  my-3  items-center justify-evenly py-1 border ">
      <div class="w-1/2 flex justify-around">
        <div class="flex items-center">
          <div @click="upVoteHandler" class='text-gray-500'>
            <!-- <i class="fas fa-up"></i><i class="fa-light fa-thumbs-up"></i>
            <i class="fa-solid fa-up"></i> -->
            <i class="fa-thumbs-up fa-2x" v-bind:class="[upVote  ?' fas text-red-500': ' fa-regular ' ]"></i>

            <!-- <i v-if='upVote' class="fa-light fa-up"></i> -->
            <!-- <ion-icon @click="upVoteHandler" v-if='upVote' class='text-red-500' name="arrow-up-circle"></ion-icon>
            <ion-icon @click="upVoteHandler" v-else name="arrow-up-circle-outline"></ion-icon> -->
          </div>
          <span class="ml-3 text-lg text-gray-900">{{post.upVotes}}</span>
          <div class='text-gray-500 ml-2'>
            <!-- <span class='cursor-pointer'>upVote</span> -->
          </div>
        </div>
        <div class="flex items-center">
          <div @click="downVoteHandler" class='text-gray-500 mt-1'>
            <i class="fa-thumbs-down fa-2x" v-bind:class="[downVote  ?' fas text-red-500': ' fa-regular ' ]"></i>
          </div>
          <span class="ml-3 text-lg text-gray-900">{{post.downVotes}}</span>
          <div class='text-gray-500'>
            <!-- <span class=''>downVote</span> -->
          </div>
        </div>
      </div>
      <div class="w-1/2 flex justify-center">
        <div class="flex items-center">
          <div @click="showCommentHandler" class='text-gray-500 mt-1'>
            <i class="fa-message fa-2x" v-bind:class="[commentTap  ?' fas': ' fa-regular ' ]"></i>
          </div>
          <span class="ml-3 text-lg text-gray-900">{{post.downVotes}}</span>
          <div class='text-gray-500'>
            <!-- <span class='mb-1'>comment</span> -->
          </div>
        </div>
      </div>

    </div>
  </div>
  <div v-if='commentTap'>
    <Comments :commentsRef='post.id' />
  </div>
</section>
</template>

<script>
import Vue from 'vue'
import Comments from './CommentsComponent.vue'
import axios from 'axios'

export default {
  data() {
    return {
      upVote: false,
      downVote: false,
      commentTap: false,
      posts: [],
    }
  },

 

  methods: {
    showCommentHandler() {
      this.commentTap = !this.commentTap
    },
    upVoteHandler() {
      this.upVote = !this.upVote
      this.downVote = false
    },
    downVoteHandler() {
      this.downVote = !this.downVote
      this.upVote = false
    },
    
    
    getTimeOfThePost(){
      const today= new Date();
      const postDate = new Date(this.post.created_at);
      const year= today.getFullYear()- postDate.getFullYear();
      const month = today.getMonth()-postDate.getMonth();
      const day = today.getDay()- postDate.getDay();
      const hours= today.getHours() - postDate.getHours();
      const minutes= today.getMinutes() - postDate.getMinutes();
      const seconds= today.getSeconds() - postDate.getSeconds();
      // console.log(this.post.created_at);
      // console.log('year'+ year);
      // console.log('month'+ month);
      // console.log('day'+ day);
      // console.log('hours'+ hours);
      // console.log('minutes'+ minutes);
      // console.log('seconds'+ seconds);

      if(year>0){
        return {name:'year ago',
          value:year
        };
      }
      else if(month>0){
        return {name:'month ago',
          value:month
        }
      }else if(day>0){
        return {name:'day ago',
          value:day
        };
      }
      else if(hours>0){
        return {name:'h ago',
          value:hours
        };
      }
      else if(minutes>0){
        return {name:'min ago',
          value:minutes
        };
      }
      else {
        return {name:'sec ago',
          value:seconds
        };
      }

      // console.log(year); 
      // return this.post.created_at

    }


  
  },
  props: ['post'],
  // data : function(){
  //   return {
  //     posts:this.post
  //   }
  // }
 

  components: {
    Comments

  }

};
</script>

<style lang="en">
</style>
