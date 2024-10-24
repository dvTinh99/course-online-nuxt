<script setup lang="ts">
useHead({
  title: 'Podux - Home',
  meta: [
    { name: 'description', content: 'Podux Podcast landing page website.' },
  ],
  link: [
    { rel: 'icon', type: 'image/png', href: '/logo.png' }
  ],
})

const { data, status, error, refresh, clear } = await useApi('/home')
const latestCourse = computed(() => data.value.data.latestCourse)
const popularCourse = computed(() => data.value.data.popularCourse)

</script>
<template>
    <div>
        <SectionsHomeHeroSection/>
        <SectionsHomeLatestPodcast :latestCourse="latestCourse"/>
        <SectionsHomePopularPodcasts :popularCourse="popularCourse"/>
        <SectionsAboutPodux/>
        <SectionsWhyUs/>
        <SectionsCallToAction/>
    </div>
</template>