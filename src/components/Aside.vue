<template>
    <div class="container">
        <p class="tickets-p">TICKETS</p>
        <div class="menu">
            <div class="menu-container">
                <font-awesome-icon :icon="['fas', 'tachometer-alt']" :style="{color: '#DBDDE0'}" />
                <p class="menu-p">Dashboard</p>
            </div>
            <div class="menu-container">
                <font-awesome-icon :icon="['fas', 'clipboard-list']" :style="{color: '#DBDDE0'}" />
                <p class="menu-p">Tickets</p>
            </div>
            <div class="menu-container">
                <font-awesome-icon :icon="['fas', 'user']" :style="{color: '#DBDDE0'}" />
                <p class="menu-p">User Info</p>
            </div>
            <div class="menu-container">
                <font-awesome-icon :icon="['fas', 'sign-out-alt']" :style="{color: '#DBDDE0'}" />
                <p class="menu-p">Log out</p>
            </div>
            <div class="menu-container">
                <font-awesome-icon :icon="['fas', 'user-shield']" :style="{color: '#DBDDE0'}" />
                <p class="menu-p">Administrator</p>
            </div>
        </div>
        <hr class="separator">

        <div class="menu">
            <div class="menu-container">
                <font-awesome-icon :icon="['fas', 'question-circle']" :style="{color: '#DBDDE0'}" />
                <p class="menu-p">Help</p>
            </div>
        </div>
    </div>
</template>
    
<script>
export default {
    name: 'Aside'
}
</script>

<style scoped>
.container {
    font-family: 'Lato';
    margin: 0;
    width: 20%;
    height: 100vh;
    background: #fff;
    box-shadow: 1px 0px 6px rgb(126, 126, 126);
    display: flex;
    flex-direction: column;
    align-items: center;
}
.tickets-p {
    padding: 4rem 0 0 0;
    font-size: 14px;
    width: 70%;
    text-align: left;
    font-weight: bold;
    color: #AAAFCD;
}
.menu{
    width: 70%;
}
.menu-container {
    display: flex;
    width: 100%;
    align-items: center;
    gap: 1rem;
}
.menu-p {
    color: #334D6E;
    font-weight: bold;
}
.separator {
    width: 100%;
    margin: 2rem 0 1rem 0;
    border: 1px solid #E8E8E8;
}
</style>