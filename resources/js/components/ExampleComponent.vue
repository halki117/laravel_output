<template>
<div class="col-6 mx-auto">
  <div class="card">
    <div class="card-body">
      <h3 class="post-title">{{ name }}</h3>
      <p class="post-content">{{ content }}</p>
    </div>
  </div>
</div>   
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
