<script>
export default {
    name: "BlogContent"
}
</script>

<template>
    <section id="content" class="prose lg:prose-2xl container mx-auto font-sans px-4 py-2 my-2">
        <article>
            <header class="w-full mx-auto">
                <p class="flex items-center"><button class="text-orange-800 text-xl"><i class="fa-solid fa-chevron-left text-md"></i> <span class="underline">Back to Blog</span></button></p>
                Friday, <time pubdate datetime="2022-10-14" title="August 28th, 2011">October 14th, 2022</time>
                <h1 style="margin-bottom: 0;">Washington Has Ridiciously Large Pumpkins</h1>
            </header>
            <footer class="w-full mx-auto">
                <div style="height: 1.5em; margin: 2em 0 2.5em 0" class="flex items-center">
                    <img alt="Riley Egge depicated with a large curley black mustache" height="60" width="60" class="rounded-full flex mr-1.5 border-orange-500" src="https://avatars.dicebear.com/api/open-peeps/rileyiscoolasddasff.svg">
                    <div class="flex items-center">
                        <address class="author">By <a rel="author" class="url fn n" href="/author/john-doe">Riley Egge</a></address>
                    </div>
                    <div class="flex flex-1 justify-end items-center">
                        <div class="mx-4">
                            <a aria-label="Accessibility help" href="#" class="no-underline px-2 py-1 bg-orange-800 hover:bg-orange-900 text-gray-100 rounded text-sm md:text-base">Accessibility</a>
                        </div>
                        <div>
                            <a aria-label="Share this article" href="#">
                                <i class="fa-solid fa-share-from-square text-2-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
            <figure>
                <img class="rounded shadow" alt="A vintage, blue, slightly rusted truck with a woooden bed overflowing with pumpkins on an gloomy overcast day. Surounding the truck are beautiful orange and white pumpkins varrying from small to large." src="https://images.unsplash.com/photo-1571030701211-aa96da577e91?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
                <figcaption class="italic text-lg md:text-sm">A vintage truck filled with pumpkins on a typical, gloomy Washington day.</figcaption>
            </figure>
            <div class="md:px-8">

                <h2 style="margin-top: 0; margin-bottom: .5em">Secondary Title</h2>
                <p>I'm baby four dollar toast taxidermy viral disrupt, 3 wolf moon raw denim tousled ethical aesthetic church-key pabst chia. Hammock vaporware street art la croix praxis coloring book bitters, bodega boys leggings art party. Non tote bag id before they sold out aute cornhole ut activated charcoal nisi in la croix unicorn roof party snackwave yr. Waistcoat bespoke labore chicharrones, celiac aliquip raw denim. Fanny pack kinfolk coloring book actually pug, bespoke street art aute minim nulla squid scenester tousled cred umami. Aliqua stumptown yr roof party gatekeep DSA. Tote bag squid lo-fi venmo laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. </p>
                <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. </p>
                <p>Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. </p>
                <h2>Laurem Ipsom</h2>
                <img alt="image of a happy dog with short black hair staring up at his owner" class="rounded" src="https://picsum.photos/id/237/1200/500">
                <p><b>Nam nec ante</b>. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. <b>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</b>. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. </p>
                <p>Ut ultrices ultrices enim. Curabitur sit amet mauris. <b>Sed non quam</b>. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. </p>
                <section class="mb-6">
                    <h2>More Resources</h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean magna nulla, semper nec bibendum nec, aliquet a augue. Integer laoreet elit vel est finibus, ac fringilla dolor mollis. Sed eget faucibus tellus. Duis rutrum ullamcorper nisi, nec faucibus nisi faucibus sed.
                    <div class="mb-6 pb-2">
                        <ul class="text-lg ml-2">
                            <li><a href="#" class="text-orange-900 font-semibold ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#" class="text-orange-900 font-semibold ml-2">Ipsom text</a></li>
                            <li><a href="#" class="text-orange-900 font-semibold ml-2">Adipiscing elit.</a></li>
                            <li><a href="#" class="text-orange-900 font-semibold ml-2">Dolor sit amet,adipiscing elit.</a></li>
                        </ul>
                    </div>
                    <div class="mb-6 pb-2">
                        <ul class="flex justify-center items-center list-none text-lg">
                            Share Post
                            <li><i style="font-size: 1.4em;" class="fa fa-brands fa-facebook hover:text-indigo-800 mr-2"></i></li>
                            <li><i style="font-size: 1.4em;" class="fa fa-brands fa-instagram mr-2 hover:text-indigo-800"></i></li>
                            <li><i style="font-size: 1.4em;" class="fa fa-brands fa-twitter hover:text-indigo-800"></i></li>
                        </ul>
                    </div>
                    <ul class="list-none inline">
                        Topics
                        <li class="inline"><a aria-label="Articles related to pumpkins" class="no-underline bolder text-base px-2 py-1 rounded text-gray-100 bg-gradient-to-r from-orange-700 to-slate-700 hover:from-slate-700 hover:to-orange-700">Pumpkins</a> </li>
                        <li class="inline"><a aria-label="Articles related to Washington State" href="#" class=" bolder text-base no-underline px-2 py-1 rounded text-gray-100 bg-gradient-to-r from-orange-700 to-slate-700 hover:from-slate-700 hover:to-orange-700">Washington State</a></li>
                    </ul>
                </section>
            </div>
        </article>
    </section>
</template>

<style scoped>

</style>
