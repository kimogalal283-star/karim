<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - eng.karim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden w-full max-w-4xl flex">
        
        <!-- Image Section -->
        <div class="hidden md:block w-1/2 bg-cover bg-center" style="background-image: url('{{ asset('images/bg-tech.jpg') }}');">
        </div>

        <!-- Login Form Section -->
        <div class="w-full md:w-1/2 p-10">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Welcome Back 👋</h2>

            @if (session('status'))
                <div class="mb-4 text-green-600 text-sm text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 mt-1 focus:ring focus:ring-indigo-300" type="email" name="email" required autofocus />
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" class="w-full border border-gray-300 rounded-lg px-4 py-2 mt-1 focus:ring focus:ring-indigo-300" type="password" name="password" required />
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2">
                        Remember Me
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <div>
                    <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                        Login
                    </button>
                </div>
            </form>

            <p class="mt-6 text-sm text-center text-gray-600">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-indigo-600 hover:underline font-semibold">Register</a>
            </p>
        </div>

    </div>
</body>
</html>
