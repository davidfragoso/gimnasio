<template>
  <div style="text-align: center;">
    <input type="text" v-model="barcodeData" placeholder="Ingrese el valor del código de barras">
    <button @click="generateBarcodeUrl">Generar Código de Barras</button>
    <div v-if="barcodeUrl">
      <img :src="barcodeUrl" alt="Código de barras generado">
    </div>
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

<style>
/* Estilos opcionales */
</style>
