<template>
    <div>
   <li class="list-group-item" :class="className"><slot></slot>
    <span id="time">{{ time }}</span></li>
   <span class="label  pull-right" :class='labelClass'>{{ user }}</span>
   </div>
</template>

<script>
    export default {
        props:[
        'color',
        'user',
        'time'
        ],
        computed:{
            className(){
                return 'list-group-item-'+this.color;
            },
            labelClass(){
                return 'label-'+this.color;
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
    #time{
        font-size: 10px;
        margin-top: 12px;
        color: black;
    }
</style>
