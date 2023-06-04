<x-admin>
    <section class="px-6 py-8">
        <main class="max-w-lg max-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bond text-sl">Add Blood Group And Update Stock!</h1>
            <form method="POST" action="/store" class="mt-10">
                @csrf
                <div class="custom-select mb-6" style="width:200px;">
                    <select name="blood_group">
                        <option value="0">Blood Group</option>
                        @foreach($bloods as $blood)
                        <option name="blood_group" value={{$blood->name}}>{{$blood->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="bags">
                        Stock
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="bags" id="bags" value="{{old('bags')}}" required>
                    @error('bags')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Add Blood
                    </button>
                </div>
            </form>
        </main>
    </section>
    @if (session()->has('success'))
    <div class="fixed bg-blue-500 text-white py-2 px-4 rouded-xl bottom-3 right-3">
        <p>{{session('success')}}</p>
    </div>
    @endif
</x-admin>