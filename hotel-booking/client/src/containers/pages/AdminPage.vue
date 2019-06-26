<template>
    <div class="">
        <login-form
            v-bind:message='message'
            v-on:on-login="loginHandler"
            v-bind:show-username-error="showUsernameError"
            v-bind:show-password-error="showPasswordError"
            v-bind:input-username-error="inputUsernameError"
            v-bind:input-password-error="inputPasswordError"
        ></login-form>
    </div>
</template>

<script>

import LoginForm from '../../components/LoginForm'

   export default {
        name:"AdminPage",
        components:{
            LoginForm
        },
         data(){
            return{
                message:'Login as admin',
                showUsernameError: false,
                showPasswordError: false,
                inputUsernameError: false,
                inputPasswordError: false
            }
        },
        methods:{
            loginHandler(username, password){
                console.log('logging in..');
                console.log(username, password);
                this.message = 'Logging in';
                const cachedUser = localStorage.getItem('username');
                const cachedPassword = localStorage.getItem('password');
                console.log(cachedUser);
                console.log(cachedPassword);

                if (username != cachedUser || password != cachedPassword) {
                    if (username !== cachedUser) {
                        this.showUsernameError = true;
                        this.inputUsernameError = true;
                        this.message = 'Please enter the correct login details';
                    } else {
                        this.showUsernameError = false;
                        this.inputUsernameError = false;
                    } 
                    if (password !== cachedPassword) {
                        this.showPasswordError = true;
                        this.inputPasswordError = true;
                        this.message = 'Please enter the correct login details';
                    } else {
                        this.showPasswordError = false;
                        this.inputPasswordError = false;
                    }
                } else {
                    this.message = `Welcome back ${username}`;
                    this.showPasswordError = false;
                    this.showUsernameError = false;
                    this.inputPasswordError = false;
                    this.inputUsernameError = false;
                    sessionStorage.setItem('sessionId', (Math.floor(100000000 + Math.random() * 900000000)).toString()
                    );
                    this.$router.push("/admin-logged");
                }
            }
        }
    };
</script>
<style lang="scss" scoped>
$submitColor: #e6e7e8;
$submitHover: #545252;
$formColor: #fafafa;
$BorderColor: #545252;
$trueBlack: #000000;

</style>
