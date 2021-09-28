<template>
  <div class="app">
    <div class="header">
      <div class="h5" data-aos="fade-right" id="about">О нас</div>
    </div>
    <div class="text" data-aos="fade-up">
      <p class="info">
        Клиника современной стомотологии <strong>"ООО" Центр Здоровья"</strong>,
        мы предлагаем своим пациентам широкий спектр стоматологических услуг от
        лечения кариеса до установки имплантов.
      </p>
      <p class="info">
        В нашей клинике установлено новейшее оборудование и используются
        материалы высочайшего качества, в совокупности с квалификацией и опытом
        наших специалистов, мы достигаем высочайших результатов при оказании
        услуг
      </p>
      <p class="info">
        Наш адрес:
        <strong
          >Ставропольский край, c. Александровское, ул. Московская, 11</strong
        >
      </p>
      <p class="info">Время работы: <strong>9:00 - 20:00</strong></p>
      <p class="info">Наша почта: <strong>center.zdorovya@mail.ru</strong></p>
    </div>
  </div>
</template>
<style lang="scss" scoped >
.app {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.header {
  width: 100%;
  background-color: #292929;
  box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.3),
    10px 5px 5px rgba(0, 0, 0, 0.3);
}
.h5 {
  position: relative;
  text-align: center;
  font-weight: 600;
  padding: 3rem;
  font-family: "Yanone Kaffeesatz", sans-serif;
  font-size: 36px;
  color: white;
  &::after {
    content: "";
    position: absolute;
    bottom: 35px;
    left: 50%;
    transform: translateX(-50%);
    width: 150px;
    height: 2px;
    background-color: white;
    border-radius: 5px;
  }
}
.text {
  max-width: 1100px;
  padding: 3rem;
  .info {
    text-align: center;
    font-size: 24px;
    line-height: 25px;
    margin-bottom: 20px;
    position: relative;
  }
}
</style>