<template>
    <div class="container">
        <Aside />
        <Navbar />

        <div class="second-container">
            <User />
            <Notifications />
        </div>
    </div>
</template>

<script>
import Aside from './../components/Aside.vue'
import Navbar from './../components/Navbar.vue'
import User from './../components/User.vue'
import Notifications from './../components/Notifications.vue'
export default {
    name: 'UserInfo',
    components: {
        Aside,
        Navbar,
        User,
        Notifications,
    }
}
</script>

<style scoped>
</style>