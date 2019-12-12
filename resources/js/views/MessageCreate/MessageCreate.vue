<template>
    <div class="messageCreate">
        <SearchBar  @search:field="getSearchResults" />
        <form @submit.prevent="submitForm">
            <InputField name="email" label="Email" placeholder="Email"  @update:field="form.email = $event" v-bind:errors="errors" :data="form.email"/>
            <InputField name="name" label="Name" placeholder="Name" @update:field="form.name = $event" v-bind:errors="errors" :data="form.name"/>
            <InputField name="subject" label="Subject" placeholder="Subject" @update:field="form.subject = $event" v-bind:errors="errors" :data="form.subject"/>
            <InputField name="body" label="Body" placeholder="Body" @update:field="form.body = $event" v-bind:errors="errors" :data="form.body"/>
            <div class="submitWrapper">
                <button>Submit</button>
            </div>
        </form>
        <div v-text="successMessage" class="successMessage">

        </div>
    </div>
</template>

<script>
    import InputField from '../../components/InputField/InputField';
    import SearchBar from '../../components/SearchBar/SearchBar';


    export default {
        name:"MessageCreate",
        props: [],
        components:{
            InputField,
            SearchBar

        },
        data: function(){
            return {
                form:{
                    'email':'',
                    'name':'',
                    'subject':'',
                    'body':'',
                },
                errors:null,
                successMessage:'',
                searchResults:null,
            }

        },
        methods: {
            submitForm: function(){
                axios.post('/api/message',this.form)
                    .then( response => {
                        this.successMessage = 'Message has successfully created !!';
                        this.$route.push('/');
                    })
                    .catch(errors => {

                        this.errors = errors.response.data.errors;
                        console.log(errors);
                    })
            },
            getSearchResults: function(value){
                this.searchResults = value;
                this.searchResults.forEach((result) =>{
                    this.form = result.data;
                } )

            }
        }
    };
</script>

