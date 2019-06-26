<template>
    <div class="all">
        <navigation class="navs"></navigation>
        <div class="displayPage">
            <a name="top"></a>
        </div>
            <div class="container row searches">
                <searchbar class="test" v-on:change-full-name="childComponentChange" style="width:100%;"></searchbar>
                <div id="sbSugjest" class="sugjestions">       
                <!--Search-->
                    <router-link class="result" v-for="hotel in filteredHotels" v-bind:key="hotel.establishmentName"
                    :to="`/specific/${hotel.id}`"><ul><li >{{hotel.establishmentName}}</li></ul> 
                    </router-link>
                </div>
            </div>
        <br>
        <div class="container hotelList">
            <div class="row col-md-12" style="margin:0;">
                <div class="col-md-6 col-sm-12 cards" v-for="hotel in allHotels" v-bind:key="hotel.id">
                    <div class="C">
                        <div class="col-md-12 framing Img"> 
                            <img v-bind:src="hotel.imageUrl" alt="" class="img-fluid Img--image">
                        </div>
                        <div class="cards--allHotels__container row">
                      
                        <div class="col-md-12 ">
                            <h2 class="hotelTitle">{{hotel.establishmentName}} </h2>
                              <hr>
                            <div class="col-md-12 row" style="margin:auto;">
                                <div class="col-md-8 col-ms-12 col-sm-12 two">
                                    <p class="two__information">{{hotel.description}}</p>
                                </div>
                                <div class="col-md-4 three">
                                    <h2 class="three__info" >{{hotel.price}}¢,-</h2>
                                    <h5 class="three__text">Max Quests:</h5>
                                    <h4 class="three__deta" > {{hotel.maxGuests}}</h4>
                                    <h5 class="three__text">Beds:</h5>
                                    <h4 class="three__deta" >{{hotel.beds}}</h4>
                                    <br>
                                </div>
                            </div>  
                        </div>
                        <router-link class="selectBt col-sm-12" :to="`/specific/${hotel.id}`">Details</router-link>      
                    </div>  
                        <div class="showing col-md-12 row ">
                            <div :class="hotel.smoke" class=" framing col-md col"> 
                            </div>
                            <div :class="hotel.shower" class=" framing col-md col"> 
                            </div>
                            <div :class="hotel.pets" class=" framing col-md col"> 
                            </div>
                            <div :class="hotel.wifi" class=" framing col-md col"> 
                            </div>
                            <div :class="hotel.breakfast" class=" framing col-md col"> 
                            </div>
                        </div>
                    <hotel-container  
                        v-bind:image="hotel.imageUrl"
                        v-bind:company="hotel.establishmentName "
                        v-bind:email="hotel.establishmentEmail"
                        v-bind:cost="hotel.price"
                        v-bind:bed="hotel.beds"
                        v-bind:cigar="hotel.smoke"
                        v-bind:identity="hotel.id"
                    ></hotel-container>
                    </div>
                </div>
            </div> 
            <a  id="bottom" href="#top">Back to Top</a>
            <br>
            <br>
        </div> 
    </div>
</template>
<script>
import Searchbar from '../../components/Searchbar';
import Navigation from '../../components/Navigation';
import HotelContainer from '../../components/HotelContainer';
export default {
    name:"AllHotelsPage",
    components:{
        Navigation,
        Searchbar,
        HotelContainer
    },  
    methods:{
        childComponentChange(hotelSearchCriteria){
            this.filteredHotels = this.allHotels.filter((value) => { 
                return value.establishmentName.toLowerCase().includes(hotelSearchCriteria.toLowerCase().trim())
            })
            console.log('This was clicked inside the child', this.filteredHotels);
        },
    },
    intervalFunction() {
     myVar = setInterval(loadJSON, 100);
    },
    mounted() {   
        fetch('establishments.json')
        .then((response) => {return response.json()})
        .then((results) => {           
            this.allHotels = results;
            console.log(this.allHotels)
        })
        .catch(err =>{
            console.log(err);
        });
    },
    data(){
        return{
            allHotels:[],
            hotelsLength: 0,
            filteredHotels: []
        }
    },
    computed:{
    },
}
</script>
<style lang="scss" scoped>
$BorderColor:#545252;
$inputField: #fafafa;

