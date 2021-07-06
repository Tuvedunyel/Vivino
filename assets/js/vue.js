const vue = new Vue({
  mounted() {
    axios
      .get("libraries/controllers/getData.php")
      .then((res) => console.log(res));
  },
}).$mount("#vue-app");
