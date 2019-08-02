@extends('admin.layout.index')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-ok"></i> 管理员添加</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form id="mws-validate" class="mws-form" action="/admin/adminuser/{{ $id }}" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}
            {{ method_field('PUT') }}
        	<div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
        	<div class="mws-form-inline">
            	
                <div class="mws-form-row">
                    <label class="mws-form-label">角色</label>
                    <div class="mws-form-item">
                            <ul class="mws-form-list inline">
                                @foreach($rid as $k=>$v)
                                <li><input type="radio" value="{{ $v->id }}" name="rid" {{ $v->rid == $id ? 'checked' : '' }}> <label>{{ $v->id == 1 ? '普通员工' : ($v->id == 2 ? '管理员' : '超级管理员') }}</label></li>
                               @endforeach
                            </ul>
                    </div>
                </div>
                
            	
            <div class="mws-button-row">
            	<input type="submit" class="btn btn-danger">
            </div>
        </form>
    </div>    	
</div>
@endsection