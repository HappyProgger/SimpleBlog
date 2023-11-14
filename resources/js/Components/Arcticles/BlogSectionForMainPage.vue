<script>


export default {
    name: "BlogSection",
    props: {
        id: Number,
        src_img : String,
        title: String,
        short_description: String,
        date: String,
        counter_likes: Number,
        counter_views: Number,
        tags: Object,


    },
    data(){
        return {
            tags_titles : [],
            new_count_likes : this.counter_likes,
        }
    },
    methods :{
        get_title_tags($tags_object){
            return $tags_object.map( tag => tag.title)
        },
        like_article(){
            let url = window.location.origin + '/api/increment_counter_like_article/' + this.id
            axios.get(url).then(res => this.new_count_likes = res.data.likes)
            // axios.get(url).then(res => console.log(res.data.likes))
        },
    },
    created(){
        this.tags_titles = this.get_title_tags(this.tags)
    }

}
</script>

<template>

    <div tabindex="0" class="focus:outline-none " aria-label="card 2">
        <img tabindex="0"  id="article_img" role="img" aria-label="gaming" class="focus:outline-none w-full"
              alt="blog_image" src="https://mountain.nsu.ru/nas_tour/Altay2016.05/photos/hi-res/IMG_33857.JPG"/>
        <div class="py-2 px-4 w-full flex justify-between bg-indigo-50">
            <p tabindex="0"
               class="focus:outline-none  text-sm text-gray-500 font-semibold tracking-wide"></p>
            <p tabindex="0">


              {{ this.date }}</p>
        </div>

        <div class="bg-white px-3 lg:px-6 py-4 rounded-bl-3xl rounded-br-3xl flex-wrap">
            <div class="flex flex-wrap">
                <div class="flex flex-wrap" v-for="(tag,key) in this.tags_titles">
                    <span class="bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ tag }}</span>

                </div>
            </div>
            <h1 tabindex="0"
                class="focus:outline-none text-lg text-gray-900 font-semibold tracking-wider">
                {{ this.title }}</h1>
            <p       tabindex="0"
               class=" mb-4 focus:outline-none text-gray-700 text-sm lg:text-base lg:leading-8 pr-4 tracking-wide mt-2">
                {{ this.short_description }}
            </p>
            <div class="flex justify-between  ">
                <div class="flex ">
                    <button class="w-[40px] h-[40px] self-center" >
                        <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 600 600" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g><path d="M245.204,101.267C67.171,101.267,0,245,0,245s66.763,143.733,244.796,143.733C422.829,388.733,490,245,490,245 S423.238,101.267,245.204,101.267z M244.796,373.421c-146.393,0-212.367-101.053-227.506-128.333 c15.249-26.796,82.733-128.508,227.914-128.508c146.514,0,212.475,101.22,227.543,128.4 C457.578,272.203,391.313,373.421,244.796,373.421z"/><path d="M245.003,146.124c-54.521,0-98.881,44.352-98.881,98.873c0,54.521,44.36,98.881,98.881,98.881s98.873-44.36,98.873-98.881 C343.876,190.477,299.524,146.124,245.003,146.124z M245.003,328.566c-46.08,0-83.568-37.489-83.568-83.568 c0-46.072,37.489-83.561,83.568-83.561c46.072,0,83.561,37.489,83.561,83.561C328.564,291.077,291.075,328.566,245.003,328.566z"/><path d="M245.003,175.583c-38.281,0-69.422,31.141-69.422,69.415c0,38.274,31.141,69.415,69.422,69.415 c38.274,0,69.415-31.141,69.415-69.415C314.417,206.724,283.277,175.583,245.003,175.583z M245.003,299.1 c-29.833,0-54.11-24.27-54.11-54.102c0-29.832,24.277-54.102,54.11-54.102s54.102,24.27,54.102,54.102 C299.105,274.83,274.835,299.1,245.003,299.1z"/><path d="M245.003,206.679c-21.13,0-38.326,17.189-38.326,38.319c0,21.129,17.197,38.326,38.326,38.326s38.319-17.197,38.319-38.326 C283.321,223.868,266.132,206.679,245.003,206.679z M245.003,268.011c-12.688,0-23.014-10.326-23.014-23.014 c0-12.688,10.325-23.006,23.014-23.006c12.688,0,23.006,10.318,23.006,23.006C268.009,257.686,257.691,268.011,245.003,268.011z"/></g></svg>
                    </button>
                    <h1 class="mt-1.5">{{ this.counter_views }}</h1>
                </div>

                <div class="flex ">
                <h1 class="mt-1.5 mr-2">{{ this.new_count_likes }}</h1>
                <button
                    @click="like_article()"
                    class="w-[40px] h-[40px] mb-0 flex  "  >
                    <svg viewBox ="0 0 150 150" xmlns="http://www.w3.org/2000/svg"><g id="Layer_40" data-name="Layer 40"><path d="m82.815 32.255h-25.1v-18.721a6.757 6.757 0 0 0 -12.552-3.477l-17.5 29.169h-22.663a2 2 0 0 0 -2 2v50a2 2 0 0 0 2 2h66.942a14.158 14.158 0 0 0 13.449-9.693l10.873-32.619a14.177 14.177 0 0 0 -13.449-18.659zm-56.015 56.969h-10.41a2.011 2.011 0 0 0 .047-.421v-45.577h10.363zm-19.8-45.998h5.437v45.574a2.011 2.011 0 0 0 .046.421h-5.483zm85.469 6.423-10.869 32.618a10.163 10.163 0 0 1 -9.654 6.957h-41.146v-47.444l17.8-29.666a2.758 2.758 0 0 1 5.122 1.42v20.721a2 2 0 0 0 2 2h27.1a10.176 10.176 0 0 1 9.654 13.394z"/></g></svg></button>
                </div>

            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
