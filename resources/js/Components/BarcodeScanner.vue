<template>
  <div style="text-align: center;display: flex;justify-content: space-between;padding-top: 1.5rem;">
    <button @click="generateBarcodeUrl" class="btn-scanner">Generar Código de Barras</button>
    <input type="text" v-model="barcodeData" maxlength="12" class="input-scanner" placeholder="Ingrese el valor del código de barras">
  </div><br>
  <div v-if="barcodeUrl">
      <img :src="barcodeUrl" alt="Código de barras generado">
    </div>
</template>

<script>
export default {
  data() {
    return {
      barcodeData: '', 
      barcodeUrl: ''   
    };
  },
  methods: {
    generateBarcodeUrl() {
      if (!this.barcodeData) {
        alert('Por favor, ingrese un valor para el código de barras.');
        return;
      }

      const code = 'Code39'; 
      const baseUrl = 'https://barcode.tec-it.com/barcode.ashx';
      const url = `${baseUrl}?data=${this.barcodeData}&code=${code}`;
      this.barcodeUrl = url;
    }
  }
};
</script>

<style scoped>
.btn-scanner {
    font-family: "Quicksand", sans-serif;
    text-align: center;
    width: 15rem;
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
.btn-scanner:hover {
    background-color: #fcaf09;
    border-color: #ffffff00;
    color: black;
    background-image: linear-gradient(to right, #fcaf09, #ce8200);
}
.btn-scanner:active {
    background-color: #df9800;
    transform: translateY(4px);
}
.input-scanner {
    width: 14rem;
    border: 3px solid;
    border-color: #ffffff;
    background-color: whitesmoke;
    font-size: larger;
    color: black;
    -webkit-box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
    box-shadow: 9px 10px 19px -7px rgba(0, 0, 0, 0.75);
}
.input-scanner:focus {
    transition: 500ms;
    border-color: #fcaf09;
}
</style>
