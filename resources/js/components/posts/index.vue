<template>
    <main class="rounded-tl-lg bg-white">
        <div class="container mx-auto px-2 flex">
            <div class="side-post w-2/5 mr-8 bg-gray-100 rounded-t-md py-6 h-1/3">
                <div class="max-w-md mx-6">
                    <div class="mb-4">
                        <label for="title" class="block mb-1">Title</label>
                        <input
                        type="text"
                        id="title" 
                        name="title" 
                        class="form-input" 
                        placeholder="Enter post title"
                        v-model="state.post.title">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block mb-1">Description</label>
                        <textarea
                        id="description" 
                        name="description" 
                        class="form-input" 
                        rows="4" 
                        placeholder="Enter post description"
                        v-model="state.post.description"
                        ></textarea>
                    </div>
                    <button
                    class="button-post"
                    @click="postSubmit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="ml-1 text-sm">Add</span>
                    </button>
                </div>
            </div>
            <!-- to do: can make into component -->
            <div class="w-3/5 rounded-md overflow-auto">
                <div v-for="(item, index) in postData" :key="index">
                    <div class="post-container bg-gray-100 rounded-md space-y-3 p-6 mb-4" v-if="!item.archive">
                        <div class="flex items-center justify-between">
                            <div class="flex item-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <span class="font-semibold hover:underline">{{ item.user.name }}</span>
                            </div>
                            <div class="flex">
                                <div class="flex item-center space-x-3">
                                    <div v-if="!item.editing">
                                        <button class="button-post" @click="editDescription(index)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                            </svg>
                                            <span class="ml-1 text-sm">Edit</span>
                                        </button>
                                    </div>
                                    <div v-else>
                                        <button class="button-post" @click="updateDescription(item.id, index)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                            </svg>
                                            <span class="ml-1 text-sm">Update</span>
                                        </button>
                                    </div>
                                    <button class="button-post" @click="archivedPost(item.id)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                        </svg>
                                        <span class="ml-1 text-sm">Archive</span>
                                    </button>
                                    <button class="button-post-delete" @click="deletePost(item.id)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                        <span class="ml-1 text-sm">Delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div v-if="!item.editing" class="flex items-center justify-start">
                            {{ item.description }}
                        </div>
                        <div v-else>
                            <textarea
                            id="description" 
                            name="description" 
                            class="form-input" 
                            rows="4" 
                            v-model="item.description"
                            ></textarea>
                        </div>
                        <!-- to do: can make into component -->
                        <div class="flex items-center space-x-3">
                            <div v-for="rate in rating" :key="rate">
                                <span 
                                :class="{ 
                                'text-yellow-500 text-3xl': rate <= item.rating, 
                                'text-gray-400 text-3xl': rate > item.rating }
                                ">&#9733;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script setup>
    import { reactive, defineProps, ref } from 'vue';
    import http_request from '../../http_request';
    import { ARCHIVED, RATING } from '../../constant';

    const props = defineProps({
        data: Object,
    });

    const state = reactive({
        post: {
            description: null
        },
    })

    const postData = ref(props.data.post);
    const rating = ref(RATING);

    const editDescription = (index) => {
        postData.value[index].editing = 1
    }

    const postSubmit = async () => {
        const response = await http_request.save('POST', 'post', state.post);

        if (response.success) {
            alert(response.data.message)
            location.reload()
        } else {
            data.errors = response.data
        }
    }

    const updateDescription = async (id, index) => {
        const payload = {
            'title': postData.value[index].title,
            'description': postData.value[index].description,
            'user_id': postData.value[index].user_id,
            'updated_by': postData.value[index].user.name
        };

        const response = await http_request.update('PUT', `/post/${id}`, payload);

        if (response.success) {
            alert(response.data.message)
            location.reload()
        } else {
            data.errors = response.data
        }
    }

    const deletePost = async (id) => {
        let confirmation = confirm('Are you sure, you want to delete this post?')

        if (confirmation) {
            const response = await http_request.delete('DELETE', `post/${id}`)

            if (response.success) {
                alert(response.data.message)
                location.reload()
            } else {
                data.errors = response.data
            }
        }
    }

    const archivedPost = async (id) => {
        const payload = {
            'archive': ARCHIVED
        };

        const response = await http_request.update('PUT', `/archive/${id}`, payload);

        if (response.success) {
            alert(response.data.message)
            location.reload()
        } else {
            data.errors = response.data
        }
    }

</script>