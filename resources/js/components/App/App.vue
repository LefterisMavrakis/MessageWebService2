<template>
    <div class="appContainer">
        <router-view></router-view>
    </div>
</template>

<script>

    export default {
        name:"App",
        props:[],
    };
</script>
<style>
    body{
        margin:0;
    }
    .appContainer {
        width: 100vw;
        height: 100vh;
        position: relative;
        display:-webkit-flex;
        display:flex;
        flex-direction:column;
        -webkit-justify-content:center;
        justify-content:center;
        -webkit-align-items:center;
        align-items:center;
        background-color:#f2f2f2;
        padding:20px;
        box-sizing:border-box;
    }
    .messageCreate {
        width: 100%;
        max-width: 500px;
        padding: 20px;
        background-color: #2a4365;
        border-radius: 20px;
    }
    .searchBarContainer {
        width: 100%;
        position: relative;
    }
    .searchInput{
        width: 100%;
        position: relative;
        padding: 20px 10px;
        border: 2px solid #2c5282;
        box-sizing:border-box;
        border-radius:20px;
        margin:0 0 20px 0;
    }
    .InputField {
        width: 100%;
        position: relative;
    }
    .InputField > div {
        width: 100%;
        position: relative;
    }
    .InputField > div > label{
        position: absolute;
        left: 15px;
        top: 10px;
        color:#4299e1;
        font-size:20px;
    }
    .InputField > div > label + input{
        padding: 45px 15px 15px 15px;
        border-radius:20px;
        border:none;
        background-color:#2c5282;
        width:100%;
        box-sizing:border-box;
        font-size:15px;
        color:#f7fafc;

    }
    .error-field{
        border:2px solid rgba(255, 0, 0, 0.77) !important;
    }
    .errorMessage{
        color:rgba(255, 0, 0, 0.77);
        font-size: 17px;
    }
    .resultErrorMessage{
        color: rgba(255, 0, 0, 0.77);
        font-size: 19px;
        margin:0 0 20px;
        width:100%;
        text-align:center;
    }
    .submitWrapper {
        position: relative;
        width: 100%;
    }
    .submitWrapper button {
        position: relative;
        width: 100%;
        border-radius:20px;
        border:none;
        padding:20px 10px;
        font-size:20px;
        font-weight:600;
        background-color:#cbd5e0;
        color:#2c5282;
        cursor:pointer;
    }
    .successMessage {
        font-size: 19px;
        color: green;
        width: 100%;
        text-align: center;
        padding: 20px 0 0;
    }

</style>
