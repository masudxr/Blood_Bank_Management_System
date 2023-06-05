<x-layout>
    <h2>
        Blood Stock List !!
    </h2>
    <br />

    <table id="customers">
        <tr>
            <th><strong>Blood Group</strong></th>
            <th><strong>Total Stock</strong></th>
        </tr>
        @foreach($list as $stock)
        <tr>
            <td>{{$stock->blood_group}}</td>
            <td>{{$stock->bags}}</td>
        </tr>
        @endforeach
    </table>
</x-layout>