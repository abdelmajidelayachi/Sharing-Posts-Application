<template lang="en">
  <div class="">
    <div v-show="showNot" class="fixed z-10 bg-white lg:w-1/3 md:w-2/3 w-11/12 md:right-10 right-4  top-16 shadow-[-15px_-15px_50px_-1px_rgba(0,0,0,0.1)] rounded-lg">
    <div class="font-bold text-2xl pt-4 pl-3 pb-3">Notifications</div>
      <div class=" flex p-4 bg-blue-200">
       <div class="shrink-0">
          <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
        </div>
        <div class="px-3 flex items-center" > Lorem ipsum dolor sit amet, consectetur adipiscing elit, lotem ipsum para
        </div>
       
      </div>
      <div class=" flex border-t p-4">
       <div class="shrink-0">
          <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
        </div>
        <div class="px-3 flex items-center" > Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </div>
       
      </div>
      <div class=" flex border-t p-4">
       <div class="shrink-0">
          <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
        </div>
        <div class="px-3 flex items-center" > Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </div>
        </div>
    </div>
      
  </div>
</template>
<script>
export default {
  props: {
    showNot: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      showNot: false
    }
  },
  methods: {
    
  }

  
}
</script>
<style lang="en">
  
</style>