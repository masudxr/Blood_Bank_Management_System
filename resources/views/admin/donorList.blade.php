<x-admin>
    <h2>
        Donar Details !!
    </h2>
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