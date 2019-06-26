<template>
  <div id="app">
        <router-view></router-view>
  </div>
</template>
<script>
  (function () {
        localStorage.setItem('username', 'admin');
        localStorage.setItem('password', 'password');
  })()
export default {
  name: 'app',
  components: {
  }
}
</script>
<style lang="scss">
@import url('https://fonts.googleapis.com/css?family=Alike|Roboto');
@import 'node_modules/bootstrap/scss/bootstrap';
@import 'node_modules/bootstrap-vue/src/index.scss';

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 0px;
}

            //--------//FONT TYPES--------//
h1{
  font-family: 'Alike', serif;
}
h2{
  font-family: 'Alike', serif;
}

p{
  font-family: 'Roboto', sans-serif;
}
h3{
  font-family: 'Roboto', sans-serif;
}
h5{
  font-family: 'Roboto', sans-serif;
}
                  //--------VARIABLES--------//
$BorderColor: #545252;
$inputField: #fafafa;
$trueBlack: #000000;
$formColor: #fafafa;
$submitColor: #e6e7e8;
$submitHover: #545252;


                            //--------------------------------ALL PAGES--------------------------------//
                                    //----------LOGIN PAGE-----------//


</style>
