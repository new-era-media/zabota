<template lang="pug">
#menu
  #navToggle.navBurger.navBurger(
    ref="menuIcon",
    @click="menu",
    role="navigation"
  )
  .menu(ref="menu")
    ul
        router-link(to="/" @click="menu")
            li Главная
        router-link(to="/OMS" @click="menu")
            li OMC
        router-link(to="/staff" @click="menu")
            li Наши врачи
        router-link(to="/about" @click="menu")
            li Об организации
        router-link(to="/formular" @click="menu")
            li Медицинский Формуляр
        router-link(to="/license" @click="menu")
            li Лицензия
        router-link(to="/reviews" @click="menu")
            li Отзывы
        router-link(to="/price" @click="menu")
            li Цены
        router-link(to="/regulations" @click="menu")
            li Правила для пациентов
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