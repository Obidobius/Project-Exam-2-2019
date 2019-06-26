<template>
    <div>
        <div class=" container col-md-12" style="padding-left:25px; padding-right:25px;"> 
            <div class="row col-md-12 contact">
                 <h1 class="col-md-12 contact--title">Contact Requests</h1>
                <div class="col-lg-3 col-md-6 col-sm-12" v-for="contact in contactrequests"
                    v-bind:name="contact.clientName"
                    v-bind:mail="contact.email"
                    v-bind:mes="contact.message"
                    >
                    <div >
                        <div class="contact__container ">      
                            <div class="titleN">
                                <h4 class="contact__container--name"> Name: {{contact.clientName}}</h4>
                            </div>
                            <div class="titleM">
                                <p class="contact__container--email"> Email: {{contact.email}}</p>
                            </div>
                            <div class="titleD">
                                <p class="contact__container--message"> Comment: {{contact.message}}</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
              <p class="backLink" v-on:click="changeLogged()">Back..</p>
        </div>
    </div>
</template>
<script>
export default {
    name:"AdminContactPage",
    props:['clientName','email','message'],
    methods:{
        changeLogged:function(){
            this.$router.push("/admin-logged");
        }
    },
    mounted(){
        fetch('contact.json')
        .then((response) => {return response.json()})
        .then((results) => {
            this.contactrequests = results;
            console.log(results)
        })
    },
    data(){
        return{
            contactrequests:[]
        }
    },
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

.contact{
    background-color: $FormColor;
    margin-left: auto;
    margin-right: auto;
    margin-top: 40px;
    padding-top: 0px;
    padding-bottom: 20px;
    padding-left: 0px;
    padding-right: 0px;
    border-radius: 10px;
    &--title{
        padding-top: 15px;
        padding-bottom: 15px;
        color: white;
        background-color: $titleColor;
        text-align: left !important;
    }
    &__container{
        margin: 10px;
        border-top: 0px;
        border-left: 1px solid $BorderColor;
        border-bottom: 1px solid $BorderColor;
        border-right: 1px solid $BorderColor;
        background-color: white;
        border-radius: 8px;
        min-height: 480px;
        &--name{
            padding-top: 30px;
            padding-bottom: 20px;
        }
        &--email{
            @extend %information;
            padding-top: 20px;
            font-size: 1.2em;
        }
        &--message{
            padding-block-end: 10px;
            @extend %information;
            padding-top: 20px;
            font-size: 1.3em;
        }
    }
}
.titleN{
    background-color: $titleColor;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}
.titleM{
    padding-top:20px;
}
.titleD{
    margin-right: 30px;
}
h4{
    color:white;
}
.backLink{
    font-size: 35px;
    padding-top: 20px;
    padding-bottom: 30px;
    padding-left: 40px;
    text-align:left;
    cursor:pointer;
    margin:0;
}
@media only screen and (max-width: 767px) {
    .contact{
        &--title{
            text-align: center !important;
        }
    }
}
</style>
