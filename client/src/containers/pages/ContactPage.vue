<template>
<div>
   <navigation></navigation>
    <contactForm></contactForm>
</div>
</template>
<script>
import ContactForm from '../../components/ContactForm';
import Navigation from '../../components/Navigation';
export default {
    name:"ContactPage",
    components:{
        ContactForm,
        Navigation
    },
    mounted() {
        console.log('In the mounted')
        fetch('contact.json')
        .then((response) => {
            return response.json();
        })
        .then((result) => {
            console.log(result)
        })
    }
}
</script>
