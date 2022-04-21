<template lang="en">
  <teleport to="body">
    <div
      ref="modal-backdrop"
      class="fixed z-10 inset-0 overflow-y-auto bg-black bg-opacity-50"
    >
      <div
        class="flex items-start justify-center min-h-screen pt-24 text-center"
      >
        <div
          class="bg-white rounded-lg text-left overflow-hidden shadow-xl p-8 w-1/2"
          role="dialog"
          ref="modal"
          aria-modal="true"
          aria-labelledby="modal-headline"
        >
         <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
          Modal title
        </h5>
        <button type="button" @click="showModal=false"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" 
          data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
     
        </div>
      </div>
    </div>
  </teleport>
</template>
<script>
import { ref, watch } from "vue";
// const props = {
//   showModal: {
//     type: Boolean,
//     default: true,
//   },
// };

export default {
  name: "CloseModal",
  props: {
    showModal: {
      type: Boolean,
      default: true,
    },
  },
  data() {
    return {
      showModal: false,
    };
  },
  methods: {
    closeModal() {
      this.showModal = false;
    },
  },
  
  // name: "ModalAddPostComponent",
  // props,
  setup() {

    watch(
      ()=>this.closeModal,
     
    );
  },

  //   return {
  //     showModal,
  //   };
  // },
  // return {

  // }
};
// const props = {
//   showModal: {
//     type: Boolean,
//     default: false,
//   },

// };
// export default {
//   name: 'ModalAddPost',
//   props,
//  setup(props) {
//   const showModal = ref(false);

//   watch(
//     () => props.show,
//     show => {
//       showModal.value = show;
//       console.log(showModal.value);
//     },
//   );
//   return {
//     showModal,
//   };
// },
// };
</script>
<style lang="en">
</style>