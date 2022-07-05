<div class="col-xs-4 col-xs-offset-4">
	<center><h4>add</h4></center>
	<form action="{{ url('/catergory/add') }}" method="post">
		<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
		<div class="form-group">
			<label for="uname">user name</label>
			<input type="text" class="form-control" id="uname"  name="uname" placeholder="uname" maxlength="15"  required />
		</div>		
		<button type="submit">Thêm</button>
	</form>
</div>