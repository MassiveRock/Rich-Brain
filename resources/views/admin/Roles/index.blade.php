@extends('admin.layout.index')

@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i> Simple Table</span>
        </div>
        <div class="mws-panel-body no-padding">
            <table class="mws-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>角色名</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($data as $k=>$v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->rname }}</td>
                        <td>
                        	<a href="">修改权限</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection