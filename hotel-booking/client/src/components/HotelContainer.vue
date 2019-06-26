<template>
</template>

<script>

import AllHotelsPage from '../containers/pages/AllHotelsPage';

export default {
    name:"HotelContainer",    
    components:{
        AllHotelsPage
    },
    props:['myHotelData', 'establishmentName', 'company','email','image','cost','bed','cigar','shower','animal','wire','food','id','identity'],
}

</script>
