@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>Inline Form</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/goods" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品名称</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="name" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品库存</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="num" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">市场价格</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="mprice" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">本站价格</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="price" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">展示图片</label>
                    				<div class="mws-form-item">
                    					<input type="file" name="image[]" class="medium" multiple>
                    				</div>
                    			</div>

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品描述</label>
                    				<div class="mws-form-item">
						                  <script id="editor" name="desc" type="text/plain" style="width:800px;height:500px;"></script>
                    				</div>
                    			</div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">所属分类</label>
                                    <div class="mws-form-item">
                                        <select class="small" name="cid">
                                            <option value="0">--请选择--</option>
                                            @foreach($cates as $k=>$v)
                                                <option value="{{ $v->id }}"  {{ substr_count($v->path,',') <= 2 ? 'disabled' : "" }}>{{ $v->cname }}</option>
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

<script type="text/javascript" charset="utf-8" src="/aaa/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/aaa/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/aaa/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">

var ue = UE.getEditor('editor', {
       toolbars: [['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'emotion', 'link', 'insertimage', 'fullscreen']],
       elementPathEnabled: false,
       enableContextMenu: false,
       wordCount:false,
       emotionLocalization:true,
       imagePopup:false
   });
console.log(ue);



</script>
@endsection
