
    <div class="container">
        <button><a href="{{ url('/catergory/add') }}">add</a></button>
        <table>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Sua</th>
                <th>Xoa</th>
            </tr>
            @foreach ($catergory as $item)
                
            @endforeach
            
        </table>
    </div>
