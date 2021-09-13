<template>
    <div class="container">
        <div class="card-info">
            <div class="icon">
                <font-awesome-icon :icon="['fas', dashIcon]" size="3x" :style="{color: '#558EFF'}" />
            </div>
            <div class="info">
                <p>{{dashTitle}}</p>
                <h3>{{dashContent}}</h3>
            </div>
        </div>
    </div>
</template>
    
<script>
export default {
    name: 'DashboardCard',
    props: ['dashTitle', 'dashContent', 'dashIcon']
}
</script>

<style scoped>
.container {
    box-shadow: 2px 15px 15px 4px #8888881f;
}
.icon {
    height: 50px;
    align-self: center;
    margin-left: 30px;
}
.card-info {
    font-family: 'Lato';
    background-color: #FFF;
    display: flex;
    gap: 1rem;
    justify-content: flex-start;
    align-items: center;
    height: 100px;
    width: 250px;
    border-radius: 10px;
}
.card-info h3 {
    color: var(--primary);
    margin-top: 0;
}
.card-info p {
    font-weight: bold;
    margin-bottom: 6px;
}
</style>