<x-layout>
    <h2>
        Update Stock !
    </h2>

    <section class="px-6 py-8">
        <main class="max-w-lg max-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bond text-sl">Update Blood Stock</h1>
            @foreach($list as $li)
            <form method="POST" action="/update" class="mt-10">
                @csrf
                <input type="hidden" name="id" value="{{$li->id}}">

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="blood_group">
                        Blood Group
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="blood_group" id="blood_group" value="{{ $li->blood_group}}" required>
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="bags">
                        Stock
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="bags" name="bags" id="bags" value="{{ $li->bags }}" required>
                    @error('bags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" name="id" value="{{$li->id}}" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Update Stock
                    </button>
                </div>
                @endforeach
            </form>
        </main>
    </section>

</x-layout>