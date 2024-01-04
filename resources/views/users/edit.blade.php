<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800">
                    {{ __("User edit") }}
                </div>
            </div>
            <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="block mt-1 w-full"
                                    type="text"
                                    name="name"
                                    value="{{ $user->name }}"
                                    required autocomplete="name" />

                </div>
                <div class="mt-4">
                    <x-label for="username" :value="__('Username')" />

                    <x-input id="username" class="block mt-1 w-full"
                                    type="text"
                                    name="username"
                                    value="{{ $user->username }}"
                                    required autocomplete="username" />

                </div>
                <x-button class="mt-4">
                    {{ __("Edit") }}
                </x-button>
            </form>
        </div>
    </div>
</x-app-layout>
