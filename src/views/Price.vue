<template>
  <span>
    <Menu />
    <div class="loader" v-if="loader" />
    <a v-if="failed" class="error" href="../assets/price.pdf" download>Извините, загрузка не удалась, надмите что бы скачать файл!</a>
    <iframe
      class="fullscreen"
      src="https://onedrive.live.com/embed?cid=10FD6FF67B64984D&resid=10FD6FF67B64984D%211962&authkey=AMtivcwkscsht_g&em=2"
      frameborder="0"
      scrolling="no"
      @load="load"
      @error="error"
    ></iframe>
  </span>
</template>

<script>
export default {
  components: {
    Menu: () => import("../components/Menu.vue"),
  },
  data: () => {
    return {
      loader: true,
      failed: false,
    };
  },
  methods: {
    load() {
      this.loader = false;
    },
    error() {
      this.failed = true;
    },
  },
};
</script>

<style scoped>
.fullscreen {
  position: absolute;
  width: 100%;
  height: 100vh;
  z-index: -1;
}
@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
.loader {
  width: 50px;
  height: 50px;
  border-radius: 25px;
  border: 4px black solid;
  border-bottom: none;
  border-left: none;
  animation: rotate 3s linear infinite;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.error {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

