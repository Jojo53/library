<template>
    <b>{{content['lastName']}}</b>
    <span>{{value['lastName']}}</span><br>
    <b>{{content['firstName']}}</b>
    <span>{{value['firstName']}}</span><br>
</template>
<script>
    export default{
        data(){
            return{
                content: JSON.parse(this.contents),
                value: JSON.parse(this.values)
            }
        },
        props:{
            contents: String,
            values: String
        }
    }
</script>