@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>分类列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>分类名称</th>
                    <th>父级ID</th>
                    <th>分类路径</th>
                    <th>状态</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($cates as $k=>$v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->cname }}</td>
                    <td>{{ $v->pid }}</td>
                    <td>{{ $v->path }}</td>
                    <td>
                    	@if($v->status == 1)
                    		<span style="background:yellowgreen; border-radius:3px;">启用</span>
                    	@else
                    		<span style="background:red; border-radius:3px;">禁用</span>
                    	@endif
                    </td>
                    <td>{{ $v->created_at }}</td>
                    <td>
                    	@if(substr_count($v->path,',') < 3)
                    	    <a href="/admin/cates/create?id={{ $v->id }}" class="btn btn-small">添加子分类</a>
                    	@else
                            <a href="" class="btn btn-small">添加商品</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection