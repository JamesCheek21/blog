<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg m-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Log In</h1>
                <form method="POST" action="/login" class="mt-10">
                    @csrf
                    <x-form.input name="email" type="email" autocomplete="username" />
                    <x-form.input name="password" type="password" autcomplete="new-password" />
                    <x-form.button class="bg-blue-400 text-white round py-2 px-4 hover:bg-blue-500"
                        type="submit">
                        Login
                    </x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
