<template>
  <div>
    <footer>
      <div class="contacts">
        <div class="headFoot">
          <h2>Режим и график работы:</h2>
          <p>Понедельник-суббота с 10:00 до 20:00</p>
        </div>

        <div class="headFoot">
          <h2>Адрес организации:</h2>
          <p>
            ул. Московская, 11, Александровское, Ставропольский край, 356300
          </p>
        </div>

        <div class="headFoot">
          <h2>Телефон:</h2>
          <p><a href="tel:+79034159522">+7-(903)-415-95-22</a></p>
        </div>

        <div class="headFoot icons">
          <a
            href="https://www.instagram.com/centr_zdorovya26/"      
            target="_blank"
          >
            <div class="icon1"></div>
          </a>
          <a href="mailto:center.zdorovya@mail.ru" target="_blank">
            <div class="icon2"></div>
          </a>
        </div>
      </div>
      <div class="links">
        <div class="link">
          <a target="_blank" href="https://www.rosminzdrav.ru/ru">
            <img src="@/assets/img/1.png" alt />
            <p>министерство здравоохранения российской федерации</p>
          </a>
        </div>
        <div class="link">
          <a target="_blank" href="http://www.mz26.ru/">
            <img src="@/assets/img/2.png" alt />
            <p>министерство здравоохранения ставропольского края</p>
          </a>
        </div>
        <div class="link">
          <a target="_blank" href="http://ffoms.ru/">
            <img src="@/assets/img/3.png" alt />
            <p>федеральный фонд обязательного медицинского страхования</p>
          </a>
        </div>
        <div class="link">
          <a target="_blank" href="http://26reg.roszdravnadzor.ru/">
            <img src="@/assets/img/4.png" alt />
            <p>территориальный орган росздравнадзора по ставропольскому краю</p>
          </a>
        </div>
        <div class="link">
          <a target="_blank" href="https://tfomssk.ru/">
            <img src="@/assets/img/5.png" alt />
          </a>
        </div>
        <div class="link">
          <img src="@/assets/img/1.png" alt />
          <div>
            <p>
              НЕЗАВИСИМАЯ ОЦЕНКА КАЧЕСТВА УСЛОВИЙ ОКАЗАНИЯ УСЛУГ МЕДИЦИНСКИМИ
              ОРГАНИЗАЦИЯМИ
            </p>
            <a
              target="_blank"
              class="link5"
              href="http://anketa.rosminzdrav.ru/staticmojustank/11905#reviews"
              >Оценить</a
            >
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>
<style lang="scss" scoped>
.icon1 {
  margin: 0 10px 0 10px;
  width: 50px;
  height: 80px;
  background-size: contain !important;
  background: url("../../assets/img/instagram.png") center center no-repeat;
}
.icon2 {
  margin: 0 10px 0 10px;
  width: 50px;
  height: 80px;
  background-size: contain !important;
  background: url("../../assets/img/gmail.png") center center no-repeat;
}
.contacts {
  display: flex;
  text-align: center;
  flex-direction: column;
  max-width: 500px;
}
footer {
  background-color: #292929;
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
  font-family: "Yanone Kaffeesatz", sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  color: white;
}
.icons {
  display: flex;
  align-items: center;
  justify-content: center;
}
.headFoot {
  padding: 10px;
}
.headFoot h2 {
  font-size: 20px;
}
.headFoot p {
  font-size: 18px;
}
.links {
  max-width: 1100px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  .link {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    text-transform: uppercase;
    font-size: 18px;
    max-width: 300px;
  }
  .link5 {
    margin: 0 auto;
    color: #ec3035;
    text-decoration: none;
    border: 1px solid #ec3035;
    padding: 5px;
    display: block;
    text-align: center;
    font-size: 10px;
    width: 85px;
  }
}
a {
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  text-decoration: none;
}
img {
  height: 100px;
  padding: 10px;
}
p {
  text-align: center;
}
@media screen and (max-width: 767px) {
  .links {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: nowrap;
    flex-direction: column;
  }
}
</style>