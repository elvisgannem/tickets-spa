<template>
<Aside />
<router-view />
</template>

<script>
import Aside from './components/Aside.vue'
export default {
    components: {
      Aside
    }
}
</script>
<style>
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  background-color: #F6F8FB;
}
</style>
