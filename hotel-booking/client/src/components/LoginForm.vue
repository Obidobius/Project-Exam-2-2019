<template>
<div style="padding-top: 14vh;">
     <div class="loginFormContainer">
        <h1 class="loginFormContainer--title">Admin Login</h1>
        <h2 class="messageL">{{ message }}</h2>
        <form class="form-contain col-md-12 row" @submit.prevent="onLoginClicked">
                <div class="form-contain__group col-md-6">
                    <h5 class="formName">Username:</h5> 
                    <input type="text" id="username" placeholder="Username" v-model="username" class="form-control"
                           v-bind:class="{ 'error-border': inputUsernameError }"/>
                    <div class="alert alert-danger" v-if="showUsernameError" role="alert">Please enter the correct username
                    </div>
                </div>
                <div class="form-contain__group col-md-6">
                    <h5 class="formName">Password:</h5>
                    <input type="password" id="password" placeholder="Password" v-model="password" class="form-control"
                           v-bind:class="{ 'error-border': inputPasswordError }"/>
                    <div class="alert alert-danger" v-if="showPasswordError" role="alert">Please enter the correct password
                    </div>
                </div>
                <button class="login-form_button btn-lg" 
                    v-on:click="onLoginClicked" type="submit">Submit</button>
        </form>
               <p id="backHome" v-on:click="indexPage()">Back to Main page</p>
    </div>
</div>
   
</template>

<script>
    export default {
        name:'LoginForm',
        props: {
            message: String,
                showUsernameError: Boolean,
                showPasswordError: Boolean,
                inputUsernameError: Boolean,
                inputPasswordError: Boolean,
        },
        data(){
            return{
                username:'',
                password: '',
            }
        },
        methods:{
            onLoginClicked(){
                this.$emit('on-login', this.username, this.password);
            },
            indexPage:function(){
            this.$router.push("/");
        }
        }
    };
</script>
<style lang="scss" scoped>
$BorderColor: #545252;
$trueBlack: #000000;
$formColor: #fafafa;
$submitColor: #e6e7e8;
$submitHover: #545252;
$titleColor:#5682cf;

.loginFormContainer{
        padding-bottom: 10px;
        justify-content: center;
        background-color: $formColor;
        border: $BorderColor solid 1px;
        border-radius: 5px;
        max-width: 80%;
        margin: auto;
        &--title{
            color: white;
            background-color: $titleColor;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 10px;
            text-align: left !important;
            margin: 0;
        }
}

.form-contain{
  &__group{
    margin: auto;
    text-align: left;
  }
}
.form-control{
  max-width: 100%;
  margin-bottom: 40px;
}
.formName{
  margin-bottom: 15px;
}
.messageL{
  text-align: left;
  padding: 10px;
}
.login-form_button{
  background-color: $submitColor;
  color: $trueBlack;
  margin-top: 30px !important;
  margin-left: 30px;
  margin-bottom: 20px;
  -webkit-box-shadow: 2px 2px 2px 0px lightGray;
  -moz-box-shadow: 2px 2px 2px 0px lightGray;
  box-shadow: 2px 2px 2px 0px lightGray;
  transition: all 0.3s ease-in-out;
}
.login-form_button:hover{
  color: white;
  border-color: $submitHover;
  background-color: $submitHover;
  -webkit-box-shadow: 2px 2px 2px 0px $trueBlack;
  -moz-box-shadow: 2px 2px 2px 0px $trueBlack;
  box-shadow: 2px 2px 2px 0px $trueBlack;
}
#backHome{
    text-align:center; 
    cursor:pointer;
    margin:0;
    margin-bottom: 0px;
}
</style>

