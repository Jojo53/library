<template>
    <label :for="content['name_fname']">{{content['name_content']}}</label>
    <input type="text" :name="content['name_fname']" :value="value['name']" :placeholder="content['name_placeholder']">
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