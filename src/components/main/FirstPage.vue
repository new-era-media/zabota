<template>
  <div class="first-container" id="menu">
    <Menu />
    <!-- номер телефона -->
    <a href="tel:89283100101">
      <div class="phone-icon">
        +7-
        <span class="textColor">(928)</span>-310-01-01
      </div>
    </a>
    <div class="firstContainer">
      <h1 class="firstContainerTextOne">
        <span class="textColor">Стоматологическая клиника "Забота"</span>
      </h1>
      <vue-typer
        :text="[
          'Ортопедические услуги',
          'Ортодонтические услуги',
          'Хирургические услуги',
          'Терапевтические услуги',
          'Лечение по ОМС',
        ]"
        :repeat="Infinity"
        :shuffle="false"
        initial-action="typing"
        :pre-type-delay="70"
        :type-delay="70"
        :pre-erase-delay="2000"
        :erase-delay="250"
        erase-style="select-all"
        :erase-on-complete="false"
        caret-animation="blink"
        class="firstContainerTextTwo"
      ></vue-typer>
    </div>
  </div>
</template>
<script>
export default {
  components: {
    Menu: () => import("../Menu.vue")
  },
  methods: {
    menu() {
      this.$refs.menuIcon.classList.toggle("active");
      this.$refs.menu.classList.toggle("activeMenu");
    },
  },
};
</script>
<style lang="scss">
.phone-icon {
  position: fixed;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  right: 0;
  margin: 50px 50px 0 0;
  height: 30px;
  width: auto;
  font-size: 28px;
  color: white;
  z-index: 999;
  text-shadow: 0 0 3px black;
}
.first-container {
  position: relative;
  width: 100%;
  height: 100%;
  min-height: 100vh;
  background: url("../../assets/img/bg.jpg") center center no-repeat;
  background-size: cover;
  // -webkit-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
  // box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
  z-index: 1;
}

.textColor {
  color: white;
  font-weight: bold;
}

.firstContainer {
  width: 100%;
  height: 100vh;
  // min-height: 50vh;
  // height: auto;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.firstContainer .firstContainerTextOne {
  font-family: "Yanone Kaffeesatz", sans-serif;
  margin-top: 70px;
  font-size: 90px;
  color: white;
  padding: 20px;
  text-align: center;
}
.secondContainer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  .btn {
    width: 200px;
    height: 30px;
    border-radius: 30px;
    outline: none;
    border: none;
  }
}
.firstContainerTextTwo {
  margin: 20px;
  font-size: 42px;
  color: white !important;
  padding: 20px;
  text-align: center;
}

.vue-typer .custom.char.typed {
  color: white;
}
.vue-typer .custom.char.selected {
  color: white;
}

.vue-typer .custom.caret.typing {
  background-color: white;
}
.vue-typer .custom.caret.selecting {
  display: inline-block;
  background-color: white;
}
.secondContainer input[type="text"],
.secondContainer input[type="tel"] {
  padding: 12px 10px;
  width: 300px;
  margin: 0 5px 0 5px;
  padding-left: 10px !important;
  padding-right: 10px !important;
  border-radius: 80px;
  text-align: center;
  background-color: transparent;
  border: 1px solid white;
  font-size: 24px;
  color: white;
  margin-bottom: 20px;
}
.secondContainer input[type="text"]:focus,
.secondContainer input[type="tel"]:focus {
  outline: none;
}
.secondContainer input[type="submit"] {
  width: 300px;
  padding: 12px 10px;
  margin: 0 5px 0 5px;
  text-align: center;
  background-color: white;
  border: 1px solid white;
  color: grey;
  font-size: 24px;
  margin-bottom: 20px;
  border-radius: 80px;
}
.secondContainer input[type="submit"]:focus {
  outline: none;
}
.secondContainer ::-webkit-input-placeholder {
  color: white;
}
.secondContainer ::-moz-placeholder {
  color: white;
}
.secondContainer :-moz-placeholder {
  color: white;
}
.secondContainer :-ms-input-placeholder {
  color: white;
}
.secondContainer input:focus::-webkit-input-placeholder {
  color: transparent;
}
.secondContainer input:focus:-moz-placeholder {
  color: transparent;
}
.secondContainer input:focus::-moz-placeholder {
  color: transparent;
}
.secondContainer input:focus:-ms-input-placeholder {
  color: transparent;
}
@media screen and (max-width: 1370px) {
  .firstContainerTextOne {
    font-size: 80px !important;
  }
  .firstContainerTextTwo {
    font-size: 40px !important;
  }
}

@media screen and (max-width: 1199px) {
  .firstContainerTextOne {
    font-size: 70px !important;
  }
  .firstContainerTextTwo {
    font-size: 32px !important;
  }
}

@media screen and (max-width: 991px) {
  .firstContainerTextOne {
    font-size: 60px !important;
  }
  .firstContainerTextTwo {
    font-size: 32px !important;
  }
}

@media screen and (max-width: 767px) {
  .firstContainer {
    min-height: 30vh;
  }
  .firstContainerTextOne {
    font-size: 50px !important;
  }
  .firstContainerTextTwo {
    font-size: 26px !important;
  }
}

@media screen and (max-width: 480px) {
  input[type="text"],
  input[type="tel"] {
    width: 250px !important;
    font-size: 18px !important;
  }
  button[type="submit"] {
    width: 250px !important;
    font-size: 18px !important;
  }
  .firstContainerTextOne {
    font-size: 32px !important;
  }
  .firstContainerTextTwo {
    font-size: 20px !important;
  }
  .phone-icon {
    font-size: 18px;
  }
}
</style>