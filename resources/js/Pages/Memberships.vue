<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import BarcodeScanner from "@/Components/BarcodeScanner.vue";

const showList = ref(false);
const showForm = ref(true);
</script>

<template>

    <Head title="Membresías" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Membresías
                <button @click="
                    showList = !showList;
                showForm = !showForm;
                " class="nav-button">
                    <ul>
                        <li><span>Lista</span></li>
                    </ul>
                </button>
            </h2>
        </template>
        <div v-if="showList">   
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="flex justify-center">
                                <h1 id="titulo">LISTA DE MEMBRESÍAS</h1>
                            </div>
                            <div id="form-memb">
                                <div>
                                    <table>
                                        <thead>
                                            <tr class="fila" style="
                                                    border-bottom: 2px solid
                                                        #fcaf09;
                                                ">
                                                <th>
                                                    <Label id="label-txt">ID</Label>
                                                </th>
                                                <th>
                                                    <Label id="label-txt">Nombre</Label>
                                                </th>
                                                <th>
                                                    <Label id="label-txt">Apellido</Label>
                                                </th>
                                                <th>
                                                    <Label id="label-txt">Correo</Label>
                                                </th>
                                                <th>
                                                    <Label id="label-txt">Estatus</Label>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="fila">
                                                <td>
                                                    <Label id="label-txt">01</Label>
                                                </td>
                                                <td>
                                                    <Label id="label-txt">Manolo</Label>
                                                </td>
                                                <td>
                                                    <Label id="label-txt">Sanchez</Label>
                                                </td>
                                                <td>
                                                    <Label id="label-txt">MSanchez@mail.com</Label>
                                                </td>
                                                <!--Para el estatus hay que hacer una comparacion de que si en la bd status es igual a 1 se escriba "vigente", de lo contrario "vencido"-->
                                                <td>
                                                    <Label id="label-txt">Vigente</Label>
                                                </td>
                                            </tr>
                                            <tr class="fila">
                                                <td>
                                                    <Label id="label-txt">01</Label>
                                                </td>
                                                <td>
                                                    <Label id="label-txt">Manolo</Label>
                                                </td>
                                                <td>
                                                    <Label id="label-txt">Sanchez</Label>
                                                </td>
                                                <td>
                                                    <Label id="label-txt">MSanchez@mail.com</Label>
                                                </td>
                                                <!--Para el estatus hay que hacer una comparacion de que si en la bd status es igual a 1 se escriba "vigente", de lo contrario "vencido"-->
                                                <td>
                                                    <Label id="label-txt">Vigente</Label>
                                                </td>
                                            </tr>
                                            <tr class="fila">
                                                <td>
                                                    <Label id="label-txt">01</Label>
                                                </td>
                                                <td>
                                                    <Label id="label-txt">Manolo</Label>
                                                </td>
                                                <td>
                                                    <Label id="label-txt">Sanchez</Label>
                                                </td>
                                                <td>
                                                    <Label id="label-txt">MSanchez@mail.com</Label>
                                                </td>
                                                <!--Para el estatus hay que hacer una comparacion de que si en la bd status es igual a 1 se escriba "vigente", de lo contrario "vencido"-->
                                                <td>
                                                    <Label id="label-txt">Vigente</Label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="showForm">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="flex justify-center" id="">
                                <div>
                                    <h1 id="titulo">REGISTRO DE MEMBRESÍAS</h1>
                                </div>
                            </div>
                            <form id="form-memb" class="grid grid-cols-2 gap-4">
                                <div>
                                    <h1 class="form_title">
                                        Datos de la membresia
                                    </h1>
                                </div>
                                <div></div>
                                <div>
                                    <Label class="label-txt" id="Nombre">Cliente</Label><br />
                                    <select name="clientes" class="mt-1 block w-full select-clients" id="clientes"
                                        required>
                                        <option value="">Nombre 1</option>
                                        <option value="">Nombre 2</option>
                                        <option value="">Nombre 3</option>
                                        <option value="">Nombre 4</option>
                                    </select>
                                    <InputError class="mt-2" />
                                </div>
                                <div>
                                    <Label class="label-txt" id="Nombre">Mensualidades</Label><br />
                                    <select name="clientes" class="mt-1 block w-full select-clients" id="clientes"
                                        required>
                                        <option value="1">1 MES</option>
                                        <option value="2">2 MESES</option>
                                        <option value="3">3 MESES</option>
                                        <option value="6">6 MESES</option>
                                        <option value="12">12 MESES</option>
                                    </select>
                                    <InputError class="mt-2" />
                                </div>
                                <div>
                                    <Label class="label-txt">Fecha Inicio</Label><br />
                                    <Input id="" type="date" class="mt-1 block w-full input-form" required />
                                    <InputError class="mt-2" />
                                </div>
                                <div>
                                    <Label class="label-txt">Fecha Final</Label><br />
                                    <Input id="" type="date" class="mt-1 block w-full input-form" />
                                    <InputError class="mt-2" />
                                </div>
                                <div>
                                    <Label class="label-txt">Importe</Label><br />
                                    <div class="input-group mt-1">
                                        <input id="importe" type="text" class="form-control input-form" required
                                            autofocus style="padding-left: 3rem" maxlength="5" />
                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">$</span>
                                    </div>
                                    <p style="
                                            color: #ffb921;
                                            margin-top: 1rem;
                                            font-style: italic;
                                        ">
                                        Maximo 5 digitos ó $99999.
                                    </p>
                                    <InputError class="mt-2" />
                                </div>
                                <div>
                                    <BarcodeScanner />
                                </div>
                                <div class="col-span-2 flex justify-center mt-4">
                                    <Button class="ml-4" id="btn-menu" @click="togglePopUp()">
                                        Crear
                                    </Button>
                                </div>
                            </form>
                        </div>
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
    margin-bottom: 3rem;
    margin-top: 1rem;
    text-align: center;
}

