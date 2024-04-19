<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;
use App\Models\Membership;

class BarcodeController extends Controller
{
    public function generateBarcode(Request $request)
    {
        $request->validate([
            'value' => 'required|string',
            'type' => 'string'
        ]);

        $barcode = new DNS1D();
        $barcodeType = $request->input('type', 'C39');
        $value = $request->input('value');

        $membership = Membership::where('barcode', $value)->first();

        if (!$membership) {
            return response()->json(['error' => 'El código de barras no existe en la base de datos'], 404);
        }

        $barcodeData = $barcode->getBarcodePNG($value, $barcodeType);

        return response($barcodeData)->header('Content-Type', 'image/png');
    }
}
