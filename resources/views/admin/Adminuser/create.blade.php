@extends('admin.layout.index')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-ok"></i> 管理员添加</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form id="mws-validate" class="mws-form" action="/admin/adminuser" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}
        	<div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
        	<div class="mws-form-inline">
            	<div class="mws-form-row">
                	<label class="mws-form-label">用户名</label>
                	<div class="mws-form-item">
                    	<input type="text" name="uname" value="{{ old('uname') }}" class="required large">
                    </div>
                </div>
                    <!-- <input type="hidden" name="id" value="{{}}" class="required large"> -->

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
                    <label class="mws-form-label">角色</label>
                    <div class="mws-form-item">
                            <ul class="mws-form-list inline">
                                <li><input type="radio" value="1" name="rid"> <label>普通员工</label></li>
                                <li><input type="radio" value="2" name="rid"> <label>管理员</label></li>
                                <li><input type="radio" value="3" name="rid"> <label>超级管理员</label></li>
                               
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