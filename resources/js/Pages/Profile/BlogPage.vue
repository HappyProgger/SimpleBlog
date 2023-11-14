<script>
import BlogContent from "@/Components/Arcticles/BlogContent.vue";
import Navbar from '@/Components/Navbar.vue';
import Footer from "@/Components/Footer.vue";
import BlogContent from "@/Components/Arcticles/BlogContent.vue";
export default {
    name: "BlogPage",
    components: {
        Navbar: Navbar,
        Footer: Footer,
        BlogContent: BlogContent
    },
}
</script>

<template>
    <Navbar></Navbar>
    <BlogContent></BlogContent>
    <Footer></Footer>
</template>

<style scoped>

</style>
