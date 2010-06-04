<?php include('head.php');?>
<div id="setting">

<h1 class="album_title1">系统设置</h1>
<?php $setting = $res->get('setting');?>
<form method="post" action="index.php?ctl=default&act=setting">
<table>
    <tbody>
    <tr>
        <td class="tt">相册URL：</td><td class="tc"><input name="setting[url]" class="txtinput" type="text" value="<?php echo $setting['url'];?>" style="width:250px" /></td><td class="ti">设置复制图片地址的URL前缀, 需要带上末尾的"/"</td>
    </tr>
    <tr>
        <td class="tt">图片保存目录：</td><td class="tc"><input name="setting[imgdir]" class="txtinput" type="text" value="<?php echo $setting['imgdir'];?>" style="width:100px" /></td><td class="ti">保存图片的目录，此目录必须存在</td>
    </tr>
    <tr>
        <td class="tt">高级上传引擎：</td><td class="tc"><input name="setting[upload_runtimes]" class="txtinput" type="text" value="<?php echo $setting['upload_runtimes'];?>" style="width:250px" /></td><td class="ti">目前支持的引擎有 html5,flash,gears,silverlight,browserplus,html4</td>
    </tr>
    <tr>
        <td class="tt">是否开启客户端预处理：</td><td class="tc"><input id="setting_open_pre_resize" name="setting[open_pre_resize]" class="txtinput" type="checkbox" value="1" <?php if($setting['open_pre_resize']){ echo 'checked="checked"';} ?> onclick="switch_div(this,'imgsetting_div');" /></td><td class="ti">在客户端预处理可以大大减少网络传输，缩短上传时间。</td>
    </tr>
    </tbody>
    <tbody id="imgsetting_div">
    <tr>
        <td class="tt">图片宽：</td><td class="tc"><input name="setting[resize_img_width]" class="txtinput" type="text" value="<?php echo $setting['resize_img_width'];?>" style="width:50px" /></td><td class="ti">客户端预处理图片的最大宽度</td>
    </tr>
    <tr>
        <td class="tt">图片高：</td><td class="tc"><input name="setting[resize_img_height]" class="txtinput" type="text" value="<?php echo $setting['resize_img_height'];?>" style="width:50px" /></td><td class="ti">客户端预处理图片的最大高度</td>
    </tr>
    <tr>
        <td class="tt">图片质量：</td><td class="tc"><input name="setting[resize_quality]" class="txtinput" type="text" value="<?php echo $setting['resize_quality'];?>" style="width:50px" /></td><td class="ti">预处理图片的质量 1-100</td>
    </tr>
    </tbody>
    <script>
    if($('#setting_open_pre_resize').get(0).checked){
        $("#imgsetting_div").show();
    }else{
        $("#imgsetting_div").hide();
    }
    </script>
    <tbody>
    <tr>
        <td class="tt">上传子目录形式：</td><td class="tc">
            <select name="setting[imgdir_type]">
                <option value="1" <?php if($setting['imgdir_type']=='1') echo 'selected="selected"';?>>YYYY-MM-DD</option>
                <option value="2" <?php if($setting['imgdir_type']=='2') echo 'selected="selected"';?>>YYYYMMDD</option>
                <option value="3" <?php if($setting['imgdir_type']=='3') echo 'selected="selected"';?>>YYYY-MM</option>
                <option value="4" <?php if($setting['imgdir_type']=='4') echo 'selected="selected"';?>>YYYYMM</option>
                <option value="5" <?php if($setting['imgdir_type']=='5') echo 'selected="selected"';?>>YYYY</option>
            </select></td><td class="ti">如 data/2010-05-20/xxxx.jpg</td>
    </tr>
    <tr>
        <td class="tt">允许的图片格式：</td><td class="tc"><input name="setting[extension_allow]" class="txtinput" type="text" value="<?php echo $setting['extension_allow'];?>" /></td><td class="ti">允许上传的图片格式目前只支持jpg（jpeg）,png,gif</td>
    </tr>
    <tr>
        <td class="tt">普通上传允许的图片大小：</td><td class="tc"><input name="setting[size_allow]" class="txtinput" type="text" value="<?php echo $setting['size_allow'];?>" style="width:80px" /></td><td class="ti">单位字节</td>
    </tr>
    <tr>
        <td class="tt">每页显示图片数：</td><td class="tc"><input name="setting[pageset]" class="txtinput" type="text" value="<?php echo $setting['pageset'];?>" style="width:50px" /></td><td class="ti"></td>
    </tr>
    <tr>
        <td></td><td><input type="submit" class="btn" value="保存设置" /></td><td></td>
    </tr>
    </tbody>
</table>
</form>
</div>

<div id="change_pass">
<h1 class="album_title1">修改密码</h1>
<form method="post" action="index.php?ctl=default&act=changepass" onsubmit="check_form(this);return false;">
<table>
    <tr>
        <td class="tt">原密码:</td>
        <td><input type="password" name="oldpass" /></td>
    </tr>
    <tr>
        <td class="tt">新密码:</td>
        <td><input type="password" name="newpass" /></td>
    </tr>
    <tr>
        <td class="tt">再次输入密码:</td>
        <td><input type="password" name="passagain" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" class="btn" value="修改密码" /></td>
    </tr>
</table>
</form>
</div>
<?php include('foot.php');?>