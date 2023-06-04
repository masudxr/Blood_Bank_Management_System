<x-layout>
    <h2>
        Update Donar Details !
    </h2>
    <section class="px-6 py-8">
        <main class="max-w-lg max-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bond text-sl">Update Donar Details!</h1>
            @foreach($users as $user)
            <form method="POST" action="/admin/edit" class="mt-10">
                @csrf
                <input type="hidden" name="id" value="{{$user->id}}">

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="name">
                        Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" value="{{ $user->name}}" required>
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="email">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{ $user->email}}" required>
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
                    <input class="border border-gray-400 p-2 w-full" type="text" name="address" id="address" value="{{ $user->address}}" required>
                    @error('address')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="phone">
                        Phone Number
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="phone" id="phone" value="{{ $user->phone}}" required>
                    @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="blood_group">
                        Blood Group
                    </label>
                </div>
                <div class="custom-select mb-3" style="width:200px;">
                    <select name="blood_group">
                        <option value="0">Blood Group</option>
                        @foreach($bloods as $blood)
                        <option name="blood_group" value={{$blood->id}}>{{$blood->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>
            @endforeach
        </main>
    </section>
    @if (session()->has('success'))
    <div class="fixed bg-blue-500 text-white py-2 px-4 rouded-xl bottom-3 right-3">
        <p>{{session('success')}}</p>
    </div>
    @endif
</x-layout>