<x-homeLayout>
    <div class="row">
        <div class="column">
            <h1>
                Welcome to Kpur Blood Bank Service
            </h1>
            <h3>
                Donate Blood Save A Life
            </h3>
            <a href="/">
                <img class="pic" src="/images/banner.webp" alt="Laracasts Logo">
            </a>
        </div>
        <div class="column">
            <section class="px-6 py-8">
                <main class="max-w-lg max-auto bg-gray-100 p-6 rounded-xl">
                    <h1 class="text-center font-bond text-sl">Log In!</h1>
                    <form method="POST" action="/welcome">
                        @csrf

                        <div class="mb-2">
                            <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="email">
                                Email
                            </label>
                            <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{old('email')}}" required>
                        </div>

                        <div class="mb-2">
                            <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="password">
                                Password
                            </label>
                            <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>
                        </div>

                        <div class="mb-2">
                            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                                Log In
                            </button>
                        </div>
                        <a href="/register">
                            New Here !!, Then Plz Register our Site for more info!
                        </a>
                    </form>
                </main>
            </section>
        </div>

    </div>
</x-homeLayout>