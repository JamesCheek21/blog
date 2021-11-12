@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf
            <header class="flex items-center">
                <img class="rounded-full" src="https://i.pravatar.cc/40?u= {{ auth()->id() }}" alt="">
                <h2 class="ml-4">Want to Participate?</h2>
            </header>
            <div class=" mt-6">
                <textarea
                    class="w-full text-sm focus:outline-none focus:ring"
                    name="body"
                    rows="5"
                    placeholder="Think of something to say"
                    required></textarea>

                    @error('body')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
            </div>
            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-submit-button>
                    Post
                </x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="">
        <a class="font-semibold hover:underline" href="/register">Register</a> or <a class="font-semibold hover:underline" href="/login">log in</a> to leave a comment
    </p>
@endauth
