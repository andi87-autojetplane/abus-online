<section class="bg-gray-100 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <Link href="#" class="flex justify-center text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="{{ asset('logo/logo.png') }}" alt="logo">
                e-abus
                </Link>
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Lupa Password? Jangan Khawatir. Isi alamat email anda dan kami akan mengirimkan email link reset password sehingga anda dapat membuat password baru.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" />

                <x-splade-form action="{{ route('password.email') }}" class="space-y-4">
                    <x-splade-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :label="__('Email')" required autofocus />

                    <div class="flex items-center justify-end">
                        <x-splade-submit :label="__('Email Password Reset Link')" />
                    </div>
                </x-splade-form>
            </div>
        </div>
