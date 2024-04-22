<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import axios from "axios";

const showList = ref(false);
const showForm = ref(true);
const clientes = ref([]);

const nombre = ref("");
const apellido = ref("");
const correo = ref("");

const submit = async () => {
    const user = {
        nombre: nombre.value,
        apellido: apellido.value,
        email: correo.value,
        estatus: 1,
    };
    try {
        const clientesResponse = await axios
            .post("/registrar-cliente", user)
            .then(function (response) {
                console.log(response);
            });
    } catch (error) {
        console.error("Error al registrar el cliente nuevo:", error);
    }
};

async function fetchClientes() {
    try {
        const clientesResponse = await axios.get("/clientes-registrados");
        clientes.value = clientesResponse.data;
        console.log(clientes);
    } catch (error) {
        console.error("Error al obtener los clientes:", error);
    }
}

onMounted(fetchClientes);
</script>

<template>
    <Head title="Clientes" />
    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Clientes
                <button
                    @click="
                        showList = !showList;
                        showForm = !showForm;
                    "
                    class="nav-button"
                >
                    <ul>
                        <li><span>Lista</span></li>
                    </ul>
                </button>
            </h2>
        </template>
        <div v-if="showList">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div
                        class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                    >
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="flex justify-center">
                                <h1 id="titulo">LISTA DE CLIENTES</h1>
                            </div>
                            <div class="form-clients">
                                <div>
                                    <table>
                                        <thead>
                                            <tr
                                                class="fila"
                                                style="
                                                    border-bottom: 2px solid
                                                        #fcaf09;
                                                "
                                            >
                                                <th>
                                                    <label id="label-txt"
                                                        >ID</label
                                                    >
                                                </th>
                                                <th>
                                                    <label id="label-txt"
                                                        >Nombre</label
                                                    >
                                                </th>
                                                <th>
                                                    <label id="label-txt"
                                                        >Apellido</label
                                                    >
                                                </th>
                                                <th>
                                                    <label id="label-txt"
                                                        >Correo</label
                                                    >
                                                </th>
                                                <th>
                                                    <label id="label-txt"
                                                        >Estatus</label
                                                    >
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                class="fila"
                                                v-for="cliente in clientes"
                                                :key="cliente.id"
                                            >
                                                <td>
                                                    <label id="label-txt">{{
                                                        cliente.id_cliente
                                                    }}</label>
                                                </td>
                                                <td>
                                                    <label id="label-txt">{{
                                                        cliente.nombre
                                                    }}</label>
                                                </td>
                                                <td>
                                                    <label id="label-txt">{{
                                                        cliente.apellido
                                                    }}</label>
                                                </td>
                                                <td>
                                                    <label id="label-txt">{{
                                                        cliente.email
                                                    }}</label>
                                                </td>
                                                <!--Para el estatus hay que hacer una comparacion de que si en la bd status es igual a 1 se escriba "vigente", de lo contrario "vencido"-->
                                                <td>
                                                    <label
                                                        id="label-txt"
                                                        v-if="cliente.estatus"
                                                        >Activa</label
                                                    >
                                                    <label id="label-txt" v-else
                                                        >Cancelada</label
                                                    >
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
                    <div
                        class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                    >
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="flex justify-center" id="t-container">
                                <h1 id="titulo">REGISTRO DE CLIENTES</h1>
                            </div>
                            <form
                                class="form-clients"
                                id="registro-clients"
                                @submit.prevent="submit"
                            >
                                <div>
                                    <label class="label-txt">Nombre</label
                                    ><br />
                                    <input
                                        v-model="nombre"
                                        name="nombre"
                                        type="text"
                                        class="mt-1 block w-full input-form"
                                        required
                                        autofocus
                                    />
                                </div>
                                <br />
                                <div class="mt-4">
                                    <label class="label-txt">Apellido</label
                                    ><br />
                                    <input
                                        v-model="apellido"
                                        name="apellido"
                                        type="text"
                                        class="mt-1 block w-full input-form"
                                        required
                                    />
                                </div>
                                <br />
                                <div class="mt-4">
                                    <label class="label-txt">Correo</label
                                    ><br />
                                    <input
                                        v-model="correo"
                                        name="email"
                                        type="email"
                                        class="mt-1 block w-full input-form"
                                        required
                                    />
                                </div>
                                <br />
                                <div
                                    class="flex items-center justify-center mt-4"
                                >
                                    <button class="ml-0" id="btn-menu">
                                        Registrar cliente
                                    </button>
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
}

#registro-clients {
    margin-left: 30%;
    margin-right: 30%;
}

.form-clients {
    height: auto;
    font-family: "Quicksand", sans-serif;
    border-radius: 15px;
    border: 2px solid;
    border-color: #f0a400;
    background-color: #2e353ce3;
    padding: 2.5rem;
    padding-top: 4rem;
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

#forgot-psw-txt {
    color: #fcaf09;
}

#btn-menu {
    font-family: "Quicksand", sans-serif;
    text-align: center;
    width: 10rem;
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

.list-headers {
    display: flex;
    justify-content: space-between;
    border-bottom: 2px solid #fcaf09;
}

.list-content {
    margin-top: 1rem;
    --border: 2px solid;
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
