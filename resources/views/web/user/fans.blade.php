<!DOCTYPE html>
<html lang="en">
@include('web.common.head',['title'=>'堆图家用户粉丝'])
<body>
	@include('web.common.banner')
	<div class="container">
		@include('web.common.user')
		
		<div class="w1248 w1240 clearfix">
			<div class="index_con  perhome_wrap">
				<ul class="find_fold_list clearfix">
					<?php foreach ($user_fans as $key => $value) :?>
					<li class="find_user_li <?php echo ($key%5==0)?'mrightzero':''; ?>">
						<div class="find_user_info">
							<a href="javascript:;" class="find_user_name">{{empty($value['nick'])?$value['username']:$value['nick']}}</a>
							<a href="javascript:;" class="find_user_rela">{{$value['count']['fans_count']}}粉丝 {{$value['count']['follow_count']}}关注{{$value['id']}}</a>
						</div>
						<div class="find_user_con clearfix">
							<div class="find_user_img">
								<div class="find_user_blur"></div>
								<img src="{{$value['pic_m'] or url('uploads/sundry/blogo.jpg')}}" alt="">
							</div>
							<ul class="find_user_limg">
								<li>
									<div class="find_user_blur"></div>
									<img src="{{$value['folders'][0]['img_url'] or url('uploads/sundry/blogo.jpg')}}" alt="">
								</li>
								<li>
									<div class="find_user_blur"></div>
									<img src="{{$value['folders'][1]['img_url'] or url('uploads/sundry/blogo.jpg')}}" alt="">
								</li>
								<li>
									<div class="find_user_blur"></div>
									<img src="{{$value['folders'][2]['img_url'] or url('uploads/sundry/blogo.jpg')}}" alt="">
								</li>
								<li>
									<div class="find_user_blur"></div>
									<img src="{{$value['folders'][3]['img_url'] or url('uploads/sundry/blogo.jpg')}}" alt="">
								</li>
							</ul>
							<a href="javascript:;" class="find_user_authflw">已关注</a>
						</div>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>