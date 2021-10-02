<template>
  <div id="app">
    <FirstPage />
    <MainInfo />
    <AboutUs />
    <Fos />
    <Map />
    <Footer />
  </div>
</template>

<script>
import AboutUs from "../components/main/AboutUs.vue";
import FirstPage from "../components/main/FirstPage.vue";
import Footer from "../components/main/Footer.vue";
import Fos from "../components/main/Fos.vue";
import MainInfo from "../components/main/MainInfo.vue";
import Map from "../components/main/Map.vue";

export default {
  components: { AboutUs, FirstPage, Footer, Fos, MainInfo, Map }
};
</script>