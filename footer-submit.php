    <div id="linkFrame">
        <div class="content">
            <div class="leftDiv">
                <img class="logo-gray" src="<?php echo get_bloginfo('template_url') ?>/img/logo-gray.png" />
                <p><img class="icon" src="<?php echo get_bloginfo('template_url') ?>/img/phone.png">电话：027-87579718</p>
                <p><img class="icon" src="<?php echo get_bloginfo('template_url') ?>/img/email.png">邮箱：YANGBO@ZQZYCM.COM</p>
            </div>
            <div class="rightDiv" style="display: none">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/qrcode.jpg" />
                <p>扫一扫，关注我们</p>
            </div>
            <table border="0">
                <tr>
                    <td><a href="<?php echo home_url('/acca/') ?>">ACCA</a></td>
                    <td><a href="<?php echo home_url('/course/') ?>">面授课程</a></td>
                    <td><a href="<?php echo home_url('/team/') ?>">师资团队</a></td>
                    <td><a href="<?php echo home_url('/news/') ?>">报考指南</a></td>
                </tr>
                <tr>
                    <td><a href="<?php echo home_url('/acca/') ?>">ACCA是什么</a></td>
                    <td><a href="<?php $cat=get_category_by_slug('weekend'); echo get_category_link( $cat->term_id);  ?>">双休班</a></td>
                    <td></td>
                    <td><a href="<?php echo home_url('/category/news/paper/') ?>">历年真题</a></td>
                </tr>
                <tr>
                    <td><a href="<?php echo home_url('/acca/') ?>">ACCA课程</a></td>
                    <td><a href="<?php $cat=get_category_by_slug('wsvacation'); echo get_category_link( $cat->term_id);  ?>">寒暑班</a></td>
                    <td></td>
                    <td><a href="<?php echo home_url('/category/news/examinfo/') ?>">考试资讯</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="<?php echo home_url('/course/') ?>">课程优势</a></td>
                    <td></td>
                    <td><a href="<?php echo home_url('/category/news/outstanding/') ?>">优秀学员</a></td>
                </tr>
            </table>
            <p class="address"><img class="icon" src="<?php echo get_bloginfo('template_url') ?>/img/location.png">地址：北京市海淀区中关村南大街天作国际中心裙楼二层A019&nbsp;&nbsp;&nbsp;&nbsp;武汉市洪山区珞喻路10号群光中心1324号</p>
        </div>
    </div>
    <div id="footer">
        <p>版权所有：中青卓越传媒集团有限公司版权所有，复制必究</p>
    </div>
</div>

    <script src="<?php echo get_bloginfo('template_url') ?>/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url') ?>/js/cookie.js"></script>
    <script type="text/javascript">
        function submitInfo () {
            var name, mobile, guide, flag;
            name=trim($("input[name='realname']").val());
            mobile=trim($("input[name='mobile']").val());
            flag= 'ACCA';
            guide = trim($("#guide").find("option:selected").text());
            if(isNullOrEmpty(name)) {
                alert("请填写姓名!");
                return 0;
            } else if(!checkIsMobile(mobile)){
                alert("请输入正确的手机号!");
                return 0;
            } else if(guide.indexOf("请选择")>=0){
                alert("请选择意向班级");
                return 0;
            }

            var host = 'http://api.bobo119.com/api';
            var url = host + '/acca/submitInfo?flag=' + flag +'&name='+ name +'&mobile=' + mobile + '&guide='+ guide;
            $.ajax({
                type: "POST",
                url: url,
                dataType: "json",
                success: function(data){
                    var response = eval('(data)');
                    console.log(response);
                    if (response.success) {
                        alert("报名成功");
                    } else {
                        alert(response.message);
                    }
                },
                error: function(data){
                    alert("加载超时,请检查网络连接");
                }
            });
        }
    </script>
</body>
</html>