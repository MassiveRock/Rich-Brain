@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>用户列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>用户名</th>
                    <th>邮箱</th>
                    <th>手机号</th>
                    <th>头像</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($users as $k=>$v)
                <tr>	
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->uname }}</td>
                    <td>{{ $v->email }}</td>
                    <td>{{ $v->phone }}</td>
                    <td>
                    	<img src="/uploads/{{ $v->userinfo->profile }}" style="width:80px; border-radius:10px;">
                    </td>
                    <td>
                        <form action="/admin/users/{{ $v->id }}" method="post" style="display:inline;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="删除">
                            
                        </form>
                    	<a href="/admin/users/{{ $v->id }}/edit" class="btn btn-info">修改</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <div  id="page_page">
        	{{ $users->links() }}
        </div>
    </div>
</div>
@endsection