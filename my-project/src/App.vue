<template>
  <div id="vue_det">
    <h1>site:{{site}}</h1>
    <h1>url:{{url}}</h1>
    <h1>{{detail()}}</h1>
  </div>
</template>

<script>
  var vm = new Vue({
    el:"#vue_det",
    data:{
      site:"Hello",
      url:"www.baidu.com",
      alias:"10000"
    },
    methods: {
      detail:function(){
        return this.site + "dizhensheng";
      }
    }
  })
</script>

<style>
</style>
