<!DOCTYPE html>
<html lang="en">
<head>
	@include('web.common.head')
</head>
<body>
	<script type="text/javascript">
		defaultPic = "{{url('uploads/sundry/blogo.jpg')}}"
		user_id = "{{$user_id}}"
		self_id = "{{$self_id}}"
		relationUrl = "{{url('webd/user/relation')}}"
	</script>
	<script type="text/javascript" src="{{asset('web')}}/js/user/relation.js"></script>
	<script type="text/javascript" src="{{asset('web')}}/js/like.js"></script>
	<script type="text/javascript" src="{{asset('web')}}/js/autocomplete.js"></script>
	@include('web.common.banner')
	<div class="detail_pop">
		<a href="javascript:;" class="detail_pop_loadclose"></a>
		<a href="{{url('webd/pic/')}}/{{$goods['more']['pre'] or '#'}}" class="detail_pop_loadbtn detail_pop_loadleft"></a>
		<a href="{{url('webd/pic/')}}/{{$goods['more']['next'] or '#'}}" class="detail_pop_loadbtn detail_pop_loadright"></a>

		<div class="perhome_scroll_wrap shadow" style="transform: translate(0px, 0px); transition: transform 200ms ease; display: none; position: fixed;">
			<div class="w1248 w1240 clearfix" style="width: 990px">
				<div class="perhome_scroll_info" style="transform: translate(0px, 0px); transition: transform 200ms ease;">
					<div class="detail_filebtn_wrap clearfix" style="float: left; padding-top: 8px">
						<div href="javascript:;" class="detail_pop_tbtn detail_pop_tbtnbuy detail_pop_tbtn_cpadding detail_pop_collection">保存</div>
						<div href="javascript:;" class="detail_pop_tbtn detail_pop_tbtngrey detail_pop_tbtnlike detail_pop_tbtn_cpadding <?php if($goods['action']) echo 'detail_pop_tbtnlikeon' ?>">喜欢</div>
						<div class="detail_pop_tbtn detail_pop_tbtnright">
								<div class="detail_pop_tbtn_click detail_fileb_pr">
									分享
									<var class="detail_pop_tbtntril"></var>
								</div>
								<div class="detail_fileb_select slideup">
									<div class="detail_fileb_selectw">
										<span class="jiathis_style_32x32" id="own_share">
											<a class="jiathis_button_qzone detail_fileb_selecta detail_fileb_selectah"><img class="detail_fileb_sqq" src="{{asset('web')}}/images/qq.png" height="18" width="15" alt="">QQ</a>
											<a class="jiathis_button_weixin detail_fileb_selecta"><img class="detail_fileb_swx" src="{{asset('web')}}/images/wechat.png" height="17" width="19" alt="">微信</a>
											<a class="jiathis_button_tsina detail_fileb_selecta"><img class="detail_fileb_swx" src="{{asset('web')}}/images/weibo.png" height="19" width="19" alt="">微博</a>
											<a class="jiathis_button_douban detail_fileb_selecta"><img class="detail_fileb_swx" src="{{asset('web')}}/images/douban.png" height="19" width="19" alt="">豆瓣</a>
										</span>
										<var class="detail_fileb_setril"></var>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>

		<div class="detail_pop_wrap w990 clearfix">
			<div class="detail_pop_top clearfix">
				<div class="detail_pop_tleft">
					<div class="detail_pop_tltop">
						<div class="detail_pop_tbtnwarp">
							<div href="javascript:;" class="detail_pop_tbtn detail_pop_tbtnbuy detail_pop_tbtn_cpadding detail_pop_collection">保存</div>
							<div href="javascript:;" class="detail_pop_tbtn detail_pop_tbtngrey detail_pop_tbtnlike detail_pop_tbtn_cpadding <?php if($goods['action']) echo 'detail_pop_tbtnlikeon' ?>">喜欢</div>
							
							<!-- <div href="javascript:;" class="detail_pop_tbtn detail_pop_tbtngrey detail_pop_tbtn_cpadding detail_pop_tbtnright">删除</div> -->
							<div class="detail_pop_tbtn detail_pop_tbtnright">
								<div class="detail_pop_tbtn_click detail_fileb_pr">
									分享
									<var class="detail_pop_tbtntril"></var>
								</div>
								<div class="detail_fileb_select slideup">
									<div class="detail_fileb_selectw">
										<span class="jiathis_style_32x32" id="own_share">
											<a class="jiathis_button_qzone detail_fileb_selecta detail_fileb_selectah"><img class="detail_fileb_sqq" src="{{asset('web')}}/images/qq.png" height="18" width="15" alt="">QQ</a>
											<a class="jiathis_button_weixin detail_fileb_selecta"><img class="detail_fileb_swx" src="{{asset('web')}}/images/wechat.png" height="17" width="19" alt="">微信</a>
											<a class="jiathis_button_tsina detail_fileb_selecta"><img class="detail_fileb_swx" src="{{asset('web')}}/images/weibo.png" height="19" width="19" alt="">微博</a>
											<a class="jiathis_button_douban detail_fileb_selecta"><img class="detail_fileb_swx" src="{{asset('web')}}/images/douban.png" height="19" width="19" alt="">豆瓣</a>
										</span>
										<var class="detail_fileb_setril"></var>
									</div>
								</div>
							</div>
							<!-- JiaThis Button BEGIN -->
								<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
							<!-- JiaThis Button END -->
						</div>

						<script type="text/javascript">
							function re668(obj){
								if($(obj).width()>668) $(obj).css('width','668px')
							}
						</script>
		
						<div class="detail_pop_timgwarp" style="overflow: hidden; text-align: center;">
						<?php if(!empty($goods['detail_url'])){ ?>
							<a href="{{$goods['detail_url']}}" target="_blank"><img src="{{$goods['images'][0]['img_o'] or url('uploads/sundry/blogo.jpg')}}" alt="" onload="re668(this)" class="bigimg"></a>
						<?php  }else{?>
							<img src="{{$goods['images'][0]['img_o'] or url('uploads/sundry/blogo.jpg')}}" alt="" onload="re668(this)" class="bigimg">
						<?php } ?>
							<?php if(!empty($goods['price'])): ?><div class="index_item_price"><?php  echo strpos($goods['detail_url'],'m.fancy.com')?'$':'￥'?><?php echo $goods['price'];?></div><?php endif; ?>

						<?php if(!empty($goods['detail_url']) && $goods['kind']==2){?><a href="{{$goods['detail_url']}}" target="_blank"><img src="{{asset('web')}}/images/vrlogo.png" alt="" style="position: absolute; display: none; left:278.5px;top:50px; z-index: 2" id="vlogo"></a> <?php } ?>
						</div>
						<p class="detail_pop_des" title="{{!empty(trim($goods['description']))?$goods['description']:$goods['title']}}">
							{{!empty(trim($goods['description']))?$goods['description']:$goods['title']}}<a href="javascript:;" class="detail_pop_desmore"></a>
						</p>
						<?php if(!empty($goods['detail_url'])): ?>
							<div class="detail_pop_from">
								来自 <a href="{{$goods['detail_url']}}" class="detail_pop_fromurl" target="_blank"><?php echo mb_substr($goods['detail_url'], 0,50,'utf-8'); ?></a>
								<?php if($goods['kind']==1){ ?>
									<a href="{{$goods['detail_url']}}" target="_blank" style="float: right;" class="detail_pop_tbtn detail_pop_tbtngrey detail_pop_tbtntobuy detail_pop_tbtn_cpadding">去购买</a>
								<?php }elseif($goods['kind']==2){ ?>
									<a href="{{$goods['detail_url']}}" target="_blank" style="float: right;" class="detail_pop_tbtn detail_pop_tbtngrey detail_pop_tbtn_cpadding">查看VR</a>
								<?php } ?>
								<!-- <a href="javascript:;" class="detail_pop_fromwarn"></a> -->
								<!-- <a href="javascript:;" class="detail_pop_fromedit"></a> -->
							</div>
						<?php endif; ?>
					</div>
					<script type="text/javascript">
						$(function(){
							var bheight = $('.bigimg').height()/2-55.5
							$('#vlogo').css({'top':bheight}).show()
						})
					</script>
					<div class="detail_pop_tlbtm">
						<div class="detail_pop_tlbtmauth clearfix">
							<div class="detail_pop_authava">
								<a href="{{url('webd/user/index')}}?oid={{$goods['user_id']}}" target="_blank"><img src="{{!empty($goods['user']['auth_avatar'])?$goods['user']['auth_avatar']:$goods['user']['pic_m']}}" alt=""></a>
							</div>
							<div class="detail_pop_authinfo">
								<p class="detail_pop_authname"><a href="{{url('webd/user/index')}}?oid={{$goods['user_id']}}" target="_blank">{{$goods['user']['nick'] or $goods['user']['username']}}</a></p>
								<p class="detail_pop_authcollect">采集到<span>{{$goods['folder']['name']}}</span></p>
							</div>
							<a class="detail_pop_authfollow detail_filebtn detail_fileball" onclick="relation(this)" user_id="{{$goods['user_id']}}" <?php if($goods['user_id'] == $self_id): ?>style="display: none"<?php endif; ?>>
							<?php 
							switch ($goods['relation']) {
								case 1:
									echo '相互关注';
								break;
								case 2:
									echo '已关注';
								break;
								default:
									echo '<span>+</span>关注';
								break;
							}
							?>
							 </a>
						</div>
						<p class="detail_pop_tlbtmcomment">评论</p>
						<ul class="detail_pop_tlcomlist">
							<?php foreach ($goods['comments'] as $key => $v):?>

							<li class="clearfix" <?php if(!in_array($key, [0,1,2])): ?>style="display: none"<?php endif; ?>>
								<div class="detail_pop_authava">
									<a href="{{url('webd/user/index')}}?oid={{$v['user']['id']}}"><img src="{{!empty($v['user']['auth_avatar'])?$v['user']['auth_avatar']:$v['user']['pic_m']}}" alt=""></a>
								</div>
								<div class="detail_pop_cominfo">
									<p class="detail_pop_comname"><a href="{{url('webd/user/index')}}?oid={{$v['user']['id']}}">{{$v['user']['nick'] or $v['user']['username']}}</a>- {{$v['min']}}前说：
									<!-- <span class="detail_pop_comshare">
										<a href="javascript:;" class="detail_pop_share1"></a>
										<a href="javascript:;" class="detail_pop_share2"></a>
										<a href="javascript:;" class="detail_pop_share3"></a>
									</span> -->
									</p>
									<p class="detail_pop_comcon">{{$v['content']}}</p>
								</div>
								<div class="detail_pop_favor" style="cursor: pointer;" onclick="comment_parise(this)" user_id="{{$self_info['id']}}" comment_id="{{$v['id']}}">{{$v['praise_count']}}</div>
							</li>

							<?php endforeach; ?>
						</ul>
						<?php if(!empty($goods['comments'])): ?><a href="javascript:;" class="detail_pop_loadmore">显示全部评论</a><?php endif; ?>
						<div class="detail_pop_compublish clearfix">
							<div class="detail_pop_authava">
								<a href="{{url('webd/user/index')}}?oid={{$self_info['id']}}"><img src="{{!empty($self_info['auth_avatar'])?$self_info['auth_avatar']:$self_info['pic_m']}}" alt=""></a>
							</div>
							<textarea name="caption" placeholder="添加评论" class="detail_pop_compub" autocomplete="off"></textarea>
						</div>
						<div class="detail_pop_addcom clearfix">
							<a class="detail_pop_authfollow detail_filebtn detail_fileball" style="color:#000" id="add_commit_btn">添加评论</a>
						</div>
					</div>
				</div>
				<div class="detail_pop_tright">
					<div class="detail_pop_trauth clearfix">
						<div class="detail_pop_authava">
							<?php if($goods['folder']['id'] == 0){ ?>
								<img src="{{$goods['folder']['img_url']}}" alt="">
							<?php }else{ ?>
								<a href="{{url('webd/folder')}}?fid={{$goods['folder']['id']}}" target="_blank"><img src="{{$goods['folder']['img_url']}}" alt=""></a>
							<?php } ?>
						</div>
						<div class="detail_pop_authinfo">
							<p class="detail_pop_authname"><a <?php if($goods['folder']['id'] != 0): ?>href="{{url('webd/folder/index')}}?fid={{$goods['folder']['id']}}"<?php endif; ?> target="_blank">{{$goods['folder']['name']}}</a></p>
							<p class="detail_pop_authcollect"><a href="{{url('webd/user/index')}}?oid={{$goods['user_id']}}" target="_blank">{{$goods['user']['nick'] or $goods['user']['username']}}</a></p>
						</div>
						<li folder_id = "{{$goods['folder']['id']}}">
							<a href="javascript:;" class="detail_pop_authfollow detail_filebtn detail_fileball" onclick="relation(this)" <?php  if($goods['user']['id']==$self_id):?>style="display: none"<?php endif; ?>>
								<?php 
									echo $goods['folder']['is_follow']==1?'已关注':'<span>+</span>特别关注';
								?>
							</a>
						</li>
						
					</div>
					<div class="detail_pop_trworks">
						<div class="detail_pop_trwwrap">
							<?php foreach ($goods['more'] as $key => $v):?>
							<?php if(!in_array((string)$key,['next','pre'])){ ?>
								<div class="detail_pop_tritem">
									<div class="index_item_wrap">
										<div class="index_item_imgwrap clearfix">
											<a class="index_item_blurwrap" href="{{url('webd/pic')}}/{{$v['id']}}" <?php if($v['id']==$goods['id']) echo 'style="opacity: 0"'; ?>></a>
											<img src="{{$v['image_url']}}">
										</div>
									</div>
								</div>
							<?php } ?>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			<?php if(!empty($goods['collection_folders'])): ?>
			<div class="detail_pop_bottom">
				<p class="detail_pop_btitle">该采集也在以下文件夹</p>
				<div class="perhome_follow_wrap clearfix">
					<ul class="find_fold_list clearfix" id="ul">
						<?php if(empty($goods['collection_folders'])): ?><p class="nodata">暂无数据</p><?php endif; ?>
						<?php foreach($goods['collection_folders'] as $k=>$v): ?>
							
							<li class="find_fold_li <?php if(($k+1)%4==0) echo 'mrightzero'; ?>" folder_id="{{$v['id']}}">
								<div class="find_fold_info clearfix">
									<div class="find_fold_authava">
										<a href="{{url('webd/user/index')}}?oid={{$v['user']['id']}}" target="_blank"><img src="{{!empty($v['user']['auth_avatar'])?$v['user']['auth_avatar']:$v['user']['pic_m']}}" alt=""></a>
									</div>
									<div class="find_fold_tname">
										<a href="{{url('webd/folder')}}?fid={{$v['id']}}" target="_blank" class="find_fold_name">{{$v['name']}}</a>
										<a href="{{url('webd/user/index')}}?oid={{$v['user']['id']}}" target="_blank" class="find_fold_authnme">{{$v['user']['nick'] or $v['user']['username']}}</a>
									</div>
								</div>
								<div class="find_fold_imgwrap">
									<div class="find_fold_imgblur"></div>
									<a href="{{url('webd/folder')}}?fid={{$v['id']}}" target="_blank" class="position"><img src="{{$v['img_url']}}" alt="" onload="rect(this)"></a>
									<div class="find_fold_catflw">{{$v['count']}}文件&nbsp;&nbsp;{{$v['collection_count']}}关注</div>
								</div>
								<div class="find_fold_limg clearfix">
									<div class="find_fold_liwrap">
										<div class="find_fold_liblur"></div>
										<a href="{{url('webd/pic')}}/{{$v['goods'][0]['id'] or '#'}}" class="position" target="_blank"><img src="{{$v['goods'][0]['image_url'] or url('uploads/sundry/blogo.jpg')}}" alt=""></a>
									</div>
									<div class="find_fold_liwrap">
										<div class="find_fold_liblur"></div>
										<a href="{{url('webd/pic')}}/{{$v['goods'][1]['id'] or '#'}}" class="position" target="_blank"><img src="{{$v['goods'][1]['image_url'] or url('uploads/sundry/blogo.jpg')}}" alt=""></a>
									</div>
									<div class="find_fold_liwrap">
										<div class="find_fold_liblur"></div>
										<a href="{{url('webd/pic')}}/{{$v['goods'][2]['id'] or '#'}}" class="position" target="_blank"><img src="{{$v['goods'][2]['image_url'] or url('uploads/sundry/blogo.jpg')}}" alt=""></a>
									</div>
								</div>
								<a href="javascript:;" class="find_fold_authflw" onclick="relation(this)" <?php  if($v['user_id']==$self_id):?>style="display: none"<?php endif; ?>>
								<?php 
									echo $v['is_follow']==1?'已关注':'<span>+</span>特别关注';
								?>
								</a>
							</li>

						<?php endforeach; ?>
					</ul>
				</div>
			<?php if(!empty($goods['collection_folders'])): ?><a href="javascript:;" class="detail_pop_baddmore" id="more">加载更多</a><?php endif; ?>
			<?php endif; ?>

			<?php if(!empty($goods['folders_one'])): ?>
			<p class="detail_pop_btitle">推荐给你的采集</p>
			<div id="main" role="main" class="w1248 w1240 clearfix" style="width: 1000px">
				<div class="index_con  perhome_wrap" id="tiles">
					<?php if(empty($goods['folders_one'])): ?><p class="nodata">暂无数据</p><?php endif; ?>
					<?php foreach($goods['folders_one'] as $k=>$v): ?>
					<div class="index_item">
						<div class="index_item_wrap">
							<div class="index_item_imgwrap clearfix">
								<a class="index_item_blurwrap" target="_blank" href="{{url('webd/pic')}}/{{$v['id']}}"></a>
								<?php if(!empty($v['price'])): ?><div class="index_item_price">￥{{$v['price']}}</div><?php endif; ?>
								<img src="{{$v['image_url']}}" style="height: {{$v['rh']}}px" onload="resize_xy(this)">
							</div>
							<div class="index_item_info">
								<div class="index_item_top">
									<div class="index_item_intro" title="{{!empty(trim($v['description']))?$v['description']:$v['title']}}">{{!empty(trim($v['description']))?$v['description']:$v['title']}}</div>
									<div class="index_item_rel clearfix" good_id="{{$v['id']}}">
										<a  class="index_item_l" onclick="praise(this,1)">{{$v['praise_count']}}</a>
										<a  class="index_item_c" onclick="collect(this)">{{$v['collection_count']}}</a>
										<?php if($v['kind']==1){ ?>
											<a href="{{$v['detail_url']}}" target="_blank" class="index_item_b"></a>
										<?php } ?>
										<?php if($v['kind']==2){ ?>
											<a onclick="praise(this,2)" class="index_item_d">{{$v['boo_count']}}</a>
										<?php } ?>
									</div>
								</div>
								<?php foreach ($v['collection_good'] as $key => $value):?>
								<div class="index_item_bottom clearfix">
									<a href="{{url('webd/user/index')}}?oid={{$value['user_id']}}" class="index_item_authava" target="_blank">
										<img src="{{!empty($value['user']['auth_avatar'])?$value['user']['auth_avatar']:$value['user']['pic_m']}}" alt="">
									</a>
									<div class="index_item_authinfo">
										<a href="{{url('webd/user/index')}}?oid={{$value['user_id']}}" target="_blank" class="index_item_authname">{{!empty($value['nick'])?$value['nick']:$value['username']}}</a>
										<span class="index_item_authto">采集到</span>
										<p class="index_item_authtopart"><a href="{{url('webd/folder')}}?fid={{$value['folder_id']}}" target="_blank">{{$value['name']}}</a></p>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endif; ?>


	<?php if(!empty($goods['folders_one'])): ?>
	<a href="javascript:;" id='load' class="detail_pop_baddmore" style="display: none;">正在加载中。。。</a>
	<?php endif; ?>

	<script type="text/javascript">
		$('.detail_pop_tbtnlike').click(function(){
			if(u_id==''){
				layer.msg('没有登陆',{'icon':5})
				return
			}
			good_id = $('#collect_inner').attr('img_id')
			if(!$(this).hasClass('detail_pop_tbtnlikeon')){
				$.ajax({
					'beforeSend':function(){
						layer.load(0, {shade: 0.5});
					},
					'url':"/webd/goodaction/create",
					'type':'post',
					'data':{
						'good_id':good_id,
						'action':1,
						'user_id':user_id
					},
					'dataType':'json',
					'success':function(json){
						if(json.code==200){
							$('.detail_pop_tbtnlike').addClass('detail_pop_tbtnlikeon')
						}else{
							layer.msg(json.message, {icon: 5});
							return
						}
					},
					'complete':function(){
						layer.closeAll('loading');
					}
				})
			}else{
				$.ajax({
					'beforeSend':function(){
						layer.load(0, {shade: 0.5});
					},
					'url':"/webd/goodaction/del",
					'type':'post',
					'data':{
						'good_id':good_id,
						'action':1,
						'user_id':user_id
					},
					'dataType':'json',
					'success':function(json){
						if(json.code==200){
							$('.detail_pop_tbtnlike').removeClass('detail_pop_tbtnlikeon')
						}else{
							layer.msg(json.message, {icon: 5});
							return
						}
					},
					'complete':function(){
						layer.closeAll('loading');
					}
				})
			}
		})
	</script>
	<style type="text/css">
	.autocomplete-container {
		position: relative;
		width: 190px;
		height: 32px;
		margin: 0 auto;
		display: inline-block;
	}

	.autocomplete-input {
		width: 218px;
	    height: 36px;
	    background: #f0f0f0;
	    border-radius: 3px;
	    border: none
	}

	.autocomplete-button {
		font-family: inherit;
		border: none;
		background-color: #990101;
		color: white;
		padding: 8px;
		float: left;
		cursor: pointer;
		border-radius: 0px 3px 3px 0px;
		transition: all 0.2s ease-out 0s;
		margin: 0.5px 0px 0px -1px;
	}

	.autocomplete-button:HOVER {
		background-color: #D11E1E;
	}
	#search_form_inner{
		display: inline-block;
		position: absolute;
	    left: 40px;
	    top: 0;
	    z-index: 100
	}
	.proposal-box {
		position: absolute;
		height: auto;
		border-left: 1px solid rgba(0, 0, 0, 0.11);
		border-right: 1px solid rgba(0, 0, 0, 0.11);
		left: 0px;
	}

	.proposal-list {
		list-style: none;
		box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.44);
		-webkit-margin-before: 0em;
		-webkit-margin-after: 0em;
		-webkit-margin-start: 0px;
		-webkit-margin-end: 0px;
		-webkit-padding-start: 0px;
	}

	.proposal-list li {
		text-align: left;
		padding: 5px;
		font-size: 16px;
		border-bottom: 1px solid rgba(0, 0, 0, 0.16);
		height: 25px;
		line-height: 25px;
		background-color: rgba(255, 255, 255, 1);
		cursor: pointer;
	}

	li.proposal.selected {
		background-color: rgba(175, 175, 175, 1);
		color: white;
	}

	#search-box {
		position: relative;
		width: 400px;
		margin: 0 auto;
		display: inline;
	}

	#message {
		/* margin-top: 40px;
		margin-bottom: 50px;
		font-size: 20px;
		text-align: center; */
	}
	</style>
	<!-- 采集时选择文件夹 -->
	<div class="pop_collect p_collect" style="display: none" img_id="{{$goods['id']}}" id="collect_inner">
		<div class="pop_con">
			<div class="pop_col_left">
				<div class="pop_col_ltop clearfix">
					<img src="{{$goods['images'][0]['img_o'] or url('uploads/sundry/blogo.jpg')}}" width="668" alt="">
					<div class="pop_col_dwrap clearfix">
						<textarea class="pop_col_detailtext" title="{{$goods['description']}}" style="resize: none; padding: 0">{{!empty(trim($goods['description']))?trim($goods['description']):trim($goods['title'])}}</textarea>
					</div>
					
					<!-- <a href="javascript:;" class="detail_pop_colledit"></a> -->
				</div>
				
			</div>
			<div class="pop_col_right">
				<div class="pop_col_tit">
					选择文件夹
					<span class="pop_close"></span>
					 <p class="pop_col_tips">
					 该文件已采集到<a href="javascript:;">工业风格</a>文件夹
					 </p>
					<div class="pop_col_sinput_wrap">
						<a href="javascript:;" class="pop_col_sinputbtn"></a>
						<input class="pop_col_sinput" placeholder="搜索">
						<div id="search_form_inner"></div>
					</div>

				</div>

				<div class="">
					<div class="pop_col_colum_wrap">
						<div class="pop_col_alphabet">
							<a href="javascript:;" class="pop_col_alpbtn">A</a><a href="javascript:;" class="pop_col_alpbtn">B</a><a href="javascript:;" class="pop_col_alpbtn">C</a><a href="javascript:;" class="pop_col_alpbtn">D</a><a href="javascript:;" class="pop_col_alpbtn">E</a><a href="javascript:;" class="pop_col_alpbtn">F</a><a href="javascript:;" class="pop_col_alpbtn">G</a><a href="javascript:;" class="pop_col_alpbtn">H</a><a href="javascript:;" class="pop_col_alpbtn">I</a><a href="javascript:;" class="pop_col_alpbtn">J</a><a href="javascript:;" class="pop_col_alpbtn">K</a><a href="javascript:;" class="pop_col_alpbtn">L</a><a href="javascript:;" class="pop_col_alpbtn">M</a><a href="javascript:;" class="pop_col_alpbtn">N</a><a href="javascript:;" class="pop_col_alpbtn">O</a><a href="javascript:;" class="pop_col_alpbtn">P</a><a href="javascript:;" class="pop_col_alpbtn">Q</a><a href="javascript:;" class="pop_col_alpbtn">R</a><a href="javascript:;" class="pop_col_alpbtn">S</a><a href="javascript:;" class="pop_col_alpbtn">T</a><a href="javascript:;" class="pop_col_alpbtn">U</a><a href="javascript:;" class="pop_col_alpbtn">V</a><a href="javascript:;" class="pop_col_alpbtn">W</a><a href="javascript:;" class="pop_col_alpbtn">X</a><a href="javascript:;" class="pop_col_alpbtn">Y</a><a href="javascript:;" class="pop_col_alpbtn">Z</a>
						</div>
						<ul class="pop_col_colum" id="search_inner">
							
						</ul>
						<p class="pop_col_new">最新保存到</p>
						<ul class="pop_col_colum pop_col_colum_new">
							
						</ul>
						<p class="pop_col_new">所有文件夹</p>
						<ul class="pop_col_colum pop_col_colum_all">
							
							
						</ul>
					</div>
					
				</div>
				<div class="pop_add_foldbtn clearfix">
					<a href="javascript:;" class="pop_add_addnew" id="pop_add_addnew">+</a>
					<p class="pop_add_addfont">新建文件夹</p>
				</div>
			</div>
		</div>
	</div>
	<!-- 采集时新建文件夹 -->
	<div class="pop_collect p_folder" style="display: none" id="folder_inner">
		<div class="pop_con">
			<div class="pop_col_left">
				<div class="pop_col_ltop clearfix">
					<img src="{{$goods['images'][0]['img_o'] or url('uploads/sundry/blogo.jpg')}}"  width="668" alt="">
					<div class="pop_col_dwrap clearfix">
						<textarea class="pop_col_detailtext" title="{{$goods['description']}}" style="padding: 0">{{$goods['description']}}</textarea>
					</div>
					
					<!-- <a href="javascript:;" class="detail_pop_colledit"></a> -->
				</div>
			
			</div>
			<div class="pop_col_right">
				<div class="pop_col_tit">
					创建文件夹
					<span class="pop_close"></span>
				</div>
				<div class="pop_col_infowrap">
					<div class="pop_col_name">
						<p class="pop_col_nlabel">名称</p>
						<input class="pop_col_ninput" placeholder="" name="fname" value="">
					</div>
					<div class="pop_col_name">
						<p class="pop_col_nlabel">描述</p>
						<textarea class="pop_col_narea" placeholder=""></textarea>
					</div>
					<div class="pop_col_priv">
						<p class="pop_col_nlabel">隐私</p>
						<input class="pop_iptprivacy" type="checkbox" id="pop_iptpr" name="private" private="0">
						<label for="pop_iptpr"></label>
					</div>
				</div>
				<div class="pop_btnwrap">
					<a href="javascript:;" class="pop_buildbtn detail_filebtn detail_fileball detail_pop_cancel">取消</a>
					<a href="javascript:;" class="pop_buildbtn detail_filebtn detail_filebtn_cpadding" style="float:right;" id="cfolder">创建</a>
				</div>
			</div>
		</div>
	</div>
	
