<template lang="">
  <div>
    <div v-for="(post, index) in posts" :key="index">
    
      <Post :post='post'/>
    </div>
    
    
  </div>
</template>
<script>
import Post from './PostComponent'
import axios from 'axios'
export default {
  data() {
    return {
      posts: [],
     
    }
  },
  mounted(){
    axios.get('/api/posts').then(res => {
      console.log(res.data)
      this.posts = res.data.data
    })
  },
  methods: {
   
  },
  components: {
    Post
  }

}
</script>
<style lang="">
  
</style>