#form-memb {
    height: auto;
    font-family: "Quicksand", sans-serif;
    border-radius: 15px;
    border: 2px solid;
    border-color: #f0a400;
    background-color: #2e353ce3;
    padding: 2.5rem;
    padding-top: 2rem;
    --overflow: auto;
    -webkit-box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
    box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
}

.label-txt {
    color: #ffb921;
    font-size: 20px;
    --opacity: 0.4;
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

.nav-button {
    font-family: "Quicksand", sans-serif;
    font-weight: 500;
    margin-left: 5%;
    padding: 2px;
}

.input-group {
    position: relative;
}

.input-group .form-control {
    padding-left: 30px;
}

.input-group .input-group-text {
    position: absolute;
    left: 2px;
    /* Ajusta la posición del símbolo "$" según sea necesario */
    top: 50%;
    transform: translateY(-50%);
    background-color: #f0f0f0;
    border: 1px solid #ced4da;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    color: #495057;
    line-height: 1.5;
    border-radius: 0.25rem 0 0 0.25rem;
}

.input-form {
    height: 3rem;
    border: 3px solid;
    border-color: #ffffff;
    background-color: whitesmoke;
    font-size: larger;
    color: black;
    -webkit-box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
    box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
}

.input-form:focus {
    transition: 500ms;
    border-color: #fcaf09;
}

.select-clients {
    border: 2px solid;
    border-color: #ffffff;
    background-color: whitesmoke;
    font-size: larger;
    color: black;
    -webkit-box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
    box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
}

/* Estilo personalizado para el cuadro de entrada con el símbolo "$" */
.input-group {
    position: relative;
}

.input-group-text {
    background-color: #f0f0f0;
    border: 1px solid #ced4da;
    border-radius: 0.25rem 0 0 0.25rem;
    padding: 0.375rem 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    border-radius: 0.25rem;
}

.form-control {
    border-radius: 0 0.25rem 0.25rem 0;
}

.select-clients:focus {
    transition: 500ms;
    border-color: #fcaf09;
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

.form_title {
    font-family: "Quicksand", sans-serif;
    color: whitesmoke;
    font-size: 28px;
    font-weight: bold;
    text-align: left;
}

.fila {
    display: flex;
    justify-content: space-between;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th,
td {
    width: 200px;
    padding: 8px;
    --word-wrap: break-word;
    text-align: center;
    --overflow-x: scroll;
    overflow-x: auto;
}

/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 50px grey;
    border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #fcaf09;
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #cb8f0e;
}

ul {
    padding: 0;
    list-style-type: none;
}

li {
    font-weight: 200;
    font-size: 15px;
    width: 8em;
    height: 2em;
    color: orange;
    border-left: 0.08em solid;
    position: relative;
    margin-top: 0.8em;
    cursor: pointer;
}

li::before,
li::after {
    content: "";
    position: absolute;
    width: inherit;
    border-left: inherit;
    z-index: -1;
}

li::before {
    height: 80%;
    top: 10%;
    left: calc(-0.15em - 0.08em * 2);
    filter: brightness(0.8);
}

li::after {
    height: 60%;
    top: 20%;
    left: calc(-0.15em * 2 - 0.08em * 3);
    filter: brightness(0.6);
}

li span {
    position: relative;
    height: 120%;
    top: -10%;
    box-sizing: border-box;
    border: 0.08em solid;
    background-color: #333;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    text-transform: capitalize;
    transform: translateX(calc(-0.15em * 3 - 0.08em * 2));
    transition: 0.3s;
}

li:hover span {
    transform: translateX(0.15em);
}
</style>
