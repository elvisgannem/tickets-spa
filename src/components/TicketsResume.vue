<template>
<div class="container">
    <h2>{{title}}</h2>
    <div class="grid">
        <span class="grid-title">
            <strong>Name</strong>
        </span>
        <span class="grid-title">
            <strong>Subject</strong>
        </span>
        <span class="grid-title">
            <strong>Date</strong>
        </span>
        <span class="grid-title">
            <strong>State</strong>
        </span>

    <!-- <div class="content"> -->
        <span class="grid-content">
            <img src="https://avatars.githubusercontent.com/u/66090947?v=4" class="grid-image-user">
            Elvis Gannem</span>
        <span class="grid-content">Help me!</span>
        <span class="grid-content">01-01-2020</span>
        <span class="grid-content">Active</span>
    <!-- </div> -->
    </div>
</div>
</template>
    
<script>
export default {
    name: 'TicketsResume',
    props: ['title'],
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
.grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    align-items: center;
}

.grid-title {
    padding: 1rem 1.7rem;
    background-color: var(--secondary);
    border-bottom: 2px solid rgba(185, 185, 185, 0.329);
}

.grid-content {
    padding: 1rem 1.7rem;
    display: flex;
    align-items: center;
}

.grid-image-user {
    width: 2rem;
    margin-right: 0.45rem;
    border-radius: 100%;
    border: 2px solid rgba(128, 128, 128, 0.486);
}
</style>