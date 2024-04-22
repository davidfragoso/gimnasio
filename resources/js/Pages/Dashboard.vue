<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import BarcodeScanner from "@/Components/BarcodeScanner.vue"; // Asegúrate de ajustar la ruta según la ubicación de tu componente
</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Dashboard
      </h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <div id="root">
                <div class="flex justify-center">
                                <h1 id="titulo">Datos Generales</h1>
                            </div>
              <div class="container pt-1">  
                <div class="row">
                  <div class="c-dashboardInfo col-lg-3 col-md-6">
                    <div class="wrap">
                      <h4
                        class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title"
                      >
                        Miembros totales<svg
                          class="MuiSvgIcon-root-19"
                          focusable="false"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                          role="presentation" 
                        >
                          <path fill="none" d="M0 0h24v24H0z"></path>
                          <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"
                          ></path>
                        </svg>
                      </h4>
                      <span class="hind-font caption-12 c-dashboardInfo__count"
                        >43</span
                      >
                    </div>
                  </div>
                  <div class="c-dashboardInfo col-lg-3 col-md-6">
                    <div class="wrap">
                      <h4
                        class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title"
                      >
                        Clientes totales<svg
                          class="MuiSvgIcon-root-19"
                          focusable="false"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                          role="presentation"
                        >
                          <path fill="none" d="M0 0h24v24H0z"></path>
                          <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"
                          ></path>
                        </svg>
                      </h4>
                      <span class="hind-font caption-12 c-dashboardInfo__count">23</span
                      ><span class="hind-font caption-12 c-dashboardInfo__subInfo"
                        >Último mes: 12</span
                      >
                    </div>
                  </div>
                  <div class="c-dashboardInfo col-lg-3 col-md-6">
                    <div class="wrap">
                      <h4
                        class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title"
                      >
                        Administradores<svg
                          class="MuiSvgIcon-root-19"
                          focusable="false"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                          role="presentation"
                        >
                          <path fill="none" d="M0 0h24v24H0z"></path>
                          <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"
                          ></path>
                        </svg>
                      </h4>
                      <span class="hind-font caption-12 c-dashboardInfo__count"
                        >2</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="flex justify-center">
                                <h1 id="titulo">Últimos miembros</h1>
                            </div>
                            <div id="form-memb">
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
                                                    <Label id="label-txt"
                                                        >ID</Label
                                                    >
                                                </th>
                                                <th>
                                                    <Label id="label-txt"
                                                        >Nombre</Label
                                                    >
                                                </th>
                                                <th>
                                                    <Label id="label-txt"
                                                        >Apellido</Label
                                                    >
                                                </th>
                                                <th>
                                                    <Label id="label-txt"
                                                        >Correo</Label
                                                    >
                                                </th>
                                                <th>
                                                    <Label id="label-txt"
                                                        >Estatus</Label
                                                    >
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="fila">
                                                <td>
                                                    <Label id="label-txt"
                                                        >01</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >Manolo</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >Sanchez</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >MSanchez@mail.com</Label
                                                    >
                                                </td>
                                                <!--Para el estatus hay que hacer una comparacion de que si en la bd status es igual a 1 se escriba "vigente", de lo contrario "vencido"-->
                                                <td>
                                                    <Label id="label-txt"
                                                        >Vigente</Label
                                                    >
                                                </td>
                                            </tr>
                                            <tr class="fila">
                                                <td>
                                                    <Label id="label-txt"
                                                        >01</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >Manolo</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >Sanchez</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >MSanchez@mail.com</Label
                                                    >
                                                </td>
                                                <!--Para el estatus hay que hacer una comparacion de que si en la bd status es igual a 1 se escriba "vigente", de lo contrario "vencido"-->
                                                <td>
                                                    <Label id="label-txt"
                                                        >Vigente</Label
                                                    >
                                                </td>
                                            </tr>
                                            <tr class="fila">
                                                <td>
                                                    <Label id="label-txt"
                                                        >01</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >Manolo</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >Sanchez</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >MSanchez@mail.com</Label
                                                    >
                                                </td>
                                                <!--Para el estatus hay que hacer una comparacion de que si en la bd status es igual a 1 se escriba "vigente", de lo contrario "vencido"-->
                                                <td>
                                                    <Label id="label-txt"
                                                        >Vigente</Label
                                                    >
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="flex justify-center">
                                <h1 id="titulo">Últimos clientes</h1>
                            </div>
                            <div id="form-memb">
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
                                                    <Label id="label-txt"
                                                        >ID</Label
                                                    >
                                                </th>
                                                <th>
                                                    <Label id="label-txt"
                                                        >Nombre</Label
                                                    >
                                                </th>
                                                <th>
                                                    <Label id="label-txt"
                                                        >Apellido</Label
                                                    >
                                                </th>
                                                <th>
                                                    <Label id="label-txt"
                                                        >Correo</Label
                                                    >
                                                </th>
                                                <th>
                                                    <Label id="label-txt"
                                                        >Estatus</Label
                                                    >
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="fila">
                                                <td>
                                                    <Label id="label-txt"
                                                        >01</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >Manolo</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >Sanchez</Label
                                                    >
                                                </td>
                                                <td>
                                                    <Label id="label-txt"
                                                        >MSanchez@mail.com</Label
                                                    >
                                                </td>
                                                <!--Para el estatus hay que hacer una comparacion de que si en la bd status es igual a 1 se escriba "vigente", de lo contrario "vencido"-->
                                                <td>
                                                    <Label id="label-txt"
                                                        >Vigente</Label
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
    </div>
  </AuthenticatedLayout>
</template>

<style scoped>

.row{
display: flex;
justify-content: space-around;
}
#titulo {
    font-family: "Quicksand", sans-serif;
    color: whitesmoke;
    font-size: 38px;
    font-weight: bold;
    margin-bottom: 2rem;
    margin-top: 1rem;
}
.cardcon {
  background-color: #0084f4;
}

.c-dashboardInfo {
  margin-bottom: 15px;
}
.c-dashboardInfo .wrap {
  background: #2e353ce3;
  box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.1);
  border-radius: 7px;
  text-align: center;
  position: relative;
  overflow: hidden;
  padding: 40px 25px 20px;
  height: 100%;
}
.c-dashboardInfo__title,
.c-dashboardInfo__subInfo {
  color: #929292;
  font-size: 1.18em;
}
.c-dashboardInfo span {
  display: block;
}
.c-dashboardInfo__count {
  font-weight: 600;
  font-size: 2.5em;
  line-height: 64px;
  color: #c57308;
}
.c-dashboardInfo .wrap:after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 10px;
  content: "";
}

.c-dashboardInfo:nth-child(1) .wrap:after {
  background: linear-gradient(82.59deg, #00c48c 0%, #00a173 100%);
}
.c-dashboardInfo:nth-child(2) .wrap:after {
  background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
}
.c-dashboardInfo:nth-child(3) .wrap:after {
  background: linear-gradient(69.83deg, #0084f4 0%, #00c48c 100%);
}
.c-dashboardInfo:nth-child(4) .wrap:after {
  background: linear-gradient(81.67deg, #ff647c 0%, #1f5dc5 100%);
}
.c-dashboardInfo__title svg {
  color: #d7d7d7;
  margin-left: 5px;
}
.MuiSvgIcon-root-19 {
  fill: currentColor;
  width: 1em;
  height: 1em;
  display: inline-block;
  font-size: 24px;
  transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  user-select: none;
  flex-shrink: 0;
}

#form-memb {
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
</style>
