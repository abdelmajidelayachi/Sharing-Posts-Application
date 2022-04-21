<template lang="en">
  <div>
   <div v-for='(comment , index) in comments' :key='index'>
     <form class="flex items-start space-x-6 pl-6 py-2 rounded-lg bg-white ">
        <div class="shrink-0">
          <img class="md:h-12 md:w-12 lg:h-12 lg:w-12 h-10 w-10 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
        </div> 

        
        <div class='flex flex-col bg-gray-100 w-9/12 rounded-lg px-3 pb-3 '>
           <div class="title-font text-sm md:text-base  lg:text-1xl font-bold pt-3 text-gray-900">Knausgaard typewriter </div>
          <div class='md:text-sm text-xs  '>{{comment.message}}</div>
        </div>
    </form>
       
  </div>
  </div>
 
</template>
<script>
export default {
   props: ['comments'],
}
</script>
<style lang="en">
  
</style>