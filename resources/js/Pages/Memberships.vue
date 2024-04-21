<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";

const showList = ref(false);
const showForm = ref(true);
</script>

<template>
  <Head title="Membresías" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Membresías
        <button
          @click="
            showList = !showList;
            showForm = !showForm;
          "
          class="nav-button"
        >
          Lista de membresías
        </button>
      </h2>
    </template>
    <div v-if="showList">
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
              <div class="flex justify-center" id="t-container">
                <h1 id="titulo">LISTA DE MEMBRESÍAS</h1>
              </div>
              <form id="form-log">
                <div></div>
                <br />
                <div class="mt-4"></div>
                <br />
                <div class="block mt-4"></div>
                <br /><br />
                <div class="flex items-center justify-center mt-4"></div>
              </form>
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
              <div class="flex justify-center" id="t-container">
                <div><h1 id="titulo">REGISTRO DE MEMBRESÍAS</h1></div>
              </div>
              <form id="form-memb" class=" grid-cols-2 gap-4">
                <div><h1 class="register">Registro de miembros</h1></div>
                <div></div>
                <div>
                  <Label id="label-txt">Nombre</Label><br />
                  <Input
                    id="email"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="username"
                  />
                  <InputError class="mt-2" />
                </div>
                <div>
                  <Label id="label-txt">Apellido</Label><br />
                  <Input
                    id="password"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autocomplete="current-password"
                  />
                  <InputError class="mt-2" />
                </div>
                <div>
                  <Label id="label-txt">Fecha Inicio</Label><br />
                  <Input
                    id="password"
                    type="date"
                    class="mt-1 block w-full"
                    required
                    autocomplete="current-password"
                  />
                  <InputError class="mt-2" />
                </div>
                <div>
                  <Label id="label-txt">Fecha Final</Label><br />
                  <Input
                    id="password"
                    type="date"
                    class="mt-1 block w-full"
                    required
                    autocomplete="current-password"
                  />
                  <InputError class="mt-2" />
                </div>
                <div>
                  <Label id="label-txt">Importe</Label><br />
                  <Input
                    id="password"
                    type="number"
                    class="mt-1 block w-full"
                    required
                    autocomplete="current-password"
                  />
                  <InputError class="mt-2" />
                </div>
                <div class="col-span-2 flex justify-center mt-4">
                  <PrimaryButton class="ml-4" id="btn-menu"> Crear </PrimaryButton>
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
  margin-bottom: 5rem;
  margin-top: 1rem;
  text-align: center;
}
#form-memb {
  height: auto;
  font-family: "Quicksand", sans-serif;
  border-radius: 15px;
  border: 2px solid;
  border-color: #f0a400;
  background-color: #556b7de3;
  padding: 2.5rem;
  padding-top: 4rem;
  --overflow: auto;
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
.nav-button {
  border: 1px solid;
  font-family: "Quicksand", sans-serif;
  font-weight: 500;
margin-left:5%;
padding: 2px;

}
#email,
#password {
  height: 2rem;
  border: 2px solid;
  border-color: #ffffff;
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

.register {
  font-family: "Quicksand", sans-serif;
  color: whitesmoke;
  font-size: 30px;
  font-weight: bold;
  margin-bottom: 1rem;
  margin-top: 1rem;
  text-align: left;
}

.nav-button:hover{
font-family: "Quicksand", sans-serif;
background-color: #fcaf09;
  border-color: #ffffff00;
  color: black;
  background-image: linear-gradient(to right, #fcaf09, #ce8200);
}
</style>
