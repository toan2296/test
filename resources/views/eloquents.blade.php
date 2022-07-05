<div>
    
    <a href="catergory/add">Them</a>
    <table>
        <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>Sua</th>
            <th>Xoa</th>
        </tr>
        @foreach ($eloquents as $eloquent)
            <tr>
                <td>{{$eloquent->uid}}</td>
                <td>{{$eloquent->uname}}</td>
                <td><a href="catergory/edit/{{$eloquent->uid}}">Sua</a></td>
                <td><a href="delete/{{$eloquent->uid}}">Xoa</a></td>
            </tr>
        @endforeach
        
    </table>
</div>