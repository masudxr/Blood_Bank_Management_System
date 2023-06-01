<x-layout>
    <h2>
        Welcome, Registation Here !
    </h2>
    <section class="px-6 py-8">
        <main class="max-w-lg max-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bond text-sl">Donor Registation!</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="name">
                        Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" value="{{old('name')}}" required>
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="email">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{old('email')}}" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="password">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font->nullable()-blod text-xs text-gray-700" for="address">
                        Address
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="address" id="address" value="{{old('address')}}" required>
                    @error('address')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="phone">
                        Phone Number
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="phone" id="phone" value="{{old('phone')}}" required>
                    @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="blood_group">
                        Blood Group
                    </label>
                </div>
                <div class="custom-select mb-6" style="width:200px;">
                    <select>
                        <option value="0">Blood Group</option>
                        @foreach($bloods as $blood)
                        <option value={{$blood->id}}>{{$blood->blood_group}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
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
</x-layout>