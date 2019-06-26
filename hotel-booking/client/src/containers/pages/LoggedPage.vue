<template>
    <div class="loggedinFormContainer container">
        <div class=" col-md-12 col-sm-12 row" style="margin:0">
            <h1 class="loggedinFormContainer--title">Admin Home Page</h1> <hr>
             <form class="loggedinFormContainer__formContainer col-md-12 row">
                <div class="loggedinFormContainer__group col-md-4">
                    <button class="form-control" type="submit" v-on:click="changeCreateHotel()">Create Hotel</button>
                </div>
                <div class="loggedinFormContainer__group col-md-4">
                    <button class="form-control" type="submit" v-on:click="changeEnquiry()"> Enquiry List</button>
                </div>
                 <div class="loggedinFormContainer__group col-md-4">
                    <button class="form-control" type="submit" v-on:click="changeContact()"> Contact List</button>
                </div>
                 <p id="logOut" v-on:click="adminPage()">Log Out</p>
        </form>
        </div>
    </div>
</template>

<script>
export default {
    name:'LoggedPage',
    methods:{
        changeCreateHotel:function(){
            this.$router.push("/Create");
        },
        changeEnquiry:function(){
            this.$router.push("/admin-enquiry");
        },
        adminPage:function(){
            this.$router.push("/admin-login");
        },
        changeContact:function(){
            this.$router.push("/admin-contact")
        }
    }
}
</script>
<style lang="scss" scoped>
$formColor: #fafafa;
$submitColor: #e6e7e8;
$BorderColor: #545252;
$titleColor:#5682cf;

@media only screen and (max-width: 770px) {
    .loggedinFormContainer{
        &__formContainer{
        height: 350px;
        }
    }
  }
  .loggedinFormContainer{
  padding-top: 15vh;
  justify-content: center !important;
  margin: auto;
  &--title{
    color: white;
    background-color: $titleColor;
    margin: 0;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 10px;
    width: 100%;
    text-align: left;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
  }
    &__formContainer{
        background-color: $formColor;
        padding: 50px;
        padding-bottom: 10px;
        border: $BorderColor solid 1px;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        margin: auto;
    }
    &__button{
        background-color: $submitColor;
        color: red;
        margin-bottom: 20px;
        margin-right: 13px;
        margin-left: 13px;
        -webkit-box-shadow: 2px 2px 2px 0px lightGray;
        -moz-box-shadow: 2px 2px 2px 0px lightGray;
        box-shadow: 2px 2px 2px 0px lightGray;
        transition: all 0.3s ease-in-out;
    }
}
#logOut{
    text-align:center;
    cursor:pointer;
    margin:0;
    padding:15px;
    padding-bottom: 20px;
    padding-top: 30px;
}
</style>
