<x-admin>
    <h2 class="mb-3">
        Donar Details !!
    </h2>
    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2 mb-4">
        <form method="GET" action="#">
            <input type="text" name="search" placeholder="Search Blood Group" class="bg-transparent placeholder-black font-semibold text-sm" value="{{ request('search')}}">
        </form>
    </div>
    <br />
    <h1>
        <a href="/register">
            Add New Donar
        </a>
    </h1>
    <br />

    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Blood Group</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->blood_group}}</td>
            <td>
                <a href="edit?id={{$user->id}}">Edit</a> |
                <a href="delete?id={{$user->id}}">Delete</a>
            </td>
        </tr>
        @endforeach

    </table>
</x-admin>