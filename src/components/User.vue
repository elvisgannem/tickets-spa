<template>
    <div class="container">
        <h2>User Info</h2>
        <div class="input-container">
            <div>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
            </div>
            <div>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
            </div>
        </div>
        <button class="save-btn">Save changes</button>
    </div>
</template>

<script>
export default {
    name: 'User'
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
.input-container{
    display: flex;
    justify-content: center;
    width: 80%;
    gap: 1rem;
    padding: 1rem 1.7rem;
    margin: 0 auto;
}
.input-container div {
    display: flex;
    flex-direction: column;
    width: 40%;
    gap: 1rem;
}
.input-container div input {
    border: none;
    outline: none;
    background: rgb(238, 238, 238);
    padding: 0.75rem;
    border-radius: 10px;
}
.save-btn {
    align-self: center;
    padding: 0.75rem 1rem;
    border: none;
    outline: none;
    border-radius: 10px;
    margin-bottom: 1rem;
    background: var(--primary);
    color: #fff;
    font-weight: bold;
    font-family: Lato;
    transition: 0.3s;
    cursor: pointer;
}
.save-btn:hover {
    background: #1e45a5;
}
</style>