<meta http-equiv="Content-Type" content="text/html;charset=gbk"/>
<?php
//��ȡ����
error_reporting(E_ERROR|E_WARNING);
$content =  htmlspecialchars(stripslashes($_POST['myEditor']));
$content1 =  htmlspecialchars(stripslashes($_POST['myEditor1']));
//�������ݿ������������
//-------------

//��ʾ
echo "��1���༭����ֵ";
echo htmlspecialchars_decode($content);
echo "��2���༭����ֵ";
echo htmlspecialchars_decode($content1);
echo "<input type='button' value='�������' onclick='window.history.go(-1)' /></script>";
?>
