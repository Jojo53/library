<template>
    <label :for="content['lastName_fname']">{{content['lastName_content']}}</label>
    <input type="text" :name="content['lastName_fname']" :value="value['lastName']" :placeholder="content['lastName_placeholder']">
    <label :for="content['firstName_fname']">{{content['firstName_content']}}</label>
    <input type="text" :name="content['firstName_fname']" :value="value['firstName']" :placeholder="content['firstName_placeholder']">
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