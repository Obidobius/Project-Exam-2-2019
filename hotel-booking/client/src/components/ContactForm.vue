<template>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 contactContainer">
                <div class="contactContainer--form">
                <h1>Contact Us</h1>
                <hr>
                <form @submit="checkSubmit" action="http://192.168.64.2/hotel-booking/server/contact-success.php" method="POST" novalidate="true"
                    class="contactContainer--form__details col-12">
                    <label class=" infoInput" for="clientName"><p>Full name:</p></label>
                    <input autofocus placeholder="Please enter full Name" class="inputDetails" type="text" name="clientName" id="clientName" v-model="naming" 
                    >    
                    <div class="alert alert-danger" v-if="errors.length">
                        <div v-for="errors in errors">
                            {{ errors }}
                        </div>
                    </div>
                    <label class=" infoInput" for="email"><p>Email Address:</p></label>
                    <input placeholder="Please enter you email address" class="inputDetails" type="text" name="email" id="email" v-model="mailing"
                    >
                    <div class="alert alert-danger" v-if="errorMail.length" role="alert">
                        <div v-for="errorM in errorMail">{{errorM}}
                        </div>   
                    </div>
                    <label class=" infoInput" for="message"><p>Message:</p></label>
                    <textarea class="inputDetails" name="message" id="message" placeholder=" Comment.." rows="8" cols="80" v-model="messages"></textarea>
                    <div class="alert alert-danger" v-if="errorMessage.length" role="alert">
                        <div class="errorM" v-for="errorMessage in errorMessage">{{errorMessage}}   
                        </div>   
                    </div>   
                    <input class="loginButton btn-lg" type="submit">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

   
</template>
<script>
export default {
    name:"ContactForm",
    props: {
    },
    data(){
        return {
            errors:[],
            errorMail:[],
            errorMessage:[],
            naming:null,
            mailing:null,
            messages:null,
        }
    },
    methods: {
        checkSubmit:function(e){
            this.errors = [];
            this.errorMail = [];
            this.errorMessage = [];
            if(!this.naming) this.errors.push(" Please enter your name.");
            if(!this.messages) this.errorMessage.push("Please add comment");
            if(!this.mailing) {
                this.errorMail.push(" Please enter your email.");
                }
            else if(!this.validEmail(this.mailing))
                {
                this.errorMail.push("Please enter a valid email")
            }
            if(!this.errorMail.length && !this.errors.length && !this.errorMessage.length) return true;
            e.preventDefault();    
        },
            validEmail: function (mailing) {
                 var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                 return re.test(mailing);
        },
    }
}

</script>
<style lang="scss" scoped>
p{
  font-family: 'Roboto', sans-serif;
  margin: 0;
}
.infoInput{
    padding-top: 20px;
    font-size: 20px;
    width: 100%;
    margin: 0;
    padding-bottom: 10px;
    padding-left: 10px;
}
.contactContainer{
  padding-top: 5vh;
  padding-bottom: 5vh;
  justify-content: center !important;
  margin: auto;
  &--form{
    background-color: #fafafa;
    padding: 70px;
    padding-top: 60px;
    padding-bottom: 10px;
    border: gray solid 1px;
    border-radius: 5px;
    margin: auto;
    &__details{
      text-align: left;
    }
  }
}
.inputDetails{
  width: 100%;
  margin: 0;
  padding-top: 15px;
  padding-bottom: 10px;
  padding-left: 10px;
  font-size: 20px;
  border: 1px solid lavender;
}
.errorM{
      font-size: 20px;
}
.loginButton{
    margin-top: 15px;
    margin-bottom: 10px;
}
</style>

