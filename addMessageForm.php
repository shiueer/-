<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>貧困學生補助經費申請</title>
</head>
<body>
<h1>貧困學生補助經費申請表</h1>
<table border="5"  width="auto">
    <thead>      
      <tr>
        <th colspan="5">學生基本資料</th>
      </tr>
      <tr>
        <th>學生姓名</th>
        <th><input name="title" type="text" id="title" /></th>
        <th>學號</th>
        <th><input name="title" type="text" id="title" /></th>
      </tr>
      <tr>
        <th>家庭狀況</th>
        <th>稱謂
        <input name="title" type="text" id="title" />
        姓名
        <input name="title" type="text" id="title" /></th>
        <th>家庭狀況</th>
        <th>稱謂
        <input name="title" type="text" id="title" />
        姓名
        <input name="title" type="text" id="title" /></th>
      </tr>
      <tr>
        <th>申請補助總類</th>
        <th>
        <input type="radio" name = "role" value = "0"><label>低收入戶</label>
        <input type="radio" name = "role" value = "1"><label>中低收入戶</label>
        <input type="radio" name = "role" value = "2"><label>家庭突發因素</label>
        </th>
        <th>導師訪視說明</th>
        <th>
        <input name="title" type="text" id="title" /></th>
        </th>
      <tr>
        <th>秘書審核</th>
        <th>審核結果
          <input type="radio" name = "role" value = "2"><label></label>准於補助
          <input name="title" type="text" id="title" />元</th>
          <th>導師簽章</th>
          <th><input type="radio" name = "role" value = "2"><label>同意</label></th>
        </th>
      </tr>
      </tr>
      <tr>
        <th>秘書審查意見</th>
          <th>
            <input name="title" type="text" id="title" /></th>
          </th>
          <th>秘書簽章</th>
          <th><input type="radio" name = "role" value = "2"><label>同意</label></th>
      </tr>
      <tr>
        <th>校長簽章</th>
        <th><input type="radio" name = "role" value = "2"><label>同意</label></th>
        </th>
      </tr>
    </thead> 

</table>
</body>
</html>
