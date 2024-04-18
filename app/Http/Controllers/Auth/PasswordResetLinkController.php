<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use Resend as ResendPackage;

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

        // Obtén el correo electrónico del formulario
        $email = $request->input('email');

        // Verifica si el usuario existe
        $user = User::where('email', $email)->first();

        // Si el usuario no existe, muestra un mensaje de error
        if (!$user) {
            throw ValidationException::withMessages([
                'email' => [trans('passwords.user')],
            ]);
        }

        // Envía el correo electrónico utilizando el servicio Resend
        $apiKey = env('RESEND_API_KEY');
        $resend = ResendPackage::client($apiKey);

        $resend->emails->send([
            'from' => 'programsouth@lilspam.com',
            'to' => $email,
            'subject' => 'Reset Your Password',
            'html' => 'Here is the link to reset your password: <a href="#">Reset Password</a>',
        ]);

        // Redirige de vuelta con un mensaje de éxito
        return back()->with('status', 'Password reset link sent successfully');
    }
}
