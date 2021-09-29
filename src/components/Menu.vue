<template lang="pug">
#menu
  #navToggle.navBurger.navBurger(
    ref="menuIcon",
    @click="menu",
    role="navigation"
  )
  .menu(ref="menu")
    ul
        a(href="#menu" @click="menu")
            li Главная
        a(href="#about" @click="menu")
            li О нас
        a(href="#usl" @click="menu")
            li Услуги
        a(href="#OMS" @click="menu")
            li ОМС
        router-link(to="/price" @click="menu")
            li Цены
        router-link(to="/staff" @click="menu")
            li Наши врачи
        router-link(to="/about" @click="menu")
            li Об организации
</template>

<script>
export default {
  methods: {
    menu() {
      this.$refs.menuIcon.classList.toggle("active");
      this.$refs.menu.classList.toggle("activeMenu");
    },
  },
};
</script>