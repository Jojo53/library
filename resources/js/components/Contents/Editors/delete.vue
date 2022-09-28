<template>
    <b>{{content['name']}}</b>
    <span>{{value['name']}}</span><br>
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