<script type="text/javascript">
	defaultPic = "{{url('uploads/sundry/blogo.jpg')}}"
	user_id = "{{$user_id}}"
	self_id = "{{$self_id}}"
	relationUrl = "{{url('webd/user/relation')}}"
	fid = f_id = "{{$folder['id']}}"

	function addSe(obj){
		if ($(obj).hasClass('detail_raido_wrapred')) {
			$(obj).removeClass('detail_raido_wrapred').addClass('detail_raido_wrap');
		}else{
			$(obj).removeClass('detail_raido_wrap').addClass('detail_raido_wrapred');
		};
	}
</script>
<script src="{{url('web/js/user/relation.js')}}"></script>
<div class="perhome_per_wrap">
			<div class="w1248 w1240 clearfix">
				<div class="detail_perinfo_wrap clearfix">
					<div class="perhome_perinfo clearfix">
						<div class="detail_filetit_wrap">
							<div class="detail_filetit">
								{{$folder['name']}}
							</div>
							<!-- <p class="detail_filedes">{{!empty($folder['user_info']['nick'])?$folder['user_info']['nick']:$folder['user_info']['username']}}</p> -->
							<p class="detail_filedes">{{$folder['description']}}</p>
						</div>
						<div class="detail_fileinfo">
							<div class="detail_fileuser">
								<div class="detail_fuava">
									<a href="/webd/user?oid={{$folder['user_id']}}" target="_blank" title="{{!empty($folder['user_info']['nick'])?$folder['user_info']['nick']:$folder['user_info']['username']}}"><img src="{{!empty($folder['user_info']['auth_avatar'])?$folder['user_info']['auth_avatar']:$folder['user_info']['pic_m']}}" alt="{{!empty($folder['user_info']['nick'])?$folder['user_info']['nick']:$folder['user_info']['username']}}"></a>
								</div>
								<p class="detail_funame">{{!empty($folder['user_info']['nick'])?$folder['user_info']['nick']:$folder['user_info']['username']}}</p>
							</div>
							<?php if(!$folder['private']){?>
							<div class="perhome_perlike_wrap clearfix">
								<a href="{{url('webd/folder')}}?fid={{$folder['id']}}" class="perhome_perlike_label <?php echo $type==1?'perhome_perlike_lon':''; ?>" title="文件">
									<p class="perhome_perlike_num">{{$folder['file_count'] or  $folder['count']}}</p>
									<p class="perhome_perlike_la">文件</p>
								</a>
								<a href="{{url('webd/folder/fans')}}?fid={{$folder['id']}}" class="perhome_perlike_label <?php echo $type==2?'perhome_perlike_lon':''; ?>" title="关注">
									<p class="perhome_perlike_num">{{$folder['fans_count']}}</p>
									<p class="perhome_perlike_la">关注</p>
								</a>
							</div>
							<?php }else{ ?>
								<div class="perhome_perlike_wrap clearfix" style="margin-left: 436px;margin-top: 0px;padding-top: 8px;height:48px;">
									<a href="javascript:;" class="perhome_perlike_label" title="隐私文件">
										<p class="perhome_perlike_num">{{$folder['file_count'] or  $folder['count']}}</p>
										<p class="perhome_perlike_la">隐私文件</p>
									</a>
								</div>
							<?php } ?>
							<div class="detail_filebtn_wrap clearfix">
								<?php if(isset($_GET['o']) && $_GET['o']==1): ?><a class="detail_filebtn detail_fileball" style="color: #969696" href="/webd/folder?fid={{$folder['id']}}">查看全部</a><?php endif; ?>
								<?php if($type==1 && !isset($_GET['o'])): ?><a class="detail_filebtn detail_filebtn_cpadding" style="color: #fff" href="/webd/folder?fid={{$folder['id']}}&o=1">只看商品</a><?php endif; ?>
								<?php if(!$folder['private']): ?>
								<div class="detail_filebtn">
									<div class="detail_filebtn_click detail_fileb_pr">
										分享
										<var class="detail_filebtril"></var>
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
								<?php endif; ?>
								<!-- JiaThis Button BEGIN -->
								<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
								<!-- JiaThis Button END -->
								<?php if($folder['user_id']!=$self_id){ ?>
								<li style="display: inline-block;" folder_id="{{$folder['id']}}"><a href="javascript:;" style="color:#fff" class="detail_filebtn detail_filebtn_cpadding" onclick="relation(this)" >
								<?php echo $folder['is_follow']?"已关注":"<span>+</span>特别关注";?></a></li>
								<?php } ?>
								<?php if($folder['user_id']==$self_id){ ?>
								 <div class="detail_filebtn">
									<div class="detail_filebtn_click detail_fileb_pr" <?php if($type==2){?>onclick="folderEditInner(this)" style="cursor: pointer; padding-right: 15px"<?php } ?>>
										编辑<?php if($type==2){?>文件夹<?php } ?>
										<?php if($type==1){?><var class="detail_filebtril"></var><?php } ?>
									</div>
									<?php if($type==1){?>
									<div class="detail_fileb_select detail_fileb_selectt slideup">
										<div class="detail_fileb_selectw">
											<a class="detail_fileb_seleta detail_fileb_seletah detail_fileb_simg">批量管理文件</a>
											<a class="detail_fileb_seleta detail_fileb_sfld" onclick="folderEditInner(this)">编辑文件夹</a>
											<var class="detail_fileb_setril"></var>
										</div>
									</div>
									<?php } ?>
								</div> 
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="perhome_scroll_wrap">
			<div class="w1248 w1240 clearfix">
				<div class="perhome_scroll_info">
					<div class="detail_fileuser">
						<div class="detail_fuava">
							<a href="/webd/user?oid={{$folder['user_id']}}" target="_blank"><img src="{{!empty($folder['user_info']['auth_avatar'])?$folder['user_info']['auth_avatar']:$folder['user_info']['pic_m']}}" alt=""></a>
						</div>
						<p class="detail_funame">{{!empty($folder['user_info']['nick'])?$folder['user_info']['nick']:$folder['user_info']['username']}}</p>
					</div>
					<div class="perhome_perlike_wrap clearfix">
						<a href="{{url('webd/folder')}}?fid={{$folder['id']}}" class="perhome_perlike_label perhome_perlike_lon">
							<p class="perhome_perlike_num">{{$folder['file_count'] or  $folder['count']}}</p>
							<p class="perhome_perlike_la">文件</p>
						</a>
						<a href="{{url('webd/folder/fans')}}?fid={{$folder['id']}}" class="perhome_perlike_label">
							<p class="perhome_perlike_num">{{$folder['fans_count']}}</p>
							<p class="perhome_perlike_la">关注</p>
						</a>
					</div>
					<div class="detail_filebtn_wrap clearfix">
								<?php if(isset($_GET['o']) && $_GET['o']==1): ?><a class="detail_filebtn detail_fileball" style="color: #969696" href="/webd/folder?fid={{$folder['id']}}">查看全部</a><?php endif; ?>
								<?php if($type==1 && !isset($_GET['o'])): ?><a class="detail_filebtn detail_filebtn_cpadding" style="color: #fff" href="/webd/folder?fid={{$folder['id']}}&o=1">只看商品</a><?php endif; ?>
								<div class="detail_filebtn">
									<div class="detail_filebtn_click detail_fileb_pr">
										分享
										<var class="detail_filebtril"></var>
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
								<?php if($folder['user_id']!=$self_id){ ?>
								<li style="display: inline-block;" folder_id="{{$folder['id']}}"><a href="javascript:;" style="color:#fff" class="detail_filebtn detail_filebtn_cpadding" onclick="relation(this)" title="堆图家">
								<?php echo $folder['is_follow']?"已关注":"<span>+</span>特别关注";?></a></li>
								<?php } ?>
								<?php if($folder['user_id']==$self_id){ ?>
								 <div class="detail_filebtn">
									<div class="detail_filebtn_click detail_fileb_pr">
										编辑
										<var class="detail_filebtril"></var>
									</div>
									<div class="detail_fileb_select detail_fileb_selectt slideup">
										<div class="detail_fileb_selectw">
											<a class="detail_fileb_seleta detail_fileb_seletah detail_fileb_simg" title="批量管理文件">批量管理文件</a>
											<a class="detail_fileb_seleta detail_fileb_sfld" onclick="folderEditInner(this)" title="编辑文件夹">编辑文件夹</a>
											<var class="detail_fileb_setril"></var>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
				</div>
			</div>
		</div>

		<div class="detail_select_wrap haha">
			<div class="detail_select_bg"></div>
			<div class="w1248 w1240 clearfix">
				<div class="detail_select_con">
					<a href="javascript:;" id="detail_all_select" class="detail_select_cball" title="全选">全选</a>
					<a href="javascript:;" class="detail_select_cbtn detail_select_cbgrey" title="完成">完成</a>
					<a href="javascript:;" class="detail_select_cbtn detail_select_btndele" title="删除">删除</a>
					<a href="javascript:;" onclick="layer_error('该功能仍在建设中')" class="detail_select_cbtn " title="复制至">复制至...</a>
					<a href="javascript:;" onclick="layer_error('该功能仍在建设中')" class="detail_select_cbtn " title="移动至">移动至...</a>
				</div>
			</div>
		</div>

<div class="pop_editfold">
		<div class="pop_con">
			<p class="pop_tit">
				编辑文件夹
				<span class="pop_close"></span>
			</p>
			<div class="pop_namewrap clearfix">
				<span class="pop_labelname">名称</span>
				<input class="pop_iptname" placeholder="取一个好名字，让更多人精准地搜到它" value="" name='fname'>
			</div>
			<div class="pop_deswrap clearfix">
				<span class="pop_labelname">描述</span>
				<textarea class="pop_iptdes"  placeholder="关于你的文件夹"></textarea>
			</div>
			<div class="pop_namewrap clearfix">
				<span class="pop_labelname">封面</span>
				<a href="javascript:;" class="pop_buildbtn detail_filebtn detail_fileball detail_filechange">更改</a>
			</div>
			<div class="pop_namewrap clearfix">
				<span class="pop_labelname">隐私</span>
				<input class="pop_iptprivacy" type="checkbox" id="pop_iptpr3" name="private" private=0>
				<label for="pop_iptpr3"></label>
			</div>
			<div class="pop_btnwrap">
				<a href="javascript:;" class="pop_buildbtn detail_filebtn detail_filebtn_cpadding detail_pop_delete" title="删除文件夹">删除文件夹</a>
				<a href="javascript:;" class="pop_buildbtn detail_filebtn detail_fileball detail_pop_cancel" title="取消">取消</a>
				<a href="javascript:;" class="pop_buildbtn detail_filebtn detail_filebtn_cpadding folderedit" title="编辑">编辑</a>
			</div>
		</div>
	</div>
	<div class="pop_changefold">
		<div class="pop_con">
			<p class="pop_tit">
				更改文件夹封面
			</p>
			<div class="pop_change_pic clearfix">
			<div class="pop_change_wrap">
				<div class="pop_change_imgwrap" style="display: none"><img src="" alt="" class="imgwrap"></div>
				<div class="pop_change_imgwrap" style="display: none"><img src="" alt="" class="imgwrap"></div>
				<div class="pop_change_imgwrap" style="display: none"><img src="" alt="" class="imgwrap"></div>
				<div class="pop_change_imgwrap" style="display: none"><img src="" alt="" class="imgwrap"></div>
				<div class="pop_change_imgwrap" style="display: none"><img src="" alt="" class="imgwrap"></div>
				<div class="pop_change_imgwrap" style="display: none"><img src="" alt="" class="imgwrap"></div>
				<div class="pop_change_imgwrap" style="display: none"><img src="" alt="" class="imgwrap"></div>
				<div class="pop_change_imgwrap" style="display: none"><img src="" alt="" class="imgwrap"></div>
				<div class="pop_change_imgwrap" style="display: none"><img src="" alt="" class="imgwrap"></div>
				<div class="pop_change_imgwrap" style="display: none"><img src="" alt="" class="imgwrap"></div>
			</div>
				<div class="pop_change_imgblur pop_change_imgbleft"></div>
				<div class="pop_change_imgblur pop_change_imgbright"></div>
				<div class="pop_change_imgblurtb pop_change_imgblurt"></div>
				<div class="pop_change_imgblurtb pop_change_imgblurb"></div>
				<a href="javascript:;" class="pop_change_imgbtn pop_change_imgleft"></a>
				<a href="javascript:;" class="pop_change_imgbtn pop_change_imgrigt"></a>
			</div>
			<div class="pop_btnwrap" style="border-top: 1px solid #f1f1f1;">
				<a href="javascript:;" class="pop_buildbtn detail_filebtn detail_fileball detail_pop_cancel" title="取消">取消</a>
				<a href="javascript:;" class="pop_buildbtn detail_filebtn detail_filebtn_cpadding" id="avatarsave" title="保存">保存</a>
			</div>
		</div>
	</div>
<script type="text/javascript">
	$('.pop_iptprivacy').click(function(){
		if($(this).attr('checked') == 'checkbox') return
		if($(this).attr('private') == 1){
			$(this).attr('private',0)
		}else{
			$(this).attr('private',1)
		}
	})
	$('.pop_con').click(function(){
				event.stopPropagation();
			})
	$('.pop_editfold,.pop_editfold .pop_close,.pop_editfold .detail_pop_cancel').click(function(){
		$('.pop_editfold').hide()
	})
	//更改封面
	$('.detail_filechange').click(function(){
		foderid = $(this).parents('.pop_con').attr('fid')
		$('.pop_editfold').hide()
		$('.pop_changefold').attr('fid',foderid)
		$.ajax({
			'url':"{{url('api/goods')}}",
			'type':'get',
			'data':{
				'folder_id':foderid,'num':10,'page':1
			},
			'dataType':'json',
			'success':function(json){
				// console.log(json)
				if(json.code==200){
					list = json.data.list
					$f = $('.pop_changefold .pop_change_imgwrap').slice(0,list.length)
					$('.pop_change_imgwrap').css({'display':'none'})
					$('.pop_change_imgwrap img').attr('src','')
					$.each($f,function(index,v){
						$($f[index]).css({'display':'block'})
						if(list[index].images[0]!=undefined) {
							$('.imgwrap',$f[index]).attr('src',list[index].images[0].img_m)
							$('.imgwrap',$f[index]).attr('id',list[index].images[0].image_id)
						}
					})
					$('.pop_changefold').show();
				}
			}
		})
		
	  	var poptopHei = $('.pop_changefold .pop_con').height();
			$('.pop_con').css({
			   'margin-top':-(poptopHei/2)
		})
	})
	// 修改文件夹
	$('.folderedit').click(function(){
		pop_con = $(this).parents('.pop_con')
		name = $('input[name=fname]',pop_con).val().trim()
		description = $('textarea',pop_con).val().trim()
		private = $('input[name=private]',pop_con).attr('private')
		if(name=='') {
			layer.msg('信息没有填写完全', {icon: 5});
			return 
		}
		$.ajax({
			'beforeSend':function(){
				layer.load(0, {shade: 0.5});
			},
			'url':"{{url('webd/folder/efolder')}}",
			'type':'post',
			'data':{
				'name':name,
				'description':description,'private':private,
				'fid':pop_con.attr('fid'),'user_id':'<?php if(!empty($_COOKIE['user_id'])) echo $_COOKIE['user_id'];?>'
			},
			'dataType':'json',
			'success':function(json){
				if(json.code==200){
					layer.msg('修改成功', {icon: 6});
					setTimeout(function(){
						location.reload()
					},2000)
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
	//保存封面
	$('#avatarsave').click(function(){
		fid = $(this).parents('.pop_changefold').attr('fid')
		var i;
		left = $('.pop_change_wrap').css('left')
		if(left == 0){
			i = 1;
		}else if(left == '200px'){
			i = 0;
		}else{
			i = Math.abs(parseInt(left))/200+1
		}
		img_id = $('.pop_change_wrap img').eq(i).attr('id')
		$.ajax({
			'beforeSend':function(){
				layer.load(0, {shade: 0.5});
			},
			'url':"{{url('webd/folder/avatar')}}",
			'type':'post',
			'data':{
				'image_id':img_id,
				'fid':fid,
				'user_id':'<?php if(!empty($_COOKIE['user_id'])) echo $_COOKIE['user_id'];?>'
			},
			'dataType':'json',
			'success':function(json){
				if(json.code==200){
					location.reload()
				}else{
					layer.msg(json.message, {icon: 5});
					return
				}
			},
			'complete':function(){
				layer.closeAll('loading');
			}
		})
		console.log(i)
	})

	//删除文件夹
	$('.detail_pop_delete').click(function(){
		fid = $(this).parents('.pop_con').attr('fid')
		layer.confirm('确定删除该文件夹？', {
		  btn: ['取消','确定'] //按钮
		}, function(index){
			layer.close(index)
		}, function(){
		  $.ajax({
				'beforeSend':function(){
					layer.load(0, {shade: 0.5});
				},
				'url':"{{url('webd/folder/dfolder')}}",
				'type':'post',
				'data':{
					'fid':fid,'user_id':'<?php if(!empty($_COOKIE['user_id'])) echo $_COOKIE['user_id'];?>'
				},
				'dataType':'json',
				'success':function(json){
					if(json.code==200){
						layer.msg('成功删除',{icon: 6});
						location.reload()
					}else{
						layer.msg(json.message, {icon: 5});
						return
					}
				},
				'complete':function(){
					layer.closeAll('loading');
				}
			})
		});
		
	})
</script>