  <div class="nolog_index_confooter">
      <div class="w1248 clearfix">
        <div class="nolog_index_confooter_for">
          <div class="nolog_index_confooter_tit">堆图家首页</div>
          <p><a href="#" title="堆图家采集工具">堆图家采集工具</a></p>
          <p><a href="javascript:;" title="VR制作预约" class="vr_apply">VR制作预约</a></p>
        </div>
        <div class="nolog_index_confooter_for">
          <div class="nolog_index_confooter_tit">联系与合作</div>
          <p><a href="/webd/contact" title="联系我们">联系我们</a></p>
          <p><a href="/webd/pic/171909" title="用户反馈">用户反馈</a></p>
        </div>
        <div class="nolog_index_confooter_for">
          <div class="nolog_index_confooter_tit">移动客户端</div>
          <p><a href="/webd/app" title="堆图家iPone版">堆图家iPone版</a></p>
          <p><a href="/webd/app" title="堆图家Android版">堆图家Android版</a></p>
        </div>
        <div class="nolog_index_confooter_for">
          <div class="nolog_index_confooter_tit">关注我们</div>
          <p><a href="http://weibo.com/u/5786329199?refer_flag=1001030101_" target="_blank" title="新浪微博：@堆图家">新浪微博：@堆图家</a></p>
          <div class="code_a">
            <p><a href="#" title="官方微信">官方微信：<img src="{{asset('/static/web/images/index-img/code.jpg')}}" height="16" width="16" alt="官方微信"></a></p>
            <div class="code_hover"><img src="{{asset('/static/web/images/index-img/code_ip.png')}}" height="108" width="108" alt="官方微信"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="nolog_index_copyright">
      <div class="w1248 clearfix">
        ©2015堆图家 宜然网络科技（上海）有限公司       沪ICP备15052918号-1
      </div>
    </div>
  <!--vr预约制作提醒-->
  <div class="pop_vr_apply" style="display: none;">
    <div class="pop_con">
      <p class="pop_tit">
        VR制作预约
        <a href="javascript:;" class="arrow">说明</a>
        <span class="pop_close"></span>
      </p>
      <div class="pop_namewrap clearfix">
        <h3>空间类型</h3>
        <p class="radio_btns"><input type="radio" name="type" id="type" value=""/><label for="type">实体门店</label> <input type="radio" name="type" id="type2"  value="实体门店"/> <label for="type2">住宅空间</label> </p>
        <p><label for="space_num">空间数</label><input type="text" name="space_num" id="space_num" placeholder="所需拍摄场景数量"/></p>
        <p><label for="space_area">空间面积</label><input type="text" name="space_area" id="space_area" placeholder="整个空间的面积"/></p>
        <p><label for="space_area">联系人</label><input type="text" name="space_area" id="space_area" placeholder="申请方联系人"/></p>
        <p><label for="space_area">联系方式</label><input type="text" name="space_area" id="space_area" placeholder="请预留联系方式便于堆图家及时联系" value=""/></p>
        <p><label for="space_area">其他补充</label><textarea type="text" name="space_area" id="space_area" placeholder="其他补充说明或要求" ></textarea></p>

      </div>
      <div class="pop_btnwrap">
        <a href="javascript:;" class="pop_buildbtn detail_filebtn detail_fileball detail_pop_cancel">取消</a>
        <a href="javascript:;" class="pop_buildbtn detail_filebtn detail_filebtn_cpadding vr_apply_sub">提交</a>
      </div>
    </div>
    
    
  </div>
  <div class="pop_con_info" style="display: none;">
    <div class="pop_con" style="width: 472px;height: 464px;overflow: hidden;margin-left: -244px;">
      <p class="pop_tit">
        <a href="javascript:;" class="arrow_left">返回</a>
        <span class="pop_close"></span>
      </p>
      <div class="pop_namewrap clearfix">
        <div class="pop_con_logo">
          <img src="{{asset('web')}}/images/app_logo.png"/>
        </div>
        <ul class="pay_rules">
          <li>VR制作费报价依据空间数统计,每个空间按照500元/点进行计费</li>
          <li>以商家门店为入口导入堆图家的用户数若超过500人,可享受半价折扣优惠</li>
          <li>客户与堆图家VR场景制作的合作越多,可享受更多折扣</li>
        </ul>
        <h3>宜然网络科技（上海）有限公司</h3>
      </div>
      <div class="pop_btnwrap">
        <p>Tel:021-62308521  |  P.C.：200338 </p>
        <p>www.duitujia.com</p>
        <p>Add:上海普陀区怒江北路598号红星世贸大厦1207</p>
      </div>
      </div>
    </div>
  <div class="sunccess" style="display: none">
    <div class="smile"></div>
    <div class="sunccess_txt">
      <span>预约成功！</span><br />堆图家会尽早与您取得联系
    </div>
  </div>
<script type="text/javascript">
  //vr制作申请JS代码
      $('.arrow').click(function(){
        $('.pop_vr_apply').hide();
        $(".pop_con_info").show();
        var popconHei = $('.pop_con_info .pop_con').height();
        $('.pop_con_info .pop_con').css({
           'margin-top':-(popconHei/2)
        })
      })

      $('.arrow_left,.pop_con_info .pop_close').click(function(){
        $(".pop_con_info").hide();
        $('.pop_vr_apply').show();
        var popconHei = $('.pop_vr_apply .pop_con').height();
        $('.pop_vr_apply .pop_con').css({
           'margin-top':-(popconHei/2)
        })
      });

     $('.vr_apply').click(function(){
        $('.pop_vr_apply').show();
        var popconHei = $('.pop_vr_apply .pop_con').height();
        $('.pop_vr_apply .pop_con').css({
           'margin-top':-(popconHei/2)
        })
      });

      $('.pop_vr_apply .detail_pop_cancel,.pop_close').click(function(){
        $('.pop_vr_apply').hide();
        $(".pop_con_info").hide();
      });

      $('.vr_apply_sub').click(function(){
        $.ajax({
          type:"post",
          url:"#",
          async:true,
          success:function(date){
            if(data){
              $('.pop_vr_apply').hide();
              $('body').append()
            }
          },
          error:function(date){//模拟正确提交测试
            $('.pop_vr_apply').hide();
            $('.sunccess').show();
            $('.sunccess').fadeOut(5000);
          }
        });
      })
</script>