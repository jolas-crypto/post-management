<template>
    <div v-show="isModalOpen">
        <div class="fixed z-10 inset-0 overflow-y-auto bg-black bg-opacity-50">
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white rounded-md shadow-lg max-w-lg mx-auto p-6">
                    <div class="mb-4">
                        <h2 class="text-xl font-semibold">Modal Title</h2>
                    </div>
                    <div class="mb-4">
                        <label for="title" class="block mb-1">Title</label>
                        <input type="text" id="title" name="title" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter post title">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block mb-1">Description</label>
                        <textarea id="description" name="description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" rows="4" placeholder="Enter post description"></textarea>
                    </div>
                    <div class="flex justify-start space-x-3">
                        <button type="submit" class="button-post">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9" />
                            </svg>
                            <span class="ml-1 text-sm">Submit</span>
                        </button>
                        <button type="button" class="button-post" aria-label="Close modal" @click="closeModal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                            <span class="ml-1 text-sm">Cancel</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script setup>

    import { defineProps, defineEmits, ref } from 'vue';

    const props = defineProps({
        is_show: Boolean,
    });

    const isModalOpen = ref(false);

    // const { emit } = defineEmits();

    const openModal = () => {
        isModalOpen.value = props.is_show;
    };

    const closeModal = () => {
        isModalOpen.value = false;
    };

</script>
  