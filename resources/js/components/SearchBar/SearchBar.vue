<template>
    <div>
        <div class="searchBarContainer">
            <input type="text" class="searchInput" placeholder="Search..." id="searchTerm" v-model="searchTerm" @input="search" @focus="focus = true">
            <div v-if="focus">
                <div class="resultErrorMessage" v-if="results == 0">No results found for '{{ searchTerm }}'</div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: "SearchBar",

        components: {},

        data: function () {
            return {
                searchTerm: '',
                focus: false,
                results: []
            }
        },

        methods: {
            search: function () {
                if (this.searchTerm.length < 3) {
                    return;
                }

                axios.post('/api/search', {searchTerm: this.searchTerm})
                    .then(response => {

                        this.results = response.data.data;
                        this.$emit('search:field', this.results)
                    })
                    .catch(error => {
                        //console.log(error.response);
                    });


            }
        }
    }
</script>

<style scoped>

</style>
