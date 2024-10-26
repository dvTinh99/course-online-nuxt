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
        <SectionsCallToAction/>
        <SaveModal v-show="showModal" v-model:showModal="showModal"/>

        <a href="tel:0522339417">
          <button class="btn-floating phone">
            <img src="https://i.imgur.com/FZuns9L.png" alt="Phone">
            <span>(84) 0522339417</span>
          </button>
        </a>

        <!-- <a href="https://api.whatsapp.com/send?phone=5500912341234" target="_blank">
          <button class="btn-floating whatsapp">
            <img src="https://i.imgur.com/LBW2Lso.png" alt="WhatsApp">
            <span>(00) 9 1234-1234</span>
          </button>
        </a> -->
    </div>
</template>
<style scoped>
/* Base */
.btn-floating:hover img {
  margin-bottom: -3px
}

.btn-floating {
    position: fixed;
    right: 25px;
    overflow: hidden;
    width: 50px;
    height: 50px;
    border-radius: 100px;
    border: 0;
    z-index: 9999;
    color: white;
    transition: .2s;
}

.btn-floating:hover {
    width: auto;
    padding: 0 20px;
    cursor: pointer;
}

.btn-floating span {
    font-size: 16px;
    margin-left: 5px;
    transition: .2s;
    line-height: 0px;
    display: none;
}

.btn-floating:hover span {
    display: inline-block;
}

/* Phone */
.btn-floating.phone {
    bottom: 85px;
    background-color: #760f10;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-floating.phone:hover {
    background-color: #c03421;
}

/* WhatsApp */
.btn-floating.whatsapp {
    background-color: #34af23;
    bottom: 25px;
}

.btn-floating.whatsapp:hover {
    background-color: #1f7a12
}
</style>