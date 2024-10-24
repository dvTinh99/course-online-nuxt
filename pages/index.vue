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

const data = await useApi('/home')
const latestCourse = computed(() => data.data.latestCourse)
const popularCourse = computed(() => data.data.popularCourse)

</script>
<template>
    <div>
        <SectionsHomeHeroSection/>
        <ClientOnly>
          <SectionsHomeLatestPodcast :latestCourse="latestCourse" />
          <SectionsHomePopularPodcasts :popularCourse="popularCourse"/>
        </ClientOnly>
        <SectionsAboutPodux/>
        <SectionsWhyUs/>
        <SectionsCallToAction/>
    </div>
</template>