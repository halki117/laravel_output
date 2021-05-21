<template>
<div class="col-6 mx-auto">
  <div class="card">
    <div class="card-body">
      <h3 class="post-title">{{ name }}</h3>
      <p class="post-content">{{ content }}</p>
      <p>taaaaaa</p>
      <p>{{ hoge }}</p>
      <p>{{ HogeCall }}</p>
      <p>{{ NameCall }}</p>
      <!-- <span v-for="(post, index) in posts" v-if="index < 2"><p>{{index}}{{ post }}</p></span> -->

    </div>
  </div>
</div>   
</template>

<script>
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // }
        props: ['name', 'content', 'posts'],

        data: function() {
            return {
                hoge: "HOGE"
            }
        },
        computed: {
            HogeCall: function(){
                return this.hoge + "です"
            },
            NameCall: function(){
                return this.name + "です"
            }
        }
    }
</script>
