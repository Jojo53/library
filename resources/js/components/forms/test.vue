<template>
    <div>
        <label :for=fname>{{content}}</label>
    <select :name=fname>
        <option v-for="(item) in table" :value="item.id" :id="item.id" :key="item.id">{{item.name}}</option>
    </select>
    </div>
</template>
<script>
    export default{
        props:{
            fname: String,
            content: String,
        }
    }
    
</script>