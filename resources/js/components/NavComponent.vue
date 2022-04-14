<template lang="">
  <div>
     <div class="shadow-md w-full fixed top-0 left-0">
                <div class="md:flex items-center justify-between bg-white py-3 md:px-10 px-7">
                    <a href="/">
                        <div class="font-bold text-2xl cursor-pointer flex items-center font-[Poppins] text-gray-800">
                            <span class="text-3xl text-indigo-600 mr-1 pt-2">
                                <ion-icon name="logo-wechat"></ion-icon>
                            </span>
                            weShare
                        </div>
                    </a>
                        <!-- onClick={() => setOpen(!open)} -->
                    <div @click="menuDropper"
                        class="text-3xl absolute right-8 top-6 cursor-pointer md:hidden"
                    >
                        <ion-icon  v-if="dropMenu" name='close'></ion-icon>
                        <ion-icon  v-else name='menu'></ion-icon>
                    </div>
                    <ul
                      class='md:flex direction-row md:items-center md:pd-0 pd-12 absolute md:static bg-white md:z-auto z-[-1] left-0 w-full md:w-auto md:pl-0 pl-9 transition-all duration-500 ease-in'
                     v-bind:class="[dropMenu  ?' top-20 opacity-100': ' top-[-490px] md:opacity-100' ]"
                       
                    >
                  
                        <li key="home" class="md:ml-8 text-xl md:my-0 my-7">
                            <a href="/">
                                <span class="pt-1">
                                    <ion-icon name="home-outline"></ion-icon>
                                </span>
                            </a>
                        </li>
                        <li
                            key="search"
                            class="md:ml-8 text-xl md:my-0 my-7"
                        >
                            <div class="flex ">
                                <div class=" xl:w-96">
                                    <div class="input-group relative flex flex-nowrap items-stretch w-full ">
                                        <input
                                            type="search"
                                            class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white md:ml-1 bg-clip-padding border border-solid border-gray-300 rounded-l-lg  transition ease-in-out m-0 focus:text-gray-700 focus:bg-white  focus:outline-none focus:shadow-none"
                                            placeholder="Search"
                                            aria-label="Search"
                                            aria-describedby="button-addon3"
                                        />
                                        <button
                                            class="btn inline-block  px-6 py-2  md:py-1 border-2 border-blue-600  md:text-sm text-blue-600 font-bold  leading-tight uppercase rounded-r-lg hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                                            type="button"
                                            id="button-addon3"
                                        >
                                        <!-- <ion-icon name="search-sharp"></ion-icon> -->
                                            <svg
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="search"
                                                class="w-4"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                            >
                                                <path
                                                    fill="currentColor"
                                                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
                                                ></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            key="notification"
                            class="md:ml-8 text-xl md:my-0 my-7"
                        >
                            <a href="/notification">
                                <span class="pt-1">
                                    <ion-icon name="notifications-outline"></ion-icon>
                                </span>
                            </a>
                        </li>

                        <li
                            key="sign-in"
                            class="md:ml-8 text-xl md:my-0 my-7"
                        >
                            <a
                                href="/login"
                                class="text-gray-800 hover:text-gray-400"
                            >
                                <button class="bg-indigo-600 text-white font-[Poppins] py-2 px-6 rounded md:ml-4 hover:bg:indigo-400 duration-500">Sign in</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
  </div>
</template>
<script>
export default {
data(){
  return {
    dropMenu:false,
  }
},
methods:{
  menuDropper(){
    this.dropMenu=!this.dropMenu;
    console.log(this.dropMenu)
  },
// mounted() {
            
//         }
}


};
</script>
<style lang="">
</style>