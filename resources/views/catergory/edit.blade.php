<div class="col-xs-4 col-xs-offset-4">
	<center><h4>edit</h4></center>
	<form action="{{ url('/catergory/update') }}" method="post">
        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
        @csrf
		<input type="text" name="uid" value="{{$info['uid']}}" hidden="">
        sua: <input type="text" name="uname" placeholder="{{$info['uname']}}">
        <button type="submit">Sua</button>
	</form>
</div>