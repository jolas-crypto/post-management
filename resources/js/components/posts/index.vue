<template>
    <main class="rounded-tl-lg bg-gray-50">
        <div class="p-4 space-y-3">
            <div class="flex flex-auto justify-between">
                <div>
                    <h1 class="text-xl font-medium">Hi Jolas</h1>
                    <h1 class="text-sm font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, minima!</h1>
                </div>
            </div>
        </div>
        <ul class="post-nav border-b border-gray-200 flex item-center px-8 mt-4">
            <li class="font-semibold">
                <a href="http://" class="nav-module items-center aes">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span class="ml-1">Home</span>
                </a>
            </li>
            <li class="font-semibold">
                <a href="http://" class="nav-module items-center aes">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    <span class="ml-1">Post</span>
                </a>
            </li>
            <li class="font-semibold">
                <a href="http://" class="nav-module items-center aes">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    <span class="ml-1">Archived</span>
                </a>
            </li>
        </ul>
        <div class="container mx-auto my-8 px-4 flex">
            <div class="side-post w-1/4 mr-8 bg-white rounded-t-md">
                <div class="flex items-center justify-between m-3">
                    <button class="button-post">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <span class="ml-1 text-sm">New Post</span>
                    </button>
                </div>
            </div>
            <div class="w-3/4 rounded-md overflow-auto space-y-4">
                <div class="post-container bg-white rounded-md space-y-3 p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex item-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <span class="font-semibold hover:underline">Jolas Casallas</span>
                        </div>
                        <div class="flex">
                            <div class="flex item-center space-x-3">
                                <button class="button-post">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>
                                    <span class="ml-1 text-sm">Edit Post</span>
                                </button>
                                <button class="button-post">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                    <span class="ml-1 text-sm">Archive Post</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-start">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime saepe vitae quo ut recusandae unde possimus! Cumque voluptatibus nam dignissimos id deserunt. Obcaecati blanditiis, vitae eius, magni iste voluptatum reprehenderit error quae optio voluptatibus minus commodi quo. Facere aliquid eaque rerum, modi, ab provident quidem tempora sed similique vel fuga?
                    </div>
                    <div class="flex items-center space-x-3">
                        <!-- Filled stars -->
                        <span class="text-gray-400 text-3xl hover:text-yellow-400">&#9733;</span>
                        <span class="text-gray-400 text-3xl hover:text-yellow-400">&#9733;</span>
                        <span class="text-gray-400 text-3xl hover:text-yellow-400">&#9733;</span>
                        <span class="text-gray-400 text-3xl hover:text-yellow-400">&#9733;</span>
                        <span class="text-gray-400 text-3xl hover:text-yellow-400">&#9733;</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script setup>
    import {ref} from 'vue';

    const activeTab = ref(0);
    const tabs = ref(['Tab 1', 'Tab 2', 'Tab 3']);

    const getTabButtonClasses = (tab) => {
        return [
            "px-4 py-2 font-medium text-sm",
            activeTab.value === tab
            ? "text-black border-b-4 border-blue-500"
            : "text-gray-700 hover:bg-gray-200 hover:rounded-t-lg",
        ];
    }
</script>