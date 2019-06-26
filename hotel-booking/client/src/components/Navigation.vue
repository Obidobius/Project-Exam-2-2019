<template>
<div>          <!--Mobile-->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn xNav" v-on:click="closeNav()">&times;</a>
            <a class="smallNav" v-on:click="changeHome()">Home</a>
            <a class="smallNav" v-on:click="changeAllHotels()">Hotels</a>
            <a class="smallNav" v-on:click="changeContact()">Contact</a>
        </div>
        <span id="iconNav"  v-on:click="openNav()">&#9776;</span>
               <!--Desktop-->
    <div class="navigation row menu">
        <div class=" navigation--contain container col-md-12 ">
            <button class="navigation--contain__button shadow-none" type="submit" v-on:click="changeHome()">Home</button>
            <button class="navigation--contain__button shadow-none" type="submit" v-on:click="changeContact()">Contact</button>
            <button class="navigation--contain__button shadow-none" type="submit" v-on:click="changeAllHotels()">Hotels</button>
       </div>
    </div>
</div>

   
</template>

<script>
export default {
    name:"Navigation",
    methods:{
        changeHome:function(){
            this.$router.push("/");
        },
        changeAllHotels:function(){
            this.$router.push("/Hotels");
        },
        changeContact:function(){
            this.$router.push("/Contact");
        },
        changeSpecific(){
            this.$router.push("/specific");
        },        
         openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            },
        closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        },
    }

}
</script>

<style lang="scss" scoped>
$formColor: #fafafa;
$BorderColor: #545252;
$submitColor: #e6e7e8;
@media only screen and (max-width: 770px) {
      .navigation--contain{
    display: none;
  }
.navigation{
         background-image: none;
}
  .loggedinFormContainer{
  padding-top: 15vh;
  justify-content: center !important;
  margin: auto;
  &__formContainer{
       height: 350px;
    background-color: $formColor;
    padding: 70px;
    padding-bottom: 10px;
    border: $BorderColor solid 1px;
    border-radius: 5px;
  //  max-width: 80%;
    margin: auto;
  }
  &__button{
    background-color: $submitColor;
    color: red;
    margin-bottom: 30px;
    margin-right: 13px;
    margin-left: 13px;
    -webkit-box-shadow: 2px 2px 2px 0px lightGray;
    -moz-box-shadow: 2px 2px 2px 0px lightGray;
    box-shadow: 2px 2px 2px 0px lightGray;
    transition: all 0.3s ease-in-out;
    }
}

.menu{
    padding-top: 12 !important;
}
#iconNav{
    float: left;
    font-size:50px;
    cursor:pointer;
    padding-left: 15px;
}
.xNav{
    color: white;
    font-size: 40px;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.sidenav .smallNav {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
  text-align: left;
}
.sidenav .smallNav:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 50px;
  margin-left: 50px;
}
  #iconNav{
      background-color: white !important;
      padding-right: 10px !important;
  }
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

@media only screen and (min-width: 771px) {
    //Removes blue border around buttons when clicking/clicked
.navigation--contain__button:active, .navigation--contain__button:focus,
.navigation--contain__button:active:focus {
  outline:none !important;
}


//--------//NAVIGATION BAR-------//
// Reference for navigation https://paulund.co.uk/css-animation-link-underline
.navigation{
        width: 100%;
        margin: auto !important;
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: right;
        -webkit-text-align:right;
        -moz-text-align:right;
        background-image: url('../../icons/addLogo.svg');
        background-size: 130px;
        background-repeat: no-repeat;
        background-position: left;
        &--contain{
            &__button{
              margin-left: 10px;
              position: relative;
              color: gray;
              border: none;
              padding-left: 30px;
              padding-right: 30px;
              transition: 0.9s ease-in-out;
              background-color: white;
            }
            &__button:before{
              content: "";
              position: absolute;
              width: 100%;
              height: 2px;
              color: black;
              bottom: 0;
              left: 0;
              visibility: hidden;
              transform: scaleX(0);
              transition: all 0.4s ease-in-out;
            }
            &__button:hover:before{
              transition: 0.7s;
              color: white;
              border-bottom: solid black 1px; 
              visibility: visible;
              transform: scaleX(1);
              
          }
          &__button:hover{
              color:black;
              transition: 0.7s;
          }
          &__button:active{
              border-width: 0px;
              color:black;
              font-size: 90%;
              
          }
        }
  }
.mobile{
    display: none
}
    #mySidenav{
        display: none !important;
    }
    #iconNav{
        display: none !important;
    }

  }
</style>
