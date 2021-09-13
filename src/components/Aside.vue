<template>
    <div class="container">
        <p class="tickets-p">TICKETS</p>

        <div class="menu" v-for="item in menu" :key="item.id">
            <router-link :to="item.url"><div class="menu-container" @click="fetchMenu(item.id)">
                <font-awesome-icon :icon="['fas', item.icon]" :style="[active == item.id ? 'color: #558EFF' : 'color: #DBDDE0']" />
                <p class="menu-p" :style="[active == item.id ? 'color: #558EFF' : '']">{{item.name}}</p>
            </div>
            </router-link>
        </div>
    </div>
</template>
    
<script>
import {mapState, mapActions} from 'vuex'
export default {
    name: 'Aside',
    methods: {
        verifyActiveRoute(){
            let actualRoute = this.$route.path
            for(let i = 0; i < this.menu.length; i++){
                if(this.menu[i].url == actualRoute){
                    this.fetchMenu(this.menu[i].id)
                }
            }
        },
        ...mapActions(['fetchMenu']),
    },
    computed: {
        ...mapState(['menu', 'active'])
    },
    mounted(){
        this.verifyActiveRoute()
    }
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
.active {
    color: #558EFF;
}
.separator {
    width: 100%;
    margin: 2rem 0 1rem 0;
    border: 1px solid #E8E8E8;
}


</style>