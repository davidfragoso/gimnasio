<template>
    <div>
      <input type="text" v-model="barcodeValue" @keyup.enter="onBarcodeScanned">
      <button @click="onBarcodeScanned">Escanear</button>
      <div v-if="scannedBarcode">
        <img :src="scannedBarcode" alt="Código de barras escaneado">
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        barcodeValue: '',
        scannedBarcode: ''
      };
    },
    methods: {
      async onBarcodeScanned() {

        try {
          const response = await fetch(`/generate-barcode?type=C39&value=${this.barcodeValue}`);
          if (response.ok) {
            const barcodeData = await response.blob();
            this.scannedBarcode = URL.createObjectURL(barcodeData);
          } else {
            console.error('Failed to generate barcode');
          }
        } catch (error) {
          console.error('Error:', error);
        }
      }
    }
  };
  </script>
  
  <style>
  /* Estilos opcionales */
  </style>
  