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
                    <th>商品名</th>
                    <th>库存</th>
                    <th>市场价格</th>
                    <th>本站价格</th>
                    <th>状态</th>
                    <th>更多</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($arr as $k=>$v)
                <tr class="name">
                    <td>{{ $v['name'] }}</td>
                    <td>{{ $v['num'] }}</td>
                    <td>￥{{ $v['mprice'] }}</td>
                    <td>￥{{ $v['price'] }}</td>
                    <td>售卖中</td>
                    <td>
                    	<form action="/admin/goods/{{ $v['id'] }}">
                    		{{ csrf_field() }}
                    		{{ method_field('GET') }}
                    		<input type="submit" class="btn btn-small" value="详情">
                    	</form>
                    	<form action="/admin/goods/{{ $v['id'] }}" method="post">
                    		{{ csrf_field() }}
                    		{{ method_field('DELETE') }}
                    		<input type="submit" class="btn btn-small" value="删除">
                    	</form>
                    	<a href="" class="btn btn-small">修改</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- <a href="/admin/goods/{{ $v['id'] }}/show">详情</a> -->
    </div>
</div>
@endsection