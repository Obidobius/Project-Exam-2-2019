<template>
<div>
 <div class="autocomplete">
    <input type="text" @input="onChange" v-model="search" @keyup.down="onArrowDown" @keyup.up="onArrowUp" @keyup.enter="onEnter" />
    <ul id="autocomplete-results" v-show="isOpen" class="autocomplete-results">
      <li class="loading" v-if="isLoading">
        Loading results...
      </li>
      <li v-else v-for="(result, i) in results" :key="i" @click="setResult(result)" class="autocomplete-result" :class="{ 'is-active': i === arrowCounter }">
        {{ result }}
      </li>
    </ul>

  </div>
<!--More stuff-->
    <div class="searchBar container">
        <br>
            <input type="text" 
                   class="hotel-control" 
                   v-model="searchCriteria" 
                   @input="filterHotels(searchCriteria)"
                   placeholder="Search for hotel names..."
            >
        <br>
    </div>
</div>
</template>
<script>
export default {
    name: "Searchbar",
    methods: {
        filterHotels (e) {
    //        this.$emit('change-full-name', e.target.value)


        },

         childComponentChange(searchPhrase){
            console.log()
            // console.log('This was clicked inside the child', value);
            this.filteredHotels = this.allHotels.filter((value) => { 
                return value.establishmentName.toLowerCase().includes(searchPhrase.toLowerCase())  
            // STORAGE: return value.establishmentName.toLowerCase().indexOf(searchPhrase.toLowerCase() > -1)
    
            })
            console.log('This was clicked inside the child', this.filteredHotels);
        },
    },
    props:[],
    watch:{

    }

}
</script>
<style lang="scss" scoped>
$inputField: #fafafa;
.hotel-control{
  width: 80%;
  height: 50px;
  background-color: $inputField;
  padding-left: 10px;
  padding-top: 6px;
  border-radius: 7px;
}
</style>
