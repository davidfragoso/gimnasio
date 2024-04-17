<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;

class BarcodeController extends Controller
{
    public function generateBarcode(Request $request)
    {
        $barcode = new DNS1D();
        $barcodeType = $request->input('type', 'C39');
        $value = $request->input('value', '123456789');

        // Genera el código de barras
        $barcodeData = $barcode->getBarcodePNG($value, $barcodeType);

        // Devuelve la imagen del código de barras
        return response($barcodeData)->header('Content-Type', 'image/png');
    }
}
