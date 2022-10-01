<template lang="pug">
  span
    Menu
    circle(fill="transparent" cx="45.714285714285715" cy="45.714285714285715" r="20" stroke-width="5.714285714285714" stroke-dasharray="125.664" stroke-dashoffset="100.53096491487338px" class="v-progress-circular__overlay")
    loader(v-if="preloader" object="#ff9633" color1="#ffffff" color2="#17fd3d" size="5" speed="2" bg="#343a40" objectbg="#999793" opacity="80" name="circular")
    iframe(class="fullscreen" :src="link" frameborder="0" scrolling="no"  @load="load")
</template>

<script>
export default {
  components: {
    Menu: () => import("../components/Menu.vue")
  },
  props:{
      link:{
          type: String
      }
  },
  data: () => {
    return {
      preloader: true,
      failed: false,
    };
  },
  methods: {
    load() {
      this.preloader = false;
    }
  },
};
</script>
