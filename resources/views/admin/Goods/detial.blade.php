@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-pictures"></i>预览图片</span>
    </div>
    <div class="mws-panel-body">
    	
		<ul class="thumbnails mws-gallery">
			@foreach($image as $k=>$v)
			<li>
            	<span class="thumbnail"><img src="/storage/uploads/{{ $v->image }}" alt=""></span>

			</li>
			@endforeach                   			
		</ul>
		
    </div>
</div>
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-pictures"></i>预览图片</span>
    </div>
    <div class="mws-panel-body">
    	@foreach($desc as $k=>$v)
    	{!! $v->desc !!}
    	@endforeach
    </div>
</div>
@endsection