</body>
<script type="text/javascript">
	fid = "<?php echo isset($goods['collection_folders'][0]['id'])?$goods['collection_folders'][0]['id']:0; ?>"
	defaultPic = "{{url('uploads/sundry/blogo.jpg')}}"
	folderUrl = '{{url("webd/pics/folder?oid={$user_id}")}}'
	postUrl = "{{url('webd/pics/img')}}?oid={{$user_id}}&fid="+fid
	moreData = {'num':4,'img_id':{{$goods['id']}}}
	postData = {'num':15,'img_id':{{$goods['id']}}}
	user_id = "<?php if(!empty($_COOKIE['user_id'])) echo $_COOKIE['user_id'];  ?>"
</script>
<script type="text/javascript">
	 
	/*he = $('.detail_pop').height()+10
	$('.detail_pop').css('height',he)*/

	// 添加评论
	$("#add_commit_btn").click(function(){
		if(u_id==''){
			layer.msg('没有登陆',{'icon':5})
			return
		}
		if($('textarea[name=caption]').val().trim()==''){
			layer.msg('没有填写评论',{'icon':5})
			return
		}
		$.ajax({
			'beforeSend':function(){
				layer.load(0, {shade: 0.5});
			},
			'url':"/webd/pics/addcomment",
			'type':'post',
			'data':{
				'good_id':"{{$goods['id']}}",
				'content':$('textarea[name=caption]').val().trim(),
				'user_id':u_id
			},
			'dataType':'json',
			'success':function(json){
				if(json.code==200){
					var commitHtml = '<li class="clearfix">\
									<div class="detail_pop_authava">\
										<a href="/webd/user/index?oid={{$self_info['id']}}"><img src="{{!empty($self_info['auth_avatar'])?$self_info['auth_avatar']:$self_info['pic_m']}}" alt=""></a>\
									</div>\
									<div class="detail_pop_cominfo">\
										<p class="detail_pop_comname"><a href="/webd/user/index?oid={{$self_info['id']}}">{{!empty($self_info['nick'])?$self_info['nick']:$self_info['username']}}</a>- 刚刚说：\
										</p>\
										<p class="detail_pop_comcon">'+$('textarea[name=caption]').val().trim()+'</p>\
									</div>\
									<div class="detail_pop_favor" style="cursor:pointer" onclick="comment_parise(this)" user_id="{{$self_info['id']}}" comment_id="'+json.data.id+'">0</div>\
								</li>'
					$(".detail_pop_tlcomlist").prepend(commitHtml);
					$(".detail_pop_compub").val("")
				}else{
					layer.msg(json.message, {icon: 5});
					return
				}
			},
			'complete':function(){
				layer.closeAll('loading');
			}
		})
		
	})
</script>
 <script type="text/javascript" src="{{asset('web')}}/js/pic.js"></script>
 <script type="text/javascript" src="{{asset('web')}}/js/picbottom.js"></script>
</html>
