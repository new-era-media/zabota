<template>
  <div class="container">
    <div class="header">
      <p data-aos="fade-right" class="h5" id="usl">
        Мы предоставляем следующие типы услуг:
      </p>
    </div>
    <div class="infoBlock" data-aos="fade-up">
      <div class="info one"></div>
      <div class="info two"></div>
      <div class="info three"></div>
      <div class="info four"></div>
      <div class="info five"></div>
      <div class="info six"></div>
    </div>
    <div class="header">
      <p class="h5" data-aos="fade-right" id="OMS">
        Так же мы производим лечение по полису ОМС, для этого вам необходим
        только:
      </p>
    </div>
    <div class="infoBlock" data-aos="fade-up">
      <div class="pasport"></div>
      <div class="polis"></div>
      <div class="snils"></div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.infoBlock {
  padding-top: 3rem;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  max-width: 700px;
  flex-wrap: wrap;
}
.info {
  position: relative;
  width: 150px;
  height: 150px;
  margin: 30px;
  background-color: #fff !important;
  border-radius: 15px;
  box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.5);
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
  &::after {
    position: absolute;
    top: -40px;
    left: 0;
    border-radius: 20px;
    width: 100%;
    height: 100px;
    font-size: 22px;
    background-color: #292929;
    z-index: -1;
    display: flex;
    padding-top: 10px;
    justify-content: center;
    color: white;
  }
  &:hover {
    box-shadow: 0 2px 12px 3px rgba(0, 0, 0, 0.5);
  }
}
.one {
  background: url("../../assets/img/koronki.jpg") center center no-repeat;
  position: relative;
  background-size: cover;
  &::after {
    content: "Ортопедические";
  }
}
.two {
  background: url("../../assets/img/breketi.jpg") center center no-repeat;
  position: relative;
  background-size: cover;
  &::after {
    content: "Ортодонтические";
  }
}
.three {
  background: url("../../assets/img/slide4.jpg") center center no-repeat;
  background-size: cover;
  position: relative;
  &::after {
    content: "Хирургические";
  }
}
.four {
  background: url("../../assets/img/udalenie-zubov_.jpg") center center no-repeat;
  position: relative;
  &::after {
    content: "Терапевтические";
  }
}
.five {
  background: url("../../assets/img/air.jpg") center center no-repeat;
  background-size: contain;
  position: relative;
  &::after {
    content: "Проф. гигиена";
  }
}
.six {
  background: url("../../assets/img/chistka-ultrazvuk11.jpg") center center no-repeat;
  background-size: cover;
  position: relative;
  &::after {
    font-size: 18px;
    content: "Ультрозвуковая чистка";
  }
}
.pasport {
  width: 180px;
  height: 250px;
  border-radius: 20px;
  margin: 30px;
  background: url("../../assets/img/pasport.jpg") center center no-repeat;
  background-size: contain;
  position: relative;
  &::after {
    content: "Паспорт";
    position: absolute;
    top: -40px;
    left: 2px;
    border-radius: 20px;
    background-color: #292929;
    color: white;
    display: flex;
    justify-content: center;
    padding-top: 10px;
    width: 177px;
    height: 100px;
    font-size: 22px;
    z-index: -1;
  }
}
.polis {
  width: 180px;
  height: 250px;
  border-radius: 20px;
  margin: 30px;
  background: url("../../assets/img/Полис_ОМС_РФ.jpg") center center no-repeat;
  background-size: contain;
  position: relative;
  &::after {
    content: "Полис";
    position: absolute;
    top: -40px;
    left: 2px;
    border-radius: 20px;
    background-color: #292929;
    color: white;
    display: flex;
    justify-content: center;
    padding-top: 10px;
    width: 176px;
    height: 100px;
    font-size: 22px;
    z-index: -1;
  }
}
.snils {
  width: 250px;
  height: 200px;
  margin: 30px;
  background: url("../../assets/img/snils.jpg") center bottom no-repeat;
  background-size: contain;
  position: relative;
  border-radius: 20px;
  &::after {
    content: "СНИЛС";
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 20px;
    background-color: #292929;
    color: white;
    display: flex;
    justify-content: center;
    padding-top: 10px;
    width: 100%;
    height: 100px;
    font-size: 22px;
    z-index: -1;
  }
}
</style>