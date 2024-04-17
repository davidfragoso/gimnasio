<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-800">
        <div>
            <!-- <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link> -->
        </div>
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap");
#titulo {
    font-family: "Quicksand", sans-serif;
    color: whitesmoke;
    font-size: 38px;
    font-weight: bold;
    margin-bottom: 5rem;
    margin-top: -1rem;
}
#form-log {
    font-family: "Quicksand", sans-serif;    
    border-radius: 15px;
    border: 2px solid;
    border-color: #df9800;
    height: 35rem;
    background-color: #556b7de3;
    padding: 2.5rem;
    padding-top: 4rem; 
}
#label-txt {
    font-size: 28px;
    color: whitesmoke;
}
#forgot-psw-txt {
    color: #fcaf09;
}
#check-txt {
    color: whitesmoke;
    font-size: large;
}
#checkbox {
    width: 24px;
    height: 24px;
}
#checkbox:hover{
    outline-style: solid;
    outline-color: #fcaf09;
    cursor: pointer;
}
#checkbox:active,
#checkbox:focus{
    outline-style: solid;
    outline-color: #fcaf09;
    background-color: #fcaf09;
}
#btn-menu {
    font-family: "Quicksand", sans-serif;
    text-align: center;
    width: 8rem;
    padding: 15px;
    background-color: #ffffff00;
    color: white;
    border: 2px solid;
    border-radius: 18px;
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    font-weight: 500;
    transition-duration: 0.2s;
    box-shadow: 1px 10px 11px #21212195;
}
#btn-menu:hover {
    background-color: #fcaf09;
    border-color: #ffffff00;
    color: black;
    background-image: linear-gradient(to right, #fcaf09, #ce8200);
}
#btn-menu:active {
    background-color: #df9800;
    transform: translateY(4px);
}
#email,
#password {
    border: 2px solid;
    border-color: #fcaf09;
    background-color: whitesmoke;
    font-size: larger;
    color: black;
}
#logo-container {
    position: absolute;
    background-color: #fcaf09;
    rotate: -90deg;
    width: 50vw;
    margin-top: -38rem;
    --height: 50vh;
    margin-left: 26rem;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>