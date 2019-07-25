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
    	<span><i class="icon-ok"></i> 用户添加</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form id="mws-validate" class="mws-form" action="/admin/users" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}
        	<div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
        	<div class="mws-form-inline">
            	<div class="mws-form-row">
                	<label class="mws-form-label">用户名</label>
                	<div class="mws-form-item">
                    	<input type="text" name="uname" value="{{ old('uname') }}" class="required large">
                    </div>
                </div>
                <div class="mws-form-row">
                	<label class="mws-form-label">密码</label>
                	<div class="mws-form-item">
                    	<input type="password" name="upass" value="" class="required large">
                    </div>
                </div>
                <div class="mws-form-row">
                	<label class="mws-form-label">确认密码</label>
                	<div class="mws-form-item">
                    	<input type="password" name="repass" value="" class="required large">
                    </div>
                </div>
                <div class="mws-form-row">
                	<label class="mws-form-label">添加头像</label>
                	<div class="mws-form-item">
                    	<input type="file" name="profile" value="" class="required large">
                    </div>
                </div>
                <div class="mws-form-row">
                	<label class="mws-form-label">邮箱</label>
                	<div class="mws-form-item">
                    	<input type="email" name="email" value="{{ old('email') }}" class="required large">
                    </div>
                </div>
                 <div class="mws-form-row">
                	<label class="mws-form-label">手机号</label>
                	<div class="mws-form-item">
                    	<input type="text" name="phone" value="{{ old('phone') }}" class="required large">
                    </div>
                </div>
            	
            <div class="mws-button-row">
            	<input type="submit" class="btn btn-danger">
            </div>
        </form>
    </div>    	
</div>
@endsection