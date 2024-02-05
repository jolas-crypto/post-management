<template>
    <main class="rounded-tl-lg bg-white">
        <div class="container mx-auto px-2 flex">
            <div class="rounded-md overflow-auto">
                <div v-for="(item, index) in postData" :key="index">
                    <div class="post-container bg-gray-100 rounded-md space-y-3 p-6 mb-4">
                        <div class="flex items-center justify-between">
                            <div class="flex item-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <span class="font-semibold hover:underline">{{ item.user.name }}</span>
                            </div>
                            <div class="flex">
                                <div class="flex item-center space-x-3">
                                    <button class="button-post" @click="archivedPost(item.id)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                        </svg>
                                        <span class="ml-1 text-sm">Archive</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-start">
                            {{ item.description }}
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="text-gray-400 text-3xl hover:text-yellow-400">&#9733;</span>
                            <span class="text-gray-400 text-3xl hover:text-yellow-400">&#9733;</span>
                            <span class="text-gray-400 text-3xl hover:text-yellow-400">&#9733;</span>
                            <span class="text-gray-400 text-3xl hover:text-yellow-400">&#9733;</span>
                            <span class="text-gray-400 text-3xl hover:text-yellow-400">&#9733;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script setup>
    import { defineProps, ref } from 'vue';
    import http_request from '../../http_request';
    import { UNARCHIVED } from '../../constant';

    const props = defineProps({
        data: Object,
    });

    const postData = ref(props.data.post);

    const archivedPost = async (id) => {
        const payload = {
            'archive': UNARCHIVED
        };

        const response = await http_request.update('PUT', `/unarchive/${id}`, payload);

        if (response.success) {
            alert(response.data.message)
            location.reload()
        } else {
            data.errors = response.data
        }
    }

</script>