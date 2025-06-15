@extends('welcome')

@section('title', 'Login | SITBAP- LISSTRA PENDAM IM')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-900 via-indigo-800 to-purple-700">
        <div class="flex min-h-full flex-col justify-center px-6 py-10 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center text-white">
                <h2 class="mt-10 text-2xl font-bold leading-9 tracking-wide">SITBAP - LISSTRA PENDAM IM</h2>
                <p class="text-base opacity-80">Sistem Terintegrasi Berbasis Web Amanat Pimpinan (SITBAP)</p>

                <!-- LOGO -->
                <div class="mt-6">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo SIARAT" class="mx-auto w-80 h-80 ">
                </div>
            </div>

            <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm bg-white shadow-2xl p-10 rounded-xl">
                @if (session()->has('loginError'))
                    <div id="alert-2"
                        class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Z..." />
                        </svg>
                        <div class="ms-3 text-sm font-medium">{{ session('loginError') }}</div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg p-1.5 hover:bg-red-200">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif

                <form class="space-y-6 mb-2" action="{{ route('authenticate') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <input id="email" name="email" type="email" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm @error('email') is-invalid @enderror"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <input id="password" name="password" type="password" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white hover:bg-indigo-500">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
