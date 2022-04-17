<template lang="en">
  <section class="text-gray-600 body-font">
  <div class="container  pt-20 mx-auto ">
    <div class="flex items-center lg:w-full mt-2  sm:w-full  mb-6 border-gray-200 ">
     <form class="flex items-center space-x-6 px-4 py-2 rounded-lg w-full bg-white ">
        <div class="shrink-0">
          <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
        </div>
  <button
      type="button"
      @click="showModal= !showModal"
      class="w-full"
    >
      
        <input class='flex justify-center w-full rounded-full py-2 px-3 bg-gray-100 focus:outline-indigo-600' placeholder='Create new post' />
    </button>
</form>
    </div>    
  </div>
   

    <div v-show="showModal">
        <teleport to="body">
          <div class="page" >
           <div
      ref="modal-backdrop"  
      class="fixed z-10 inset-0 overflow-y-auto bg-black bg-opacity-50"
    >

      <div
        class="flex items-start justify-center min-h-screen pt-24 text-center px-4 pb-10 sm:px-6 lg:px-8 "
      >
        <div
          class="bg-white rounded-lg text-left overflow-hidden shadow-xl px-2 py-4 lg:w-1/2 md:w-2/3 sm:w-full animate-scale"
          role="dialog"
          ref="modal"
          aria-modal="true"
          aria-labelledby="modal-headline"
        >
        <div class="px-5">
          <div class="flex justify-between items-center pb-3 border-b">
            <div class="text-2xl font-semibold">Create New post</div>
            <button
              @click="showModal = false"
              type="button"
              class="-ml-4 p-3 rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500"
            >
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
       
      <textarea id="message" rows="3" class=" resize-none block p-2.5 w-full md:text-lg text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:outline-indigo-600 " placeholder="Write a comment..."></textarea>
         
           <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t mt-5 border-gray-200 rounded-b-md">
        <button type="button" @click="showModal = false"
          class="inline-block px-6 py-3 bg-gray-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          Discard
        </button>
        <button type="button"
          class="inline-block px-6 py-3 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out ml-2">
          Public
        </button>
      </div>
        </div>
      </div>
      </div>
      
      </div>
      </div>

    </teleport>
    </div>
  </div>
  
</section>
</template>
<script>
import { ref } from "vue";
import ModalAddPost from "./ModalAddPostComponent";

const components = {
  ModalAddPost,
};
export default {
  data() {
    return {
      showModal: false,
    };
  },
  methods: {},
  name: "AddPostComponent",
  components,
  setup(props) {
    const showModal = ref(true);

    watch(
      () => props.show,
      (show) => {
        showModal.value = show;
        console.log(showModal.value);
      }
    );
    return {
      showModal,
    };
  },
};
</script>
<style lang="en">
</style>