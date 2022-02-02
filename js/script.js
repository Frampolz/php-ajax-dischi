const app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!',
    albums: [],
  },
  created() {
    //chiamata axios del file json
    axios.get('http://localhost/php-ajax-dischi/server/controller-api.php')
  .then(function (response) {
    // handle success
   this.albums = response.data.results;
   console.log(this.albums);
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  });
  }
});