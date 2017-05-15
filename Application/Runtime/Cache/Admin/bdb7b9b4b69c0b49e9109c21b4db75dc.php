<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TPSHOP 管理中心 - 添加分类 </title>
  <meta name="robots" content="noindex, nofollow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
  <link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <h1>
    <span class="action-span"><a href="catelist.html">商品分类</a></span>
    <span class="action-span1"><a href="#">TPSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加分类 </span>
    <div style="clear:both"></div>
  </h1>

  <div class="main-div">
    <form action="cateaddAct.php" method="post" name="theForm" enctype="multipart/form-data">
      <table width="100%" id="general-table">
          <tr>
            <td class="label">分类名称:</td>
            <td>
              <input type='text' name='cat_name' maxlength="20" value='' size='27' /> <font color="red">*</font>
            </td>
          </tr>
          <tr>
            <td class="label">上级分类:</td>
            <td>
              <select name="parent_id">
                <option value="0">顶级分类</option>
                  <?php foreach($catlist as $v) { ?>
                <option value="<?php echo $v['cat_id']; ?>">
                  <?php echo str_repeat('&nbsp;&nbsp;',$v['lev']),$v['cat_name']; ?>
                </option>
                <?php } ?>
              </select>
            </td>
          </tr>
          <tr>
            <td class="label">栏目简介:</td>
            <td>
              <textarea name='intro' rows="6" cols="48"></textarea>
            </td>
          </tr>
          </table>
          <div class="button-div">
            <input type="submit" value=" 确定 " />
            <input type="reset" value=" 重置 " />
          </div>
        <input type="hidden" name="act" value="insert" />
        <input type="hidden" name="old_cat_name" value="" />
        <input type="hidden" name="cat_id" value="" />
    </form>
  </div>

  <div id="footer">
    版权所有 &copy; 2017-2022 深圳SEX网络科技有限公司，并保留所有权利。
  </div>

</body>
</html>