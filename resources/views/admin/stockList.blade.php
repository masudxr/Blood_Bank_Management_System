<x-layout>
    <h2>
        Blood Stock List !!
    </h2>
    <br />

    <table id="customers">
        <tr>
            <th><strong>Blood Group</strong></th>
            <th><strong>Total Stock</strong></th>
            <th><strong>Action</strong></th>
        </tr>
        @foreach($list as $stock)
        <tr>
            <td>{{$stock->blood_group}}</td>
            <td>{{$stock->bags}}</td>
            <td>
            <a href="update?id={{$stock->id}}">Edit</a>
            </td>

        </tr>
        @endforeach
    </table>
</x-layout>