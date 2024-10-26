<script setup lang="ts">
import data from '@/configs/data.json'

useHead({
  title: 'Kho khoa hoc',
  meta: [
    { name: 'description', content: 'Cho khoa hoc re nhat viet nam' },
  ],
  link: [
    { rel: 'icon', type: 'image/webp', href: '/logo/icon-notback.webp' }
  ],
  script: [
    { type: 'text/javascript', async: true, src : "https://www.googletagmanager.com/gtag/js?id=G-4F63DE4FTS"},
    { type: 'text/javascript', children: `window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-4F63DE4FTS');`
    }
  ]
})
import { TCourse } from '@/entities/Course';
const popularCourse = data as TCourse
const showModal = ref(false)

</script>
<template>
    <div>
        
        <SectionsHomeHeroSection/>
        <!-- <ClientOnly> -->
        <!-- <SectionsHomeLatestPodcast :latestCourse="latestCourse" /> -->
          <SectionsHomePopularPodcasts :popularCourse="popularCourse" v-model:showModal="showModal"/>
        <!-- </ClientOnly> -->
        <!-- <SectionsAboutPodux/> -->
        <!-- <SectionsWhyUs/> -->
        <!-- <SectionsCallToAction/> -->
        <SaveModal v-show="showModal" v-model:showModal="showModal"/>

        <a href="tel:0522339417">
          <button class="btn-floating phone">
            <img src="https://i.imgur.com/FZuns9L.png" alt="khokhoahoc.site">
            <span>(84) 0522339417</span>
          </button>
        </a>
    </div>
</template>