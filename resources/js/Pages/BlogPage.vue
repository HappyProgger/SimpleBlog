<script>


import BlogSectionForBlogsPage from "@/Components/Arcticles/BlogSectionForBlogsPage.vue";
import Navbar from "@/Components/Navbar.vue";
import Pagination from "@/Components/Pagination.vue";
import Footer from "@/Components/Footer.vue";
import Categories from "@/Components/Arcticles/Categories.vue";
import BlogComment from "@/Components/BlogComment.vue";

export default {
    name: "BlogSection",
    components: {Footer, Pagination, Navbar, BlogSectionForBlogsPage, Categories, BlogComment},
    props: {
        // src_img : String,
        // title: String,
        // short_description: String,
        // date: String,
        // counter_likes: Number,
        // counter_views: Number,

    },

    data() {
        return {
            article: this.$inertia.page.props.article,
            tags: this.$inertia.page.props.tags
        }
    },

    methods: {

    },


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

                    <div>
                    </div>
                    <div class="mt-6">
                        <img tabindex="0" id="article_img" role="img" aria-label="gaming"
                             class="focus:outline-none w-full"
                             alt="blog_image"
                             src="https://mountain.nsu.ru/nas_tour/Altay2016.05/photos/hi-res/IMG_33857.JPG"/>
                        <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                            <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">{{
                                    this.article.title
                                }}</a>
                                <p class="mt-2 text-gray-600">{{ this.article.text }}</p>
                            </div>
                            <div class="flex justify-end items-center mt-4">

                                <div><a href="#" class="flex items-center"><img
                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                    alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                    <h1 class="text-gray-700 font-bold hover:underline">Alex John</h1>
                                </a></div>
                            </div>
                            <div class="flex sm:justify-start  ">
                                <div class="flex ">
                                    <button class="w-[40px] h-[40px] self-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             x="0px" y="0px" viewBox="0 0 600 600"
                                             style="enable-background:new 0 0 490 490;" xml:space="preserve"><g><path d="M245.204,101.267C67.171,101.267,0,245,0,245s66.763,143.733,244.796,143.733C422.829,388.733,490,245,490,245 S423.238,101.267,245.204,101.267z M244.796,373.421c-146.393,0-212.367-101.053-227.506-128.333 c15.249-26.796,82.733-128.508,227.914-128.508c146.514,0,212.475,101.22,227.543,128.4 C457.578,272.203,391.313,373.421,244.796,373.421z"/><path
                                            d="M245.003,146.124c-54.521,0-98.881,44.352-98.881,98.873c0,54.521,44.36,98.881,98.881,98.881s98.873-44.36,98.873-98.881 C343.876,190.477,299.524,146.124,245.003,146.124z M245.003,328.566c-46.08,0-83.568-37.489-83.568-83.568 c0-46.072,37.489-83.561,83.568-83.561c46.072,0,83.561,37.489,83.561,83.561C328.564,291.077,291.075,328.566,245.003,328.566z"/><path
                                            d="M245.003,175.583c-38.281,0-69.422,31.141-69.422,69.415c0,38.274,31.141,69.415,69.422,69.415 c38.274,0,69.415-31.141,69.415-69.415C314.417,206.724,283.277,175.583,245.003,175.583z M245.003,299.1 c-29.833,0-54.11-24.27-54.11-54.102c0-29.832,24.277-54.102,54.11-54.102s54.102,24.27,54.102,54.102 C299.105,274.83,274.835,299.1,245.003,299.1z"/><path
                                            d="M245.003,206.679c-21.13,0-38.326,17.189-38.326,38.319c0,21.129,17.197,38.326,38.326,38.326s38.319-17.197,38.319-38.326 C283.321,223.868,266.132,206.679,245.003,206.679z M245.003,268.011c-12.688,0-23.014-10.326-23.014-23.014 c0-12.688,10.325-23.006,23.014-23.006c12.688,0,23.006,10.318,23.006,23.006C268.009,257.686,257.691,268.011,245.003,268.011z"/></g></svg>
                                    </button>
                                    <h1 class="mt-1.5">{{ this.article.counter_views }}</h1>
                                </div>

                                <div class="flex ml-4 ">

                                    <button class="w-[40px] h-[40px] mb-0 flex  ">
                                        <svg viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Layer_40" data-name="Layer 40">
                                                <path
                                                    d="m82.815 32.255h-25.1v-18.721a6.757 6.757 0 0 0 -12.552-3.477l-17.5 29.169h-22.663a2 2 0 0 0 -2 2v50a2 2 0 0 0 2 2h66.942a14.158 14.158 0 0 0 13.449-9.693l10.873-32.619a14.177 14.177 0 0 0 -13.449-18.659zm-56.015 56.969h-10.41a2.011 2.011 0 0 0 .047-.421v-45.577h10.363zm-19.8-45.998h5.437v45.574a2.011 2.011 0 0 0 .046.421h-5.483zm85.469 6.423-10.869 32.618a10.163 10.163 0 0 1 -9.654 6.957h-41.146v-47.444l17.8-29.666a2.758 2.758 0 0 1 5.122 1.42v20.721a2 2 0 0 0 2 2h27.1a10.176 10.176 0 0 1 9.654 13.394z"/>
                                            </g>
                                        </svg>
                                    </button>
                                    <h1 class="mt-1.5 mr-2">{{ this.article.counter_views }}</h1>
                                </div>
                            </div>



                            <BlogComment></BlogComment>
                        </div>
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


                    <Categories :tags="this.tags"></Categories>






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
