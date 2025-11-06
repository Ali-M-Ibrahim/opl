<tbody id="data">
@if (count($data) > 0 )
    @foreach ($data as $d)
        <tr>
            <td>{{$d->code}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->dine}}</td>
            <td>{{$d->mohafaza}}</td>
            <td>{{$d->kadaa}}</td>
            <td>{{$d->address}}</td>
            <td>{{$d->telephone}}</td>
            <td>{{$d->work_telephone}}</td>
            <td>{{$d->university}}</td>
        </tr>
    @endforeach
@endif

</tbody>

