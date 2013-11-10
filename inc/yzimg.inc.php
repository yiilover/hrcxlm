<?php
defined('ROOT_PATH') or die();
@ob_end_clean();
require_once(ROOT_PATH."inc/waterimage.php");

//GIF动画要用到
require_once(ROOT_PATH."inc/gifencoder.inc.php");


if($webdb[is_chineseIMG]){
	if($webdb[is_MathYZ]){
		$array=array('-','+');
		$a=rand(0,10);
		$chinaDB=array('零','壹','贰','叁','肆','伍','陆','柒','捌','玖','拾');
		$typem=rand(0,1);
		$typemDB=array('减','加');
		$b=$array[$typem];
		$c=rand(0,10);
		$string_yzimg=$chinaDB[$a].$typemDB[$typem].$chinaDB[$c].'=?';
		$_string_yzimg=$typem?($a+$c):($a-$c);
	}else{
		$_string_yzimg=$string_yzimg=chines_Rand(3);
	}
}else{
	if($webdb[is_MathYZ]){
		$array=array('-','+');
		$a=rand(0,9);
		$typem=rand(0,1);
		$b=$array[$typem];
		$c=rand(0,9);
		$string_yzimg=$a.$b.$c.'=?';
		$_string_yzimg=$typem?($a+$c):($a-$c);
	}else{
		$_string_yzimg=$string_yzimg=yzImgNumRand(4);
	}
}


$db->query("REPLACE INTO `{$pre}yzimg` ( `sid` , `imgnum` , `posttime` ) VALUES ('$usr_sid', '$_string_yzimg', '$timestamp')");
if($webdb['is_chineseIMG']){	//中文
	chinese_yzimg($string_yzimg);

}elseif($webdb['YzImg_difficult']==3){	//GIF动画超复杂
	show_gif_difficult($string_yzimg);

}elseif($webdb['YzImg_difficult']==2){	//GIF动画复杂
	show_gif_easy($string_yzimg);

}elseif($webdb['YzImg_difficult']){	//难识别的图片
	yz2img($string_yzimg);
	
}else{	//易识别的图片
	yzImg($string_yzimg);	
}

function yzImgNumRand($lenth){
	global $webdb;
	$string = "0123456789qwertyuipasdfghjkzxcvbnmQERTYUADFGHJLBNM";
	if(eregi("^([a-z0-9]+)$",$webdb[YzImg_string])){
		$string = $webdb[YzImg_string];
	}
	mt_srand((double)microtime() * 1000000);
	for($i=0;$i<$lenth;$i++){
		$randval.= substr($string,mt_rand(0,strlen($string)-1),1);
	}
	return $randval;
}

function chines_Rand($lenth){
	global $webdb;
	$string = "是广州协天软件科技有限公司的产品而龙城是产品的总设计师";
	if($webdb[YzImg_string]&&!eregi('[[:alnum:]]',$user)&&!eregi('[[:punct:]]',$user)){
		$string = $webdb[YzImg_string];
	}
	mt_srand((double)microtime() * 1000000);
	for($i=0;$i<$lenth;$i++){
		$rand1=mt_rand(0,strlen($string)-2);
		$rand1=$rand1%2==0?$rand1:($rand1-1);
		$randval.= substr($string,$rand1,2);
	}
	return $randval;
}



