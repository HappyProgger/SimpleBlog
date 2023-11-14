<script>

import Navbar from '@/Components/Navbar.vue';
import Footer from "@/Components/Footer.vue";
import BlogSection from "@/Components/Arcticles/BlogSectionForMainPage.vue";

export default {

    // name: "MainPage",
    components: {
        Navbar: Navbar,
        Footer: Footer,
        BlogSection: BlogSection,
        article: Array
    },
    data(){
        return {

            articles: this.$inertia.page.props.articles
        }
    },
    methods:{
        convert_date($row_date){
            return new Date($row_date).toISOString().replace('T', ' ').slice(0, -5)
        }
    }


}
</script>

<template>
       <Navbar></Navbar>
    <div class="bg-[#64748b] w-full h-60 flex ">
        <div class="justify-center align-center self-center ml-20">
            <div class="xl,lg:text-[70px] md:text-[60px] font-bold">Успех</div>
            <div class="xl,lg:text-[20px] lg:text-[15px]font-medium">Для молодых и успешных</div>
        </div>
    </div>

    <div id="blog" class="bg-gray-100 px-4 xl:px-4 py-14">
        <div class="mx-auto container">
                        <span role="contentinfo">
                        <h1 tabindex="0"
                            class="focus:outline-none text-center text-3xl lg:text-5xl tracking-wider text-gray-900">Latest from our Blog</h1>
                    </span>
            <div tabindex="0" aria-label="Group of cards" class="focus:outline-none mt-12 lg:mt-24">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-8">


                        <div  class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-8 flex"
                            v-for="article in this.articles ">


                            <BlogSection
                            :date="convert_date(article.created_at)"
                            :src_img="article.image"
                            :title="article.title"
                            :short_description="article.text.slice(0,100)+ '...'"
                            :counter_views="article.counter_views"
                            :counter_likes="article.counter_likes">

                            </BlogSection>






                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer></Footer>
</template>

<style scoped>

</style>
