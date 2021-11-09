<x-layout>

        @foreach ($posts as $post)
            <article class="{{ $loop->odd ? 'mb-6' : ''}}">
                <h1>
                    <a href="/posts/{{ $post->id; }}">

                        {{ $post->title }}

                    </a>
                </h1>
                <div>
                    {{ $post->excerpt }}
                </div>
            </article>
        @endforeach

</x-layout>