function show_gif_difficult($string = '', $width = 75, $height = 25)
{	
	error_reporting(0);
	$authstr = $string ? $string : ((time() % 2 == 0) ? mt_rand(1000, 9999) : mt_rand(10000, 99999)); 
	
	$board_width = $width;
	$board_height = $height;

	$old_authstr=$authstr;

	$rand_num = mt_rand(1000, 9999);

	// 生成一个40帧的GIF动画
	for($i = 0; $i < 40; $i++)
	{
		ob_start();
	    $image = imagecreate($board_width, $board_height);
	    imagecolorallocate($image, 0,0,0);
	    // 设定文字颜色数组 
	 	$colorList[] = ImageColorAllocate($image, 15,73,210);
	 	$colorList[] = ImageColorAllocate($image, 0,64,0);
	 	$colorList[] = ImageColorAllocate($image, 0,0,64);
	 	$colorList[] = ImageColorAllocate($image, 0,128,128);
	 	$colorList[] = ImageColorAllocate($image, 27,52,47);
	 	$colorList[] = ImageColorAllocate($image, 51,0,102);
	 	$colorList[] = ImageColorAllocate($image, 0,0,145);
	 	$colorList[] = ImageColorAllocate($image, 0,0,113);
	 	$colorList[] = ImageColorAllocate($image, 0,51,51);
	 	$colorList[] = ImageColorAllocate($image, 158,180,35);
	 	$colorList[] = ImageColorAllocate($image, 59,59,59);
	 	$colorList[] = ImageColorAllocate($image, 0,0,0);
	 	$colorList[] = ImageColorAllocate($image, 1,128,180);
	 	$colorList[] = ImageColorAllocate($image, 0,153,51);
	 	$colorList[] = ImageColorAllocate($image, 60,131,1);
	 	$colorList[] = ImageColorAllocate($image, 0,0,0);
	 	$fontcolor = ImageColorAllocate($image, 0,0,0);
	 	$gray = ImageColorAllocate($image, 245,245,245); 
	 	
	    $color = imagecolorallocate($image, 255,255,255);
	    $color2 = imagecolorallocate($image, 255,0,0);
	    
	    imagefill($image, 0, 0, $gray);

	    if($i > 0)			// 屏蔽第1
	    {
			if($i<2){	//前几帧用其它数字
				$authstr = $rand_num;
			}else{
				$authstr = $old_authstr;
			}
		    for ($k = 0; $k < strlen($authstr); $k++) 
		    { 
				$space = mt_rand(12,19);		// 字符间距
				$colorRandom = mt_rand(0,sizeof($colorList)-1); 
				$float_top = mt_rand(0,9);
				$zoom_size = mt_rand(4,6);
				if($k==0){
					$float_left=mt_rand(0,9);
				}else{
					$float_left=0;
				}
				imagestring($image, $zoom_size, $space * $k+$float_left, $top + $float_top, substr($authstr, $k, 1), $colorList[$colorRandom]);
			}
	    }
	    
		for ($k = 0; $k < 30; $k++) 
		{ 
			$colorRandom = mt_rand(0,sizeof($colorList)-1); 
	 		imagesetpixel($image, rand()%70 , rand()%15 , $colorList[$colorRandom]); 
	
		}
		$Kmax=5;
		if($i>20)$Kmax=1;
		// 添加干扰线
		for($k = 0; $k <$Kmax; $k++)
		{
			$colorRandom = mt_rand(0, sizeof($colorList)-1); 
			 $todrawline = rand(0,1);
			//$todrawline = 1;
			if($todrawline)
			{
				imageline($image, mt_rand(0, $board_width), mt_rand(0,$board_height), mt_rand(0,$board_width), mt_rand(0,$board_height), $colorList[$colorRandom]);
			}
			else 
			{
				$w = mt_rand(0,$board_width);
				$h = mt_rand(0,$board_width);
				imagearc($image, $board_width - floor($w / 2) , floor($h / 2), $w, $h,  rand(90,180), rand(180,270), $colorList[$colorRandom]);
			}
		}
	    imagegif($image);
	    imagedestroy($image);
	    $imagedata[] = ob_get_contents();
	    ob_clean();  
	    ++$i;  
	}
	
	$gif = new GIFEncoder($imagedata);  
	Header ('Content-type:image/gif');  
	echo $gif->GetAnimation();  
}


