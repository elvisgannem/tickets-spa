<template>
    <div class="container">
        <Aside />
        <Navbar />

        <div class="second-container">
            <TicketsResume title="Tickets" />
        </div>
    </div>
</template>

<script>
import Aside from './../components/Aside.vue'
import Navbar from './../components/Navbar.vue'
import TicketsResume from './../components/TicketsResume.vue'
export default {
    name: 'Tickets',
    components: {
        Aside,
        Navbar,
        TicketsResume,
    }
}
</script>