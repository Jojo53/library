<template>
    <label :for="content['lastName_fname']">{{content['lastName_content']}}</label>
    <input type="text" :name="content['lastName_fname']" :placeholder="content['lastName_placeholder']">
    <label :for="content['firstName_fname']">{{content['firstName_content']}}</label>
    <input type="text" :name="content['firstName_fname']" :placeholder="content['firstName_placeholder']">
</template>
<script>
    export default{
        data(){
            return{
                content: JSON.parse(this.contents)
            }
        },
        props:{
            contents: String
        }
    }
</script>