function show_gif_easy($string = '', $width = 75, $height = 25)
{	
	error_reporting(0);
	$authstr = $string ? $string : ((time() % 2 == 0) ? mt_rand(1000, 9999) : mt_rand(10000, 99999)); 
	
	$board_width = $width;
	$board_height = $height;

	$old_authstr=$authstr;

	$rand_num = mt_rand(1000, 9999);

	// 生成一个32帧的GIF动画
	for($i = 0; $i < 32; $i++)
	{
		ob_start();
	    $image = imagecreate($board_width, $board_height);
	    imagecolorallocate($image, 0,0,0);
	    // 设定文字颜色数组 
	 	$colorList[] = ImageColorAllocate($image, 15,73,210);
	 	$colorList[] = ImageColorAllocate($image, 0,64,0);
	 	$colorList[] = ImageColorAllocate($image, 0,0,64);
	 	$colorList[] = ImageColorAllocate($image, 0,128,128);
	 	$colorList[] = ImageColorAllocate($image, 27,52,47);
	 	$colorList[] = ImageColorAllocate($image, 51,0,102);
	 	$colorList[] = ImageColorAllocate($image, 0,0,145);
	 	$colorList[] = ImageColorAllocate($image, 0,0,113);
	 	$colorList[] = ImageColorAllocate($image, 0,51,51);
	 	$colorList[] = ImageColorAllocate($image, 158,180,35);
	 	$colorList[] = ImageColorAllocate($image, 59,59,59);
	 	$colorList[] = ImageColorAllocate($image, 0,0,0);
	 	$colorList[] = ImageColorAllocate($image, 1,128,180);
	 	$colorList[] = ImageColorAllocate($image, 0,153,51);
	 	$colorList[] = ImageColorAllocate($image, 60,131,1);
	 	$colorList[] = ImageColorAllocate($image, 0,0,0);
	 	$fontcolor = ImageColorAllocate($image, 0,0,0);
	 	$gray = ImageColorAllocate($image, 245,245,245); 
	 	
	    $color = imagecolorallocate($image, 255,255,255);
	    $color2 = imagecolorallocate($image, 255,0,0);
	    
	    imagefill($image, 0, 0, $gray);

	    if($i > 0)			// 屏蔽第1
	    {
			if($i<2){	//前几帧用其它数字
				$authstr = $rand_num;
			}else{
				$authstr = $old_authstr;
			}
		    for ($k = 0; $k < strlen($authstr); $k++) 
		    { 
				$space = mt_rand(15,19);		// 字符间距
				$colorRandom = mt_rand(0,sizeof($colorList)-1); 
				$float_top = mt_rand(0,9);
				$zoom_size = mt_rand(5,6);
				if($k==0){
					$float_left=mt_rand(0,9);
				}else{
					$float_left=0;
				}
				imagestring($image, $zoom_size, $space * $k+$float_left, $top + $float_top, substr($authstr, $k, 1), $colorList[$colorRandom]);
			}
	    }
	    
		for ($k = 0; $k < 30; $k++) 
		{ 
			$colorRandom = mt_rand(0,sizeof($colorList)-1); 
	 		imagesetpixel($image, rand()%70 , rand()%15 , $colorList[$colorRandom]); 
	
		}
		// 添加干扰线
		for($k = 0; $k < 1; $k++)
		{
			$colorRandom = mt_rand(0, sizeof($colorList)-1); 
			 $todrawline = rand(0,1);
			//$todrawline = 1;
			if($todrawline)
			{
				imageline($image, mt_rand(0, $board_width), mt_rand(0,$board_height), mt_rand(0,$board_width), mt_rand(0,$board_height), $colorList[$colorRandom]);
			}
			else 
			{
				$w = mt_rand(0,$board_width);
				$h = mt_rand(0,$board_width);
				imagearc($image, $board_width - floor($w / 2) , floor($h / 2), $w, $h,  rand(90,180), rand(180,270), $colorList[$colorRandom]);
			}
		}
	    imagegif($image);
	    imagedestroy($image);
	    $imagedata[] = ob_get_contents();
	    ob_clean();  
	    ++$i;  
	}
	
	$gif = new GIFEncoder($imagedata);  
	Header ('Content-type:image/gif');  
	echo $gif->GetAnimation();  
}


?>