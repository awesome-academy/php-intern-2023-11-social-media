<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800">
                    {{ __("User list") }}
                </div>
            </div>
            <x-button class="mt-4">
                {{ __("Create") }}
            </x-button>
            <table class="table">
                <thead>
                    <th class="text-gray-900" scope="col">#</th>
                    <th class="text-gray-900" scope="col">Name</th>
                    <th class="text-gray-900" scope="col">Username</th>
                    <th class="text-gray-900" scope="col">Action</th>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <th class="text-gray-900 text-center" scope="row">{{ ++$index }}</th>
                            <td class="text-gray-900 text-center">{{ $user->name }}</td>
                            <td class="text-gray-900 text-center">{{ $user->username }}</td>
                            <td class="text-gray-900 text-center">
                                <a href="{{ route('users.edit', ['user' => $user->id]) }}">
                                    <x-button class="mt-4">
                                        {{ __("Edit") }}
                                    </x-button>
                                </a>
                                <x-button class="mt-4">
                                    {{ __("Delete") }}
                                </x-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
