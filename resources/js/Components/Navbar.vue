<script>
// import { Link } from '@inertiajs/vue3';
export default {
    // name: "navbar"

    data(){
        return{
            url : ''


        }

    },
    methods : {
        get_url(){
            this.url = window.location.pathname+window.location.search
        }
        },
    mounted() {
        this.get_url()
    }


}
</script>

<template>

    <!-- Main navigation container -->
    <nav class="bg-white px-6 py-4 shadow">
        <div class="flex flex-col container mx-auto md:flex-row md:items-center md:justify-between">
            <div class="flex justify-between items-center">
                <div>
                    <a href="#" class="text-gray-800 text-xl font-bold md:text-2xl">Brand</a>
                </div>
                <div>
                    <button type="button" class="block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="md:flex flex-col md:flex-row md:-mx-4 hidden">
                <a href="/" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0 "
                   :class="{ 'text-red-600':  this.$store.state.choosen_page['/'] }"
                    @click="this.$store.commit('show_curret_page',this.url)"
                    > Home</a>
                <a href="/articles"
                   class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0"
                   :class="{ 'text-red-600':  this.$store.state.choosen_page['/articles'] }"

                   @click="this.$store.commit('show_curret_page',this.url)"

                    >Blog</a>
            </div>
        </div>
    </nav>
</template>

<style scoped>

</style>
