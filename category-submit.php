<?php get_header(); ?>
    <div class="page-6">
        <div class="space"></div>
        <div class="content">
            <p class="title">ACCA马上报名</p>
            <div class="item"><label>姓名：</label><input name="realname" id="realname" /></div>
            <div class="item"><label>电话：</label><input name="mobile" id="mobile" /></div>
            <div class="item"><label>报班：</label><select name="guide" id="guide">
                    <option>请选择</option>
                    <option>寒暑假班</option>
                    <option>周末班</option>
                </select>
            </div>
            <div class="item">
                <a href="javascript:submitInfo();"><div class="submitInfo">提交信息</div></a>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=466749081&site=qq&menu=yes"><button class="btnAsk"><img border="0" src="<?php echo get_bloginfo('template_url') ?>/img/tencent.png" alt="点击这里给我发消息" title="点击这里给我发消息"/>在线咨询</button></a>
            </div>

        </div>
    </div>
<?php get_footer('submit'); ?>