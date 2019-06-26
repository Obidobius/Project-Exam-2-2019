<template>
    <div>
        <div class="container col-md-12" style="padding-left:25px; padding-right:25px;">
            <div class="row Enquiries col-md-12">
                <h1 class="Enquiries__title col-md-12" > Enquiries</h1>
                <div class="col-lg-3 col-md-6 col-sm-12" v-for="enquire in EnquiriesResponse"
                    v-bind:hotel="enquire.establishment"
                    v-bind:name="enquire.clientName"
                    v-bind:mail="enquire.email"
                    v-bind:checkIn="enquire.checkin"
                    v-bind:checkOut="enquire.checkout"
                >
                    <div class="Enquiries__container" style="min-width:100px;">
                        <div class="titleE">
                            <h4 class="Enquiries__container--title">{{ enquire.establishment}}</h4>
                        </div>
                        <div class="titleN">
                            <p class="Enquiries__container--name">Name: {{ enquire.clientName}}</p>
                        </div>
                        <div class="titleE">
                            <p class="Enquiries__container--email" style="max-width:25px;"> Email: {{ enquire.email}}</p>
                        </div>
                        <div class="titleCi">
                            <p class="Enquiries__container--checkIn"> Check In: {{ enquire.checkin}}</p>
                        </div>
                        <div class="titleCo">
                            <p class="Enquiries__container--checkOut"> Check Out: {{ enquire.checkout}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <p class="backLink" v-on:click="changeBack()">Back..</p>
    </div>
</template>
<script>
export default {
    name:"AdminEnquiryPage",
    components:{
  props:['clientNestablishment','clientName','email','checkin','checkout'],
    },
    methods:{
        changeBack:function(){
            this.$router.push("/admin-logged");
        },
    },
    mounted(){
        fetch('enquiries.json')
        .then((response) => {return response.json()})
        .then((results) => {
            this.EnquiriesResponse = results;
            console.log(results)  
        })
    },
    data(){
        return{
            EnquiriesResponse:[]
        }
    }
}
</script>
<style lang="scss" scoped>
$FormColor: #fafafa;
$BorderColor:#545252;
$titleColor:#5682cf;
%information{
    text-align: left;
    margin-left: 30px;
    font-size: 20px;
}
.Enquiries{
    background-color: $FormColor;
    margin-left: auto;
    margin-right: auto;
    margin-top: 40px;
    padding-bottom: 20px;
    padding-left: 0px;
    padding-right: 0px;
    border-radius: 10px;
    &__title{
        padding-top: 15px;
        padding-bottom: 15px;
        color: white;
        background-color: $titleColor;
        text-align: left !important;
    }
    &__container{
        min-height: 488px !important;
        margin: 10px;
        border-left: 1px solid $BorderColor;
        border-bottom: 1px solid $BorderColor;
        border-right: 1px solid $BorderColor;
        border-radius: 8px;
        background-color: white;
        &--title{
            font-size: 28px;
            padding-top: 30px;
            padding-bottom: 20px;
            background-color: $titleColor;
            color: white;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        &--name{
            padding-top: 40px;
            @extend %information;
        }
        &--email{
            padding-top: 20px;
             font-size: 20px;
            @extend %information;
        }
        &--checkIn{
            padding-top: 20px;
            font-size: 1.2em;
             @extend %information;
        }
        &--checkOut{
            padding-top: 20px;
            font-size: 1.2em;
             @extend %information;
        }
    }
}
.backLink{
    font-size: 35px;
    padding-top: 20px;
    padding-bottom: 30px;
    text-align:left;
    cursor:pointer;
    margin:0;
    padding-left: 40px;
}
@media only screen and (max-width: 767px) {
    .Enquiries{
        &__title{
            text-align: center !important;
        }
    }
}
</style>
