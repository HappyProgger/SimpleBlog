<script>
export default {
    name: "Categories",
    props : [ 'tags' ]
}
</script>

<template>

    <div class="mt-10 px-8">
        <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
        <div class="flex flex-col bg-white px-4 py-6 max-w-sm mx-auto rounded-lg shadow-md">
            <ul v-for="tag in this.tags">
                <li><a href="#"
                       class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                    {{ tag.title}}</a></li>

            </ul>
        </div>
    </div>
</template>

<style scoped>

</style>
