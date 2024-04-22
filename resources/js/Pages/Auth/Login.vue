<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />
        <div class="flex justify-center text-center" id="t-container">
            <h1 id="titulo">INICIO DE SESIÓN</h1>
        </div>
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <div class="flex flex-col lg:flex-row justify-center items-center">
            <div class="w-full lg:pr-4"> 
                <form @submit.prevent="submit" id="form-log">
                    <div class="mb-4">
                        <InputLabel id="label-txt" for="email" value="Email" /><br>
                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            required
                            autofocus
                            autocomplete="username"
                        />
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
                    <div class="mb-4">
                        <InputLabel id="label-txt" for="password" value="Password" /><br>
                        <TextInput
                            id="password"
                            type="password"
                            class="mt-1 block w-full"
                            v-model="form.password"
                            required
                            autocomplete="current-password"
                        />
                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>
                    <div class="block mb-4">
                        <label class="flex items-center">
                            <Checkbox id="checkbox" name="remember" v-model:checked="form.remember" />
                            <span id="check-txt" class="ml-2 text-sm text-gray-600 dark:text-gray-400"
                                >Mantener sesión iniciada</span
                            >
                        </label>
                    </div>
                    <div class="flex items-center justify-center mb-4">
                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            id="forgot-psw-txt"
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        >
                            ¿Olvidaste tu contraseña?
                        </Link>
                        <PrimaryButton
                            class="ml-4"
                            id="btn-menu"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Entrar
                        </PrimaryButton>
                    </div>
                </form>
            </div>
           
        </div>
    </GuestLayout>
</template>


