<template lang="pug">
span
    Menu
    .container
        .header
         .h5 Отзывы:
        .content
            p Отзывов пока нет
    Footer
</template>
<script>
import Footer from "../components/main/Footer.vue";

export default {
  components: {
    Footer,
    Menu: () => import("../components/Menu"),
  },
};
</script>
<style lang="scss" scoped>
  .content {
    padding: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    p {
        font-size: 24px;
    }
  }
  .banner{
    margin: 24px auto;
  }
</style>