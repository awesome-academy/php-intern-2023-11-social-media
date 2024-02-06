<div class="bg-white shadow sm:rounded-lg p-6 mb-4">
    <div class="flex justify-between items-center">
        <div class="flex">
            <img class="circle__image mr-3" src="{{ asset('images/default_avatar.png') }}" alt="">
            <div class="ml-1">
                <a href="#" class="font-semibold post__author">{{ $username }}</a>
                <div class="flex items-center text-xs text-gray-600">
                    <div class="mr-2">{{ $createdAt }}</div>
                    @if ($status == '0')
                        <i class="fa-solid fa-earth-americas"></i>
                    @else
                        <i class="fa-solid fa-lock"></i>
                    @endif
                </div>
            </div>
        </div>
        <div class="flex">
            <div class="circle__btn flex items-center justify-center mr-3">
                <x-dropdown>
                    <x-slot name="trigger">
                        <i class="fa-solid fa-ellipsis text-xl"></i>
                    </x-slot>

                    <x-slot name="content">
                        @if ($currentUserId == $userId)
                            <x-dropdown-link :href="route('posts.edit', ['post' => $postId])">
                                <i class="fa-solid fa-pen w-4 mr-2"></i>
                                {{ __('Edit') }}
                            </x-dropdown-link>
                            <x-dropdown-link>
                                <i class="fa-solid fa-trash w-4 mr-2"></i>
                                {{ __('Delete') }}
                            </x-dropdown-link>
                        @else
                            <x-dropdown-link>
                                <i class="fa-solid fa-bookmark w-4 mr-2"></i>
                                {{ __('Save') }}
                            </x-dropdown-link>
                            <x-dropdown-link>
                                <i class="fa-solid fa-bullhorn w-4 mr-2"></i>
                                {{ __('Report') }}
                            </x-dropdown-link>
                        @endif
                    </x-slot>
                </x-dropdown>
            </div>
            <div class="circle__btn flex items-center justify-center ml-1">
                <i class="fa-solid fa-xmark text-xl"></i>
            </div>
        </div>
    </div>
    <div class="mt-6 mb-4">
        {!! nl2br(e($content)) !!}
    </div>
    <div class="flex mb-4 justify-between">
        <a href="#" class="flex like__comment">
            <img src="{{ asset('images/like.png') }}" alt="" class="w-6 mr-3">
            <div class="">
                0
            </div>
        </a>
        <a href="#" class="flex items-center like__comment">
            <div class="">
                0
            </div>
            <i class="fa-solid fa-comment ml-3"></i>
        </a>
    </div>
    <hr>
    <div class="mt-1 flex">
        <button class="text-center py-2 like-btn font-semibold">
            <i class="fa-regular fa-thumbs-up"></i>
            {{ __('Like') }}
        </button>
        <a href="#" class="text-center py-2 comment-btn font-semibold">
            <i class="fa-regular fa-comment"></i>
            {{ __('Comment') }}
        </a>
    </div>
</div>
