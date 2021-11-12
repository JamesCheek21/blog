
@props(['comment'])

<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img class="rounded xl" src="https://i.pravatar.cc/60?u= {{ $comment->id }}" alt="">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs">
                Posted
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
            <p>{{ $comment->body }}</p>
        </header>
    </div>
</article>
