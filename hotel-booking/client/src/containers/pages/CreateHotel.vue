<template>
    <div>
        <addEstablishment></addEstablishment>
    </div>    
</template>

<script>

import AddEstablishment from '../../components/AddEstablishment';
import Navigation from '../../components/Navigation';

export default {
    name:"CreateHotel",
    components:{
        AddEstablishment,
        Navigation
    },    methods:{
        changeBack:function(){
            this.$router.push("/admin-logged");
        },
    }
}
</script>
