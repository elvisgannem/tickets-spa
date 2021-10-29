<template>
    <div class="container">
        <h2>Notifications</h2>
        <p>You have no recent notifications</p>
    </div>
</template>

<script>
export default {
    name: 'Notifications'
}
</script>

<style scoped>

.container {
    font-family: 'Lato';
    background: #fff;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
}
h2 {
    padding: 0.5rem 0 0 1.7rem;
}
p {
    align-self: center;
}

</style>