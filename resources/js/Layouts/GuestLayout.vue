<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="max-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-800 col-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full h-full">
            <!-- Primera columna -->
            <div class="col-span-1 sm:max-w-md px-6 py-4 bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg sm:justify-self-center h-full">
                <slot />
            </div>
            <div class="col-span-1 sm:max-w-md px-6 py-4 bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg h-full">
                <!-- Columna del logo -->
                <div class="w-full h-full flex justify-center items-center container-wrap">
                    <div id="logo-container">
                        <ApplicationLogo></ApplicationLogo>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<style>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap");
.max-h-screen {
    height: 100vh;
}
#titulo {
    font-family: "Quicksand", sans-serif;
    color: whitesmoke;
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 3rem;
    margin-top: 3rem;

}
#form-log {
    font-family: "Quicksand", sans-serif;
    border-radius: 15px;
    border: 2px solid;
    border-color: #df9800;
    height: 30rem;
    background-color: #556b7de3;
    padding: 2.5rem;
    max-width: 100%;
    font-size: 20px; 
    padding: 3rem;
    margin: auto;
}

#label-txt {
    font-size: 24px;
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
#checkbox:hover {
    outline-style: solid;
    outline-color: #fcaf09;
    cursor: pointer;
}
#checkbox:active,
#checkbox:focus {
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
    background-color: #fcaf09;
    transform: rotate(-90deg);
    display: flex;
    justify-content: center;
    align-items: center;
}
.container-wrap {
    height: 100%;
}

@media (min-width: 640px) {
    .grid-cols-1 {
        grid-template-columns: 2fr 1fr;
    }
    .grid-cols-1 > :nth-child(2) {
        justify-self: end;
        background-color: #fcaf09;
    }
}

</style>
