<template>
  <div class="container">
    <Aside />
    <Navbar />
    <div class="second-container">
      <div class="dashboard-cards">
        <DashboardCard dashTitle="Open tickets" dashContent="213" dashIcon="clipboard-list" />
        <DashboardCard dashTitle="New users" dashContent="104" dashIcon="user" />
        <DashboardCard dashTitle="Total tickets" dashContent="596" dashIcon="hands-helping" />
      </div>
      <div class="tickets">
        <TicketsResume title="Recent Tickets" />
      </div>
    </div>
  </div>
</template>

<script>
import Aside from './../components/Aside.vue'
import DashboardCard from './../components/DashboardCard.vue'
import Navbar from './../components/Navbar.vue'
import TicketsResume from './../components/TicketsResume.vue'
export default {
  name: 'Dashboard',
  components: {
    DashboardCard,
    Aside,
    Navbar,
    TicketsResume,
  }
}
</script>

<style>
.container {
  display: flex;
}
.second-container {
  display: flex;
  flex-direction: column;
  margin: 5rem 0 0 2.5rem; 
  width: 70%; 
  gap: 2rem;
}
</style>
<style scoped>
.dashboard-cards {
  display: flex;
  justify-content: space-between;
}
</style>
