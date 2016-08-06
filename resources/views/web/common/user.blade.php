<script type="text/javascript">
	defaultPic = "{{url('uploads/sundry/blogo.jpg')}}"
	user_id = "{{$user_id}}"
	self_id = "{{$self_id}}"
	relationUrl = "{{url('webd/user/relation')}}"
</script>
<script src="{{url('web/js/user/relation.js')}}"></script>
<script src="{{url('web/js/user/blurwrap.js')}}"></script>

<div class="perhome_per_wrap">
			<div class="w1248 w1240 clearfix">
				<div class="perhome_perinfo_wrap clearfix">
					<div class="perhome_perinfo">
						<div class="perhome_perava">
							<img src="{{!empty($user_info['auth_avatar'])?$user_info['auth_avatar']:$user_info['pic_m']}}" alt="{{empty($user_info['nick'])?$user_info['username']:$user_info['nick']}}">
						</div>
						<div class="perhome_perline">
							<?php if($user_id!=$self_id){ ?>
							<a href="javascript:;" onclick="layer_error('该功能仍在建设中')" class="otherhome_follow">留言</a>
							<?php } ?>
							<?php if($user_id!=$self_id){ ?>
							<a href="javascript:;" onclick="relation(this)" class="otherhome_follow otherhome_alfollow" user_id="{{$user_id}}" title="{{empty($user_info['nick'])?$user_info['username']:$user_info['nick']}}">

							<?php 
								switch ($user_info['t_relation']) {
									case '1':
										echo '相互关注';
										break;
									case '2':
										echo '已关注';
										break;
									case '4':
										echo '<span>+</span>关注';
										break;
									default:
										echo '<span>+</span>关注';
										break;
								}
							?>
							</a>
							<?php } ?>
						</div>
						<div class="perhome_perdes">
							<div class="perhome_pername">
								{{empty($user_info['nick'])?$user_info['username']:$user_info['nick']}}
							</div>
							<div class="perhome_perwechat">
								微信号：{{empty(trim($user_info['wechat']))?'木有填写':$user_info['wechat']}}
							</div>
							<div class="perhome_persketch">
								签名：{{empty($user_info['signature'])?'用户太懒什么也没有留下':$user_info['signature']}}
		                    </div>
						</div>
								
							</div>
						</div>
			</div>
			<div class="perhome_perlike_wrap clearfix" style="width: 100%;background:#fff;">
				<div class="w1248 w1240 clearfix">
					<div class="perhome_cater_info" style="display:none">
						<div class="perhome_scroll_ava">
							<img src="{{!empty($user_info['auth_avatar'])?$user_info['auth_avatar']:$user_info['pic_m']}}" alt="{{empty($user_info['nick'])?$user_info['username']:$user_info['nick']}}">
						</div>
						<div class="perhome_scroll_name">{{empty($user_info['nick'])?$user_info['username']:$user_info['nick']}}</div>
					</div>
					
					<div class="perhome_cater_wrap clearfix" style="width: 690px;margin: auto;padding: 6px 0px;">
						<a href='{{url("webd/user/index?oid={$user_id}")}}' class="perhome_perlike_label <?php echo $type==1?'perhome_perlike_lon':''; ?>" title="文件夹">
						<p class="perhome_perlike_num">{{$user_info['count']['folder_count']}}</p>
						<p class="perhome_perlike_la">文件夹</p>
						</a>
						<a href='{{url("webd/user/praise?oid={$user_id}")}}' class="perhome_perlike_label <?php echo $type==2?'perhome_perlike_lon':''; ?>" title="喜欢">
							<p class="perhome_perlike_num">{{$user_info['count']['praise_count']}}</p>
							<p class="perhome_perlike_la">喜欢</p>
						</a>
						<a href='{{url("webd/user/pub?oid={$user_id}")}}' class="perhome_perlike_label <?php echo $type==3?'perhome_perlike_lon':''; ?>" title="发布">
							<p class="perhome_perlike_num">{{$user_info['count']['pub_count']}}</p>
							<p class="perhome_perlike_la">发布</p>
						</a>
						<a href='{{url("webd/user/fans?oid={$user_id}")}}' class="perhome_perlike_label <?php echo $type==4?'perhome_perlike_lon':''; ?>" title="粉丝">
							<p class="perhome_perlike_num">{{$user_info['count']['fans_count']}}</p>
							<p class="perhome_perlike_la">粉丝</p>
						</a>
						<a href='{{url("webd/user/follow?oid={$user_id}")}}' class="perhome_perlike_label <?php echo $type==5?'perhome_perlike_lon':''; ?>" title="关注">
							<p class="perhome_perlike_num">{{$user_info['count']['follow_count']}}</p>
							<p class="perhome_perlike_la">关注</p>
						</a>

						<div class="detail_pop_tbtn detail_pop_tbtnright" style="float: none;position: absolute;right: 0">
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

					

				</div>

				

			</div>
</div>

<script type="text/javascript">
	$(window).scroll(function(event) {
		var scrollHei = $('body').scrollTop();
		if (scrollHei <= 260) {
			$('.perhome_perlike_wrap').css({
				'position':'relative',
				'top':0,
				'border-top':'0px solid #eaeaea'
			});
			$('.perhome_cater_info').hide();
		}else{
			$('.perhome_perlike_wrap').css({
				'position':'fixed',
				'top':40,
				'z-index':3,
				'border-top':'1px solid #eaeaea'
			});
			$('.perhome_cater_info').show();
		};
	});

	$('.detail_pop_tbtn_click').click(function(){
    	event.stopPropagation();
    	if ($(this).siblings('.detail_fileb_select').hasClass('slideup')) {
    		$('.detail_fileb_select').addClass('slideup');
    		$(this).siblings('.detail_fileb_select').removeClass('slideup').addClass('slidedown');
    		var isOut = true;
    	}else{
    		$('.detail_fileb_select').addClass('slideup');
    		$(this).siblings('.detail_fileb_select').removeClass('slidedown').addClass('slideup');
    	};
    	window.document.onclick = function(){
	    	if(isOut){
	            $('.detail_fileb_select').removeClass('slidedown').addClass('slideup');
	        }else{
	        	$('.detail_fileb_select').removeClass('slideup').addClass('slidedown');
	        }
	    }
	});
</script>