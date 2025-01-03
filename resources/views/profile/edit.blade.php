@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-3xl md:text-4xl text-gray-900 mb-8">
                        {{ __('Edit Profile') }}
                    </h2>
                    <form action="{{ route('profile.update') }}" method="post">
                        @csrf
                        @method('PATCH')

                        <!-- Name -->
                        <div class="mb-6">
                            <label for="name" class="block text-base font-medium text-gray-800">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                                   class="mt-2 block w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none transition ease-in-out duration-200">
                        </div>

                        <!-- Email (Readonly) -->
                        <div class="mb-6">
                            <label for="email" class="block text-base font-medium text-gray-800">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                                   readonly
                                   class="mt-2 block w-full p-4 border border-gray-300 rounded-lg bg-gray-100 text-gray-600 cursor-not-allowed focus:ring-2 focus:ring-indigo-500 focus:outline-none transition ease-in-out duration-200">
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-6">
                            <label for="phone" class="block text-base font-medium text-gray-800">Phone Number</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}"
                                   class="mt-2 block w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none transition ease-in-out duration-200">
                        </div>

                        <!-- Password -->
                        <div class="mb-6">
                            <label for="password" class="block text-base font-medium text-gray-800">Password</label>
                            <input type="password" name="password" id="password" placeholder="New Password"
                                   class="mt-2 block w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none transition ease-in-out duration-200">
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-6">
                            <label for="password_confirmation" class="block text-base font-medium text-gray-800">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   placeholder="Confirm New Password"
                                   class="mt-2 block w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none transition ease-in-out duration-200">
                        </div>

                        <!-- Save Button -->
                        <div class="flex justify-center mb-6">
                            <button type="submit"
                                    class="px-6 py-3 text-lg font-semibold bg-indigo-600 text-black rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-500 transition-transform transform hover:scale-105">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
