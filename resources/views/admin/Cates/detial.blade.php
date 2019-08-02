@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> Simple Table</span>
    </div>
    <div class="mws-panel-body no-padding">
        @if(!empty($goods))
        <table class="mws-table">
            <thead>
                <tr>
                    <th>商品名</th>
                    <th>库存</th>
                    <th>市场价格</th>
                    <th>本站价格</th>
                    <th>状态</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($goods as $k=>$v)
                <tr class="name">
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->num }}</td>
                    <td>{{ $v->mprice }}</td>
                    <td>{{ $v->price }}</td>
                    <td>{{ $v->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h1>此分类没有商品</h1><a href="/admin/goods/create">去添加</a>
        @endif
    </div>
</div>
@endsection