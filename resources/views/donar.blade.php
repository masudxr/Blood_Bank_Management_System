<x-layout>
    <h2>
        Donar Details !!
    </h2>
    <br />

    <table id="customers">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Blood Group</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->phone}}</td>
    <td>{{$user->address}}</td>
    <td>{{$user->blood_group}}</td>
  </tr>
  @endforeach

</table>
</x-layout>