<template>
    <div class="searchBar container">
        <br>
            <input type="text" class="hotel-control" v-model="hotelSearchCriteria"  @input="filterHotels(hotelSearchCriteria)"  placeholder=" Search for a hotel name...">
        <br>
    </div>
</template>
<script>
export default {
    name: "Searchbar",
    methods: {
        filterHotels (e) {
            this.$emit('change-full-name', e)
        }
    }
}
</script>
<style lang="scss" scoped>
$inputField: #fafafa;

.input{
    cursor:text;
    height:40px;
    border: 2px solid lightgray;
    position:relative;
    box-shadow: 0 0 10px #fafafa;
    font-size: 25px;
    padding-left:5px;
    padding-top:5px;
    background-image: url('../../icons/searchIcon.svg');
    background-repeat: no-repeat;
    background-position: right;
    background-color: $inputField;
}

.sugjestions{
    height: 60px;
    background-color: $inputField;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border: solid 1px $inputField;
    position: relative;
}

.hotel-control{
    background-image: url('../../icons/searchIcon.svg');
    background-repeat: no-repeat;
    background-position: right;
    margin:auto;
    width: 100%;
    height: 60px;
    position: relative;
    font-size: 2rem;
}
</style>
