<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Clientes" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Clientes</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">                
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="flex justify-center" id="t-container">
                            <h1 id="titulo">LISTA DE CLIENTES REGISTRADOS</h1>
                        </div>
                        <form id="form-log">
                            <div>
                                <InputLabel id="label-txt"  value="Email" /><br>
                                <Input
                                    id="email"
                                    type="email"
                                    class="mt-1 block w-full"
                                    
                                    required
                                    autofocus
                                    autocomplete="username"
                                />
                                <InputError class="mt-2"/>
                            </div><br>
                            <div class="mt-4">
                                <InputLabel id="label-txt" for="password" value="Password" /><br>
                                <Input
                                    id="password"
                                    type="password"
                                    class="mt-1 block w-full"
                                    
                                    required
                                    autocomplete="current-password"
                                />
                                <InputError class="mt-2"  />
                            </div><br>
                            <div class="block mt-4">
                                <label class="flex items-center">
                                    <Checkbox id="checkbox" name="remember"  />
                                    <span id="check-txt" class="ml-2 text-sm text-gray-600 dark:text-gray-400"
                                        >Mantener sesion iniciada</span
                                    >
                                </label>
                            </div><br><br>
                            <div class="flex items-center justify-center mt-4">
                                <Link
                                    
                                    id="forgot-psw-txt"
                                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                >
                                    ¿Olvidaste tu contraseña?
                                </Link>
                                <PrimaryButton
                                    class="ml-4"
                                    id="btn-menu"
                                    
                                >
                                    Entrar
                                </PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        

    </AuthenticatedLayout>
</template>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap");
#titulo {
    font-family: "Quicksand", sans-serif;
    color: whitesmoke;
    font-size: 38px;
    font-weight: bold;
    margin-bottom: 5rem;
    margin-top: 1rem;
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
    height: 2rem;
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
