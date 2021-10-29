<template>
  <div class="container">
    <Aside />
    <Navbar />
    <div class="second-container">
        Admin
    </div>
  </div>
</template>

<script>
import Aside from './../components/Aside.vue'
import Navbar from './../components/Navbar.vue'

export default {
  name: 'Admin',
  components: {
    Aside,
    Navbar,
  }
}
</script>
