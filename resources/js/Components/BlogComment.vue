<script>
export default {
    name: "BlogComment"
}
</script>

<template>
    <div class="mt-6 ">

        <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
            <h1 class="text-gray-900 text-text-sm font-bold mb-2">Leave a comment bellow</h1>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Subject
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name"
                        type="text"
                        placeholder="Enter subject"
                    />


                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="comment">
                        Comment
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="comment"
                        placeholder="Enter your comment"
                    ></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button"
                    >
                        Leave a comment
                    </button>
                </div>
            </form>


        </div>


    </div>
</template>

<style scoped>

</style>
