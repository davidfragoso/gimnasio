<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\SysAdmin;
use Resend\Resend;

class EmailController extends Controller
{
    public function sendEmailsToUsersAndAdmins(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject' => 'required|string',
            'html' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Obtener la lista de usuarios y administradores con sus correos electrónicos
        $users = User::pluck('email')->all();
        $admins = SysAdmin::pluck('email')->all();

        $apiKey = env('RESEND_API_KEY');
        $resend = Resend::client($apiKey);

        // Enviar correos electrónicos a los usuarios
        foreach ($users as $email) {
            $resend->emails->send([
                'from' => 'your_email@example.com',
                'to' => $email,
                'subject' => $request->input('subject'),
                'html' => $request->input('html'),
            ]);
        }

        // Enviar correos electrónicos a los administradores
        foreach ($admins as $email) {
            $resend->emails->send([
                'from' => 'your_email@example.com',
                'to' => $email,
                'subject' => $request->input('subject'),
                'html' => $request->input('html'),
            ]);
        }

        return response()->json(['message' => 'Emails sent successfully']);
    }
}
