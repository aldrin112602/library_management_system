@extends('app')
@section('title', 'Register')

@section('content')
    <section class="w-full flex items-center justify-center px-5" style="min-height: 90vh;">
        <form action="/register" method="POST" class="w-full md:w-6/12 shadow-lg p-6 bg-white rounded-md">
            <br>
            <h1 class="text-5xl font-bold text-slate-600">Register</h1>
            <div class="my-3">
                <label for="name" class="font-semibold text-base">Name</label>
                <input required type="text" name="name" id="name"
                class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
             <div class="my-3">
                <label for="email" class="font-semibold text-base">Email</label>
                <input required type="email" name="email" id="email"
                class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <div class="my-3">
                <label for="username" class="font-semibold text-base">Username</label>
                <input required type="text" name="username" id="username"
                class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <div class="my-3">
                <label for="password" class="font-semibold text-base">Password</label>
                <input required type="password" name="password" id="password"
                class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <div class="my-3">
                <label for="confirm_password" class="font-semibold text-base">Confirm password</label>
                <input required type="password" name="confirm_password" id="confirm_password"
                class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <div class="mt-6 flex items-center justify-start gap-3">
                <button type="submit"
                    class="rounded-md px-10 bg-indigo-600 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                <p class="text-lg">Already have an account? <a href="/login" class="text-indigo-800 font-semibold">Login</a></p>
            </div>
        </form>

    </section>
@endsection
