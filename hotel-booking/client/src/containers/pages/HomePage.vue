<template>
<div class="indexPage">
    <div class="container mainBackground">
        <img src="../../../icons/logo.svg" alt="Logo Icon Holidaze" class="indexLogo" v-on:click="changeAllHotels()">
        <div class="row text-center">
            <div class="container row searches">
                <searchbar v-on:change-full-name="childComponentChange"></searchbar>
                <div id="sbSugjest" class="sugjestions" >     
                    <!--Differet input type-->
                    <router-link class="result" v-for="hotel in filteredHotels" v-bind:key="hotel.establishmentName"
                        :to="`/specific/${hotel.id}`"><ul><li class="hotelSugjestionBar" >{{hotel.establishmentName}}</li></ul> 
                    </router-link>    
                </div>
            </div>
            <div class="searchContainer">
                <br>
                <h2 class="allH" v-on:click="changeAllHotels()">All Hotels</h2>
            </div>
        </div>
    </div>
    <p class="directLinks" v-on:click="adminPage()" >Admin Login</p>
</div>
</template>
<script>
import Searchbar from '../../components/Searchbar';
export default {
    name:"HomePage",
    components:{
        Searchbar
    },
     data(){
        return{
            allHotels:[],
            hotelsLength: 0,
            filteredHotels: [],
        }
    },
     methods:{
         changeSpecific(id){
            this.$router.push({path:'/specific/${id}', params: { id: id}});
        },
        adminPage:function(){
            this.$router.push("/admin-login");
        },
        changeAllHotels:function(){
            this.$router.push("Hotels");
        },
        childComponentChange(hotelSearchCriteria){
            this.filteredHotels = this.allHotels.filter((value) => {    
                return value.establishmentName.toLowerCase().includes(hotelSearchCriteria.toLowerCase().trim())
            })
        },
    },
        mounted() {
        fetch('establishments.json')
        .then((response) => {return response.json()})
        .then((results) => {           
            this.allHotels = results;
        })
        .catch(err =>{
            console.log(err);
        });
    },

}
</script>

<style lang="scss" scoped >
$formColor: #fafafa;
$BorderColor: #545252;


.indexPage{
    background-image: url('../../..//images/index.jpg'); // Photo by Manuel Moreno on Unsplash
    width: 100%;
    min-height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    margin:auto;
}
.indexLogo{
  min-width: 330px;
  max-width: 900px;
  width: 60%;
  margin-top: 30px;
}
.directLinks{
  position: fixed;
  bottom: 0;
  width:100%;
  text-align: center;
  color:white;
   cursor: pointer;
}
.directLinks:hover{
  font-weight: bolder;
  font-size: 1.3rem;
}
div:empty {
   display: none;
}
ul:empty{
    display: none;
}
ul{
    margin: auto;
    list-style: none;
     border-bottom: 1px solid $BorderColor;
}
.searches{
    margin: auto !important;
}
.result{
    text-align: left;
    display: block;
    padding-left: 1px;
    color:inherit;
    font-size: 2rem;
    font-family: 'Roboto', sans-serif;
    padding-top: 5px;
    margin: auto;
    cursor: pointer;
}
.sugjestions{
    min-height: 60px;
    background-color: white;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border: solid 1px gray;
    position: relative;
    width: 100%;
    margin-left: 15px;
    margin-right: 15px;
}
.hotelSugjestionBar{
    margin-bottom: 4px;
}
.allH{
   color: black !important;
    transition: all 0.2s ease-in-out;
}
.allH:hover{
    font-size: 35px;
    cursor: pointer;
}
.searchContainer{
    width: 100%;
    margin: auto;
    left: 0; 
    right: 0; 
    margin-left: auto; 
    margin-right: auto;
    padding-top: 2vh;
}
.directLinks{
  position: fixed;
  bottom: 0;
  width:100%;
  text-align: center;
  color:white;
   cursor: pointer;
    transition: all 0.2s ease-in-out;
}
.directLinks:hover{
  font-weight: bolder;
  font-size: 1.3rem;
}
</style>
