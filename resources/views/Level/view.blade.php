@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Organization Chart</div>

				<div class="panel-body">
					<div id="show_orgz"></div>
				</div> 
			</div>
		</div>
	</div>
</div>
@endsection

@section('footer')

	<script type="text/javascript">
	$("#show_orgz").getOrgChart({

		primaryColumns: ["name", "title"],
		theme:"lena",
		color:"lightteal",
		dataSource:[
		@foreach($data as $key)
		{id:{{$key->id}},
			parent:{{$key->parent==0?'null':$key->parent}},
			name:'{{$key->nama}}',
			title:'{{$key->posisi}}' },

			@endforeach
		]
	});
	</script>

@endsection