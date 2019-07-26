@extends('admin.layout.index')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>添加分类</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/admin/cates" method="post">
    		{{ csrf_field() }}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">分类名</label>
    				<div class="mws-form-item">
    					<input type="text" name="cname" class="small">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">所属分类</label>
    				<div class="mws-form-item">
    					<select class="small" name="pid">
    						<option value="0">--请选择--</option>
    						@foreach($cates as $k=>$v)
    							<option value="{{ $v->id }}" {{ $v->id == $id ? 'selected' : '' }} {{ substr_count($v->path,',') >= 3 ? 'disabled' : "" }}>{{ $v->cname }}</option>
    						@endforeach
    					</select>
    				</div>
    			</div>

    			
    		</div>
    		<div class="mws-button-row">
    			<input type="submit" value="Submit" class="btn btn-danger">
    			<input type="reset" value="Reset" class="btn ">
    		</div>
    	</form>
    </div>    	
</div>
@endsection