.test{
    padding: 0px;
}
.all{
    background-image: url('../../assets/prism.png');
}
.navs{
    background-color: white;
}
ul:empty{
    display: none;
}
ul{
    margin: auto;
    list-style: none;
 
}
.C{
    background-color: $inputField;
    border-radius: 3px;
}
.cards{
    background-color: transparent;
    margin-bottom: 15px;
    padding: 10;
    &--allHotels{
        margin: auto;
        text-align: center;
        padding-bottom: 90px;
            &__container{
                padding-left: 10px;
                padding-right: 10px;
                margin-left: 0;
                margin-right: 0;
                align-content: initial;
                border-bottom: 0px;
                margin-bottom: 10px !important;
                width: 100%;
                max-height:600px;
            }
        }
    
}
.hotelTitle{
     font-family: 'Alike', serif;
}

#sbSugjest:empty {
   display: none;
}

.searches{
    margin: auto;
    width: 100%;
}
.result{
    border: 1px solid lightgray;
    text-align: left;
    display: block;
    padding-left: 1px;
    color:inherit;
    font-size: 2rem;
    font-family: 'Roboto', sans-serif;
    padding-top: 5px;
    margin: auto;
    cursor: pointer;
    background-color: $inputField;

}
.sugjestions{
    height: 60px;
    background-color: lightblue;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border: solid 1px white;
    position: relative;
    z-index: 3;
    width: 100%;
    margin: 0;

}

.selectBt{
    background-color: #1857c6;
    border:2px solid #1857c6;
    border-radius: 10px;
    text-decoration: none;
    color: white;
    transition: 0.4s;
    font-size: 30px;
    height: 60px;
    display: inline-flex;
    align-items: center; /* Cross Axis */
    justify-content: center; /**Down Axis*/
}
.selectBt:hover{
    background-color:white;
    color: blue;
    border:2px solid blue;
    border-radius: 10px;
    font-size: 30px;
}
.displayPage{
    background-image: url('../../../images/display.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 310px;
}
.hotelList{
    padding: 0;
    margin: auto;
}

.framing{
    background-position: center;
    margin: 0 !important;
    padding: 0;
}
.Img{
    padding: 0;
    height: 100%;
    overflow: hidden;
    min-height: 200px;
    max-height: 200px;
    &--image{
        min-height: 200px;
        max-height: 200px;
        object-fit: cover;
        padding-bottom: 10px;
        width: 100% !important;
        max-width: 100%;
        max-height: auto;
        position: relative;
        height: 150px;
        width: 300px;
    }
}
.two{
  text-align: left;
  &__information{
      text-align: left;
  }
}
.true{
    background-image: url('../../../icons/smokeIconA.svg');
    background-repeat: no-repeat;
    object-fit: contain;
    height:60px ;
}
.false{
    background-image: url('../../../icons/smokeIconN.svg');
    background-repeat: no-repeat;
    object-fit: contain;
    height:60px ;
}
.Strue{
    background-image: url('../../../icons/showerIconA.svg');
    background-repeat: no-repeat;
    object-fit: contain;
    height:60px ;
}
.Sfalse{
    background-image: url('../../../icons/showerIconN.svg');
    background-repeat: no-repeat;
    object-fit: contain;
    height:60px ;
}
.Pfalse{
    background-image: url('../../../icons/petIconN.svg');
    background-repeat: no-repeat;
    object-fit: contain;
    height:60px ;
}
.Ptrue{
    background-image: url('../../../icons/petIconA.svg');
    background-repeat: no-repeat;
    object-fit: contain;
    height:60px ;
}
.Wtrue{
    background-image: url('../../../icons/wifiIconA.svg');
    background-repeat: no-repeat;
    object-fit: contain;
    height:60px ;
}
.Wfalse{
    background-image: url('../../../icons/wifiIconN.svg');
    background-repeat: no-repeat;
    object-fit: contain;
    height:60px ;
}
.Btrue{
    background-image: url('../../../icons/breakfastIconA.svg');
    background-repeat: no-repeat;
    object-fit: contain;
    height:60px ;
}
.Bfalse{
    background-image: url('../../../icons/breakfastIconN.svg');
    background-repeat: no-repeat;
    object-fit: contain;
    height:60px ;
}
.showing{
    background-color: #fafafa;
    padding-bottom: 10px;
    height: 60px;
    width: 100%;
    margin: auto;
    align-content: center;
}
#bottom{
    color: white;
    font-size: 30px;
    transition: 0.3s;
}
#bottom:hover{
    color: green;
    font-size: 30px;
}
.three{
    &__info{
        text-align: center;
        color:green;
    }
    &__text{
        text-align: left;
    }
    &__deta{
        text-align: right;
        color: green;
    }
}
@media only screen and (max-width: 767px) {
    .three{
        &__info{
            text-align: center;
        }
        &__deta{
            text-align: left;
            color: green;
        }
    }
}
</style>
