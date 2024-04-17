<script setup>
import { Head, Link } from "@inertiajs/vue3";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="GIMNASIO" />
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-800 selection:bg-orange-500 selection:text-white"
    >
        <div class="max-w-7xl mx-auto p-6 lg:p-8" id="container">
            <div class="flex justify-center" id="t-container">
                <h1 id="titulo">MENU</h1>
            </div>
            <div class="mt-16">
                <div v-if="canLogin" class="flex justify-center">
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >
                        Dashboard
                    </Link>
                    <template v-else>
                        <Link :href="route('login')" id="btn-menu" class="">
                            Iniciar sesión
                        </Link>
                        <Link
                            v-if="canRegister"
                            :href="route('register')"
                            id="btn-menu"
                            class="ml-8"
                        >
                            Registro
                        </Link>
                    </template>
                </div>
            </div>
        </div>
        <div class="team">
                VUE TEAM - GYM 4 ALL
            </div>
        <div id="logo-container">
            <ApplicationLogo></ApplicationLogo>
        </div>
    </div>
    <footer>
    </footer>
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap");
#titulo {
    color: whitesmoke;
    font-size: 38px;
}
#btn-menu {
    font-family: "Quicksand", sans-serif;
    text-align: center;
    width: 14rem;
    padding: 15px;
    background-color: #ffffff00;
    color: white;
    border: 2px solid;
    border-radius: 20px;
    cursor: pointer;
    display: inline-block;
    font-size: 24px;
    font-weight: 500;
    transition-duration: 0.2s;
    box-shadow: 1px 10px 18px #0e0e0ee3;
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
#t-container {
    --border: 2px solid;
}
#container {
    border-radius: 10px;
    border: 2px solid;
    border-color: #df9800;
    height: 20rem;
    background-color: #556b7de3;
}

#logo-container {
    position: absolute;
    background-color: #fcaf09;
    rotate: -90deg;
    width: 50vw;
    height: 50vh;
    margin-left: 86rem;
    display: flex;
    justify-content: center;
    align-items: center;
}
.team {
    position: absolute;
    margin-top: 40rem;
    color: #d3d3d3;
}
footer {
    background-color: #282828;
}
</style>
