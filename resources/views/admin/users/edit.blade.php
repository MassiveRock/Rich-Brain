@extends('admin.layout.index')

@section('content')
<!-- 显示验证错误 -->
@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-ok"></i> 用户修改</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form id="mws-validate" class="mws-form" action="/admin/users/{{ $user->id }}" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}
    		{{ method_field('PUT') }}
        	<div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
        	<div class="mws-form-inline">
            	<div class="mws-form-row">
                	<label class="mws-form-label">用户名</label>
                	<div class="mws-form-item">
                    	<input type="text" disabled name="uname" value="{{ $user->uname }}" class="required large">
                    </div>
                </div>
                <div class="mws-form-row">
                	<label class="mws-form-label">头像</label>
                	<div class="mws-form-item">
                    	<input type="file" name="profile" value="" class="required large">
                    	<img src="/uploads/{{ $user->profile }}" style="width:80px; border-radius:10px;">
                    </div>
                </div>

                <div class="mws-form-row">
                	<label class="mws-form-label">邮箱</label>
                	<div class="mws-form-item">
                    	<input type="email" name="email" value="{{ $user->email }}" class="required large">
                    </div>
                </div>
                 <div class="mws-form-row">
                	<label class="mws-form-label">手机号</label>
                	<div class="mws-form-item">
                    	<input type="text" name="phone" value="{{ $user->phone }}" class="required large">
                    </div>
                </div>
            	
            <div class="mws-button-row">
            	<input type="submit" class="btn btn-danger">
            </div>
        </form>
    </div>    	
</div>
@endsection