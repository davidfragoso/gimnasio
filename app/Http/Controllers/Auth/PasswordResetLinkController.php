<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Inertia\Response;
use Resend\Resend;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/ForgotPassword', [
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

        // Enviar el correo electrónico utilizando Resend
        $apiKey = env('RESEND_API_KEY');
        $resend = Resend::client($apiKey);

        $resend->emails->send([
            'from' => 'your_email@example.com',
            'to' => $email,
            'subject' => 'Restablecer contraseña',
            'html' => 'Aquí va tu mensaje HTML para restablecer la contraseña.',
        ]);

        return back()->with('status', 'Correo electrónico de restablecimiento de contraseña enviado correctamente.');
    }
}
