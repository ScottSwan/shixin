<!DOCTYPE html>
<html lang="en">
@include('web.common.head',['title'=>'堆图家搜索'])
<body>
	<script type="text/javascript">
		defaultPic = "{{url('uploads/sundry/blogo.jpg')}}"
		self_id = "{{$self_id}}"
		relationUrl = "{{url('webd/user/relation')}}"
		keyword = "{{$keyword}}"
	</script>
	<script src="{{url('web/js/user/relation.js')}}"></script>
	@include('web.common.banner')
	<div class="container">
		<div class="w1248 clearfix" id="main" role='main'>
			@include('web.common.search.menu')
			<div class="find_cater_container">
				<div class="find_cater clearfix" id='tiles'>
					<ul class="find_fold_list clearfix">
					</ul>
				</div>
			</div>
			
			
		</div>
	</div>
	<a href="javascript:;" id='load' class="detail_pop_baddmore">正在加载中。。。</a>
</body>
<script type="text/javascript">
	$(function() { 
	    $('.find_cater').hide()
	    $.ajax({
	    	'beforeSend':function(){
				layer.load(0, {shade: 0.5});
			},
			'url':"/webd/search/folder",
			'type':'post',
			'data':{
				'keyword':keyword,
				'page':1
			},
			'dataType':'json',
			'success':function(json){
				if(json.code==200 && json.data.list!=0 && json.data.list!=null){
					data = json.data.list
					var str = ''
					$.each(data,function(index,v){
						gpic_1 = data[index].goods[0] != undefined?data[index].goods[0].image_url:defaultPic
						gpic_2 = data[index].goods[1] != undefined?data[index].goods[1].image_url:defaultPic
						gpic_3 = data[index].goods[2] != undefined?data[index].goods[2].image_url:defaultPic
						mrightzero = (parseInt(index)+1)%5==0?'mrightzero':''
						follow = v.is_follow==1?'已关注':'<span>+</span>特别关注'
						glink_1 = data[index].goods[0] != undefined?'/webd/pic/'+data[index].goods[0].id:'#'
						glink_2 = data[index].goods[1] != undefined?'/webd/pic/'+data[index].goods[1].id:'#'
						glink_3 = data[index].goods[2] != undefined?'/webd/pic/'+data[index].goods[2].id:'#'
						
						var none = (data[index].user.id==self_id)?'style="display: none"':''
						nick = v.user.nick!=''?v.user.nick:v.user.username
						pic_m = v.user.auth_avatar!=null?v.user.auth_avatar:v.user.pic_m
						str += '<li class="find_fold_li '+mrightzero+'" folder_id='+v.id+'>'
							+'<div class="find_fold_info clearfix">'
								+'<div class="find_fold_authava">'
									+'<a href="/webd/user?oid='+v.user.id+'" target="_blank"><img src="'+pic_m+'" alt=""></a>'
								+'</div>'
								+'<div class="find_fold_tname">'
									+'<a href="/webd/folder?fid='+v.id+'" target="_blank" class="find_fold_name">'+v.name+'</a>'
									+'<a href="/webd/user?oid='+v.user.id+'" target="_blank" class="find_fold_authnme">'+nick+'</a>'
								+'</div>'
							+'</div>'
							+'<div class="find_fold_imgwrap">'
								+'<div class="find_fold_imgblur"></div>'
								+'<a href="/webd/folder?fid='+v.id+'" class="position" target="_blank"><img src="'+v.img_url+'" alt=""></a>'
								+'<div class="find_fold_catflw">'+v.count+'文件&nbsp;&nbsp;'+v.collection_count+'关注</div>'
							+'</div>'
							+'<div class="find_fold_limg clearfix">'
								+'<div class="find_fold_liwrap">'
									+'<div class="find_fold_liblur"></div>'
									+'<a href="'+glink_1+'" target="_blank" class="position"><img src="'+gpic_1+'" alt=""></a>'
								+'</div>'
								+'<div class="find_fold_liwrap">'
									+'<div class="find_fold_liblur"></div>'
									+'<a href="'+glink_2+'" target="_blank" class="position"><img src="'+gpic_2+'" alt=""></a>'
								+'</div>'
								+'<div class="find_fold_liwrap">'
									+'<div class="find_fold_liblur"></div>'
									+'<a href="'+glink_3+'" target="_blank" class="position"><img src="'+gpic_3+'" alt=""></a>'
								+'</div>'
							+'</div>'
							+'<a onclick="relation(this)" class="find_fold_authflw" '+none+'>'+follow+'</a>'
						+'</li>'
					})
					$('.find_cater').eq(0).append(str)
				}
			},
			'complete':function(){
				layer.closeAll('loading');
			}
	    })
	    $('.find_cater').eq(0).show()
	});
</script>
<script src="{{url('web/js/search/index.js')}}"></script>
</html>