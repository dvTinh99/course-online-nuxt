<script setup lang="ts">
import data from '@/configs/data.json'

useHead({
  title: 'Podux - Home',
  meta: [
    { name: 'description', content: 'Podux Podcast landing page website.' },
  ],
  link: [
    { rel: 'icon', type: 'image/png', href: '/logo.png' }
  ],
})
import { TCourse } from '@/entities/Course';
const popularCourse = data as TCourse
const showModal = ref(true)

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
        <SectionsCallToAction/>
        <SaveModal v-show="showModal" v-model:showModal="showModal"/>
    </div>
</template>