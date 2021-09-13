<template>
<div class="container">
    <div class="notifications">
        <div class="new-notifications"></div>
        <font-awesome-icon :icon="['fas', 'bell']" size="lg" :style="{color: '#CACCCF'}" />
    </div>
    <div class="profile-img">
        <img src="https://avatars.githubusercontent.com/u/66090947?v=4" alt="">
    </div>
</div>
</template>
    
<script>

export default {
    name: 'Navbar',
}

</script>

<style scoped>
.container {
    position: absolute;
    right: 7%;
    top: 2%;
    display: flex;
    align-items: center;
    gap: 1rem;
}
.profile-img img{
    width: 40px;
    border-radius: 100%;
    border: 3px solid #80808056;
}
</style>