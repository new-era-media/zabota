<template lang="pug">
  .page
    Menu
    iframe(style="width: 99vw; height: 99vh" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?resid=10FD6FF67B64984D%211971&authkey=%21AIITJeOza5PknWE&em=2&wdAllowInteractivity=False&Item='%D0%A1%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0%201'!A8%3AF264&wdHideGridlines=True&wdDownloadButton=True&wdInConfigurator=True&wdInConfigurator=True&edesNext=false&ejss=false")
</template>

<script>
import PdfLoader from '../components/PdfLoader.vue'
export default {
  components: {
    PdfLoader,
    Menu: () => import("../components/Menu.vue")
  },
};
</script>

