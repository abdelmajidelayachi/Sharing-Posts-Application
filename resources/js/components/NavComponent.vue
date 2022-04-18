<template lang="">
    <div class='h-20'>
        <div class="shadow-md md:shadow-gray-200 w-full fixed top-0 left-0">
            <div
                class="md:flex items-center justify-between bg-white py-3 md:px-10 px-7"
            >
                  <router-link :to="{ name: 'Home' }">
                    <div
                        class="font-bold text-2xl cursor-pointer flex items-center font-[Poppins] text-gray-800"
                    >
                        <span class="text-3xl text-indigo-600 mr-1 pt-2">
                            <ion-icon name="logo-wechat"></ion-icon>
                        </span>
                        weShare
                    </div>
                </router-link>
                <!-- onClick={() => setOpen(!open)} -->
                <div
                    @click="menuDropper"
                    class="text-3xl absolute right-8 top-6 cursor-pointer md:hidden text-gray-500 hover:text-indigo-600"
                >
                    <i v-if="!dropMenu" class="fas fa-bars fa-lg"></i>
                    <i v-else class="fas fa-xmark fa-lg"></i>
                </div>
                <ul
                    class="md:flex direction-row md:items-center md:pd-0 pd-12 absolute md:static bg-white md:z-auto z-[-1] left-0 w-full md:w-auto md:pl-0 pl-9 transition-all duration-500 ease-in"
                    v-bind:class="[
                        dropMenu
                            ? ' top-15 opacity-100'
                            : ' top-[-490px] md:opacity-100',
                    ]"
                >
                    <li key="home" class="md:ml-8 text-xl md:my-0 my-7">
                        <a href="/">
                            <span
                                class="pt-1 text-gray-500 hover:text-indigo-600"
                            >
                                <i class="fas fa-home fa-lg"></i>
                            </span>
                        </a>
                    </li>
                    <li key="search" class="md:ml-8 text-xl md:my-0 my-7">
                        <div class="flex">
                            <div class="xl:w-96">
                                <div
                                    class="input-group relative flex flex-nowrap items-stretch w-full"
                                >
                                    <input
                                        type="search"
                                        class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white md:ml-1 bg-clip-padding border border-solid border-gray-300 rounded-l-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:outline-none focus:shadow-none"
                                        placeholder="Search"
                                        aria-label="Search"
                                        aria-describedby="button-addon3"
                                    />
                                    <button
                                        class="btn inline-block px-6 py-2 md:py-1 border-2 border-blue-600 md:text-sm text-blue-600 font-bold leading-tight uppercase rounded-r-lg hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                                        type="button"
                                        id="button-addon3"
                                    >
                                        <i class="fas fa-search fa-lg"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li
                        key="notification"
                        @click="notificationShow = !notificationShow"
                        class="md:ml-8 text-xl md:my-0 my-7 text-gray-500 hover:text-blue-600"
                    >
                        <span class="pt-1">
                            <i
                                v-if="notificationShow"
                                class="fas fa-bell fa-lg"
                            ></i>
                            <i v-else class="fa-regular fa-bell fa-lg"></i>
                        </span>
                    </li>

                    <li key="sign-in" class="md:ml-8 text-xl md:my-0 my-7">
                        <a
                            href="/login"
                            class="text-gray-800 hover:text-gray-400"
                        >
                            <button
                                class="bg-indigo-600 text-white nowrap font-[Poppins] py-2 px-6 rounded md:ml-4 hover:bg:indigo-400 duration-500"
                            >
                                Sign in
                            </button>
                        </a>
                    </li>
                    <li key="account" class="md:ml-8 text-xl md:my-0 my-7">
                       <router-link :to="{ name: 'Profile' }">
                            <div class="shrink-0">
                                <img
                                    class="h-12 w-12 object-cover rounded-full"
                                    src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80"
                                    alt="Current profile photo"
                                />
                            </div>
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
        <Notification :showNot="notificationShow" />
    </div>
</template>
<script>
import Notification from "./NotificationComponent.vue";
export default {
    data() {
        return {
            dropMenu: false,
            notificationShow: false,
        };
    },
    components: {
        Notification,
    },
    methods: {
        menuDropper() {
            this.dropMenu = !this.dropMenu;
            // console.log(this.dropMenu)
        },
        // mounted() {

        //         }
    },
};
</script>
<style lang=""></style>
