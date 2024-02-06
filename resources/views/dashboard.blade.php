@php
    use Carbon\Carbon;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="px-2 py-1 rounded bar__dashboard mr-2" onclick="document.getElementById('bar__dashboard-modal').classList.add('active')">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div id="bar__dashboard-modal">
                <div class="bar__dashboard-list bg-white pt-4">
                    <div class="flex justify-end pr-4">
                        <div class="circle__btn flex items-center justify-center" onclick="document.getElementById('bar__dashboard-modal').classList.remove('active')">
                            <i class="fa-solid fa-xmark text-xl"></i>
                        </div>
                    </div>
                    <div class="bg-white p-2">
                        <div class="flex items-center p-2">
                            <img class="circle__image mr-3" src="{{ asset('images/default_avatar.png') }}" alt="">
                            <a href="{{ route('posts.create') }}" class="create__post-btn px-4 py-2">{{ __('What are you thinking?') }}</a>
                        </div>
                    </div>
                    <div class="bg-white p-2">
                        <a href="#" class="dashboard__left-btn flex items-center p-2">
                            <img class="circle__image mr-3" src="{{ asset('images/default_avatar.png') }}" alt="">
                            <div class="ml-3">{{ __('Personal page') }}</div>
                        </a>
                        <div class="flex items-center dashboard__left-btn mt-3 p-2">
                            <div class="flex justify-center items-center mr-3">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <div class="ml-3">{{ __('Friends') }}</div>
                        </div>
                        <div class="flex items-center dashboard__left-btn mt-3 p-2">
                            <div class="flex justify-center items-center mr-3">
                                <i class="fa-brands fa-facebook-messenger"></i>
                            </div>
                            <div class="ml-3">Messenger</div>
                        </div>
                        <div class="flex items-center dashboard__left-btn mt-3 p-2">
                            <div class="flex justify-center items-center mr-3 ml-1">
                                <i class="fa-solid fa-bookmark"></i>
                            </div>
                            <div class="ml-2">{{ __('Saved') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-8">
        <div class="max-w-7xl mx-auto sm\:px-6 lg\:px-8 flex app__container">
            <div class="dashboard__left">
                <div class="bg-white shadow sm:rounded-lg p-6">
                    <div class="flex items-center p-2">
                        <img class="circle__image mr-3" src="{{ asset('images/default_avatar.png') }}" alt="">
                        <a href="{{ route('posts.create') }}" class="create__post-btn px-4 py-2">{{ __('What are you thinking?') }}</a>
                    </div>
                </div>
                <div class="bg-white shadow sm:rounded-lg mt-6 p-6">
                    <a href="#" class="dashboard__left-btn flex items-center p-2">
                        <img class="circle__image mr-3" src="{{ asset('images/default_avatar.png') }}" alt="">
                        <div class="ml-3">{{ __('Personal page') }}</div>
                    </a>
                    <div class="flex items-center dashboard__left-btn mt-3 p-2">
                        <div class="flex justify-center items-center mr-3">
                            <i class="fa-solid fa-user-group"></i>
                        </div>
                        <div class="ml-3">{{ __('Friends') }}</div>
                    </div>
                    <div class="flex items-center dashboard__left-btn mt-3 p-2">
                        <div class="flex justify-center items-center mr-3">
                            <i class="fa-brands fa-facebook-messenger"></i>
                        </div>
                        <div class="ml-3">Messenger</div>
                    </div>
                    <div class="flex items-center dashboard__left-btn mt-3 p-2">
                        <div class="flex justify-center items-center mr-3 ml-1">
                            <i class="fa-solid fa-bookmark"></i>
                        </div>
                        <div class="ml-2">{{ __('Saved') }}</div>
                    </div>
                </div>
            </div>
            <div class="dashboard__right">
            @foreach ($posts as $post)
                @if (!($post->status == 1 && Auth::user()->id != $post->user->id))
                    <x-show-post>
                        <x-slot name="username">
                            {{ $post->user->username }}
                        </x-slot>
                        <x-slot name="createdAt">
                            {{ Carbon::parse($post->created_at)->diffForHumans() }}
                        </x-slot>
                        <x-slot name="status">
                            {{ $post->status }}
                        </x-slot>
                        <x-slot name="currentUserId">
                            {{ Auth::user()->id }}
                        </x-slot>
                        <x-slot name="userId">
                            {{ $post->user->id }}
                        </x-slot>
                        <x-slot name="postId">
                            {{ $post->id }}
                        </x-slot>
                        <x-slot name="content">
                            {{ $post->content }}
                        </x-slot>
                    </x-show-post>
                @endif
            @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
