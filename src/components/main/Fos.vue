<template>
  <div class="form">
    <p data-aos="fade-right">Если у вас есть вопрос, мы вам перезвоним!</p>
    <form @submit.prevent="submit" data-aos="fade-right">
      <input type="text" placeholder="Имя" v-model="name" required />
      <input type="tel" placeholder="Телефон" v-model="phone" required />
      <button type="submit" name="submitform" class="inputButton">
        Отправить
      </button>
    </form>
    <p data-aos="fade-right" class="req">{{ sub }}</p>
  </div>
</template>
<script>
export default {
  data: () => ({
    name: "",
    phone: "",
    sub: "Отправляя данные вы соглашаетесь на их обработку",
  }),
  methods: {
    async submit() {
      await fetch("send.php", {
        method: "post",
        headers: {
          "Content-type": "application/x-www-form-urlencoded; charset=UTF-8",
        },
        body: "phone=" + this.phone + "&name=" + this.name,
      })
        .then(function (data) {
          console.log("Данные успешно отправлены", data);
        })
        .catch(function (error) {
          console.log("Ошибка отправки данных", error);
          this.sub = "Ошибка отправки данных";
          this.name = this.phone = "";
        });
      this.sub = "Данные успешно отправлены";
      this.name = this.phone = "";
    },
  },
};
</script>

<style lang="scss">
.form {
  min-height: 150px;
  background-color: #292929;
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 10px;
  p {
    text-align: center;
    font-size: 30px;
    color: white;
    padding: 10px;
  }
}
.req {
  font-size: 18px !important;
}
form {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}
input[type="text"],
input[type="tel"] {
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
  font-family: "Yanone Kaffeesatz", sans-serif;
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
  outline: none;
}
button {
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
  font-family: "Yanone Kaffeesatz", sans-serif;
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
  color: black;
  background-color: white;
  margin-bottom: 20px;
  outline: none;
}
</style>