<script>
import {Link} from "@inertiajs/inertia-vue3";

import Navbar from '@/Components/Navbar.vue';
import Footer from "@/Components/Footer.vue";
import BlogSectionForBlogsPage from "@/Components/Arcticles/BlogSectionForBlogsPage.vue";
import BlogSection from "@/Components/Arcticles/BlogSectionForMainPage.vue";
import Pagination from "@/Components/Pagination.vue";
import {data} from "autoprefixer";


export default {

    // name: "MainPage",
    components: {
        BlogSection,
        Navbar: Navbar,
        Footer: Footer,
        BlogSectionForBlogsPage: BlogSectionForBlogsPage,
        Pagination: Pagination

    },
    data() {
        return {
            links: this.$inertia.page.props.articles.links,
            articles: this.$inertia.page.props.articles.data,
            current_page: this.$inertia.page.props.articles.current_page,
            last_page: this.$inertia.page.props.articles.last_page,
        }
    },
    methods: {
        convert_date($row_date) {
            return new Date($row_date).toISOString().replace('T', ' ').slice(0, -5)
        },

    },
    computed() {

    }


}
</script>

<template>

    <Navbar></Navbar>
    <div class="bg-gray-100 overflow-x-hidden">


        <div class="px-6 py-8">
            <div class="flex justify-between container mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Post</h1>
                        <div>
                            <select
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option>Latest</option>
                                <option>Last Week</option>
                            </select>
                        </div>
                    </div>

                    <div v-for="article in this.articles">
                        <BlogSectionForBlogsPage

                            :id ="article.id"
                            :date="convert_date(article.created_at)"
                            :tags="article.tags"
                            :src_img="article.image"
                            :title="article.title"
                            :short_description="article.text"
                            :counter_views="article.counter_views"
                            :counter_likes="article.counter_likes">

                        </BlogSectionForBlogsPage>

                    </div>
                    <div class="mt-8">

                        <Pagination class="mt-6" :links="this.$inertia.page.props.articles.links"></Pagination>

                    </div>
                </div>
                <div class="-mx-8 w-4/12 hidden lg:block">
                    <div class="px-8">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Authors</h1>
                        <div class="flex flex-col bg-white max-w-sm px-6 py-4 mx-auto rounded-lg shadow-md">
                            <ul class="-mx-4">
                                <li class="flex items-center"><img
                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                    alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                    <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Alex
                                        John</a><span
                                        class="text-gray-700 text-sm font-light">Created 23 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80"
                                    alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                    <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Jane
                                        Doe</a><span
                                        class="text-gray-700 text-sm font-light">Created 52 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80"
                                    alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                    <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Lisa
                                        Way</a><span
                                        class="text-gray-700 text-sm font-light">Created 73 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80"
                                    alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                    <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Steve
                                        Matt</a><span
                                        class="text-gray-700 text-sm font-light">Created 245 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80"
                                    alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                    <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Khatab
                                        Wedaa</a><span class="text-gray-700 text-sm font-light">Created 332 Posts</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-10 px-8">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                        <div class="flex flex-col bg-white px-4 py-6 max-w-sm mx-auto rounded-lg shadow-md">
                            <ul>
                                <li><a href="#"
                                       class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                    AWS</a></li>
                                <li class="mt-2"><a href="#"
                                                    class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                    Laravel</a></li>
                                <li class="mt-2"><a href="#"
                                                    class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                    Vue</a>
                                </li>
                                <li class="mt-2"><a href="#"
                                                    class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                    Design</a></li>
                                <li class="flex items-center mt-2"><a href="#"
                                                                      class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                    Django</a></li>
                                <li class="flex items-center mt-2"><a href="#"
                                                                      class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                    PHP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-10 px-8">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Recent Post</h1>
                        <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-md">
                            <div class="flex justify-center items-center">
                                <!--                                <a href="#"-->
                                <!--                                                                             class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded hover:bg-gray-500">Laravel</a>-->
                            </div>
                            <div class="mt-4"><a href="#" class="text-lg text-gray-700 font-medium hover:underline">Build
                                Your New Idea with Laravel Freamwork.</a></div>
                            <div class="flex justify-between items-center mt-4">
                                <div class="flex items-center"><img
                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                    alt="avatar" class="w-8 h-8 object-cover rounded-full"><a href="#"
                                                                                              class="text-gray-700 text-sm mx-3 hover:underline">Alex
                                    John</a></div>
                                <span
                                    class="font-light text-sm text-gray-600">Jun 1, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Footer></Footer>
</template>

<style scoped>

</style>
