<!--
<?php
$conf[page_content] = En_TruePath($conf[page_content],0,1);

$titleDB['title']=$titleDB['keywords']=$rsdb['title'].' 商家其它信息';
$titleDB['description']=get_word(preg_replace('/<([^>]*)>/is','',$conf['page_content']),200);
	
print <<<EOT
-->
<div class="maincont1">
	<div class="head">
		<div class="tag">$conf[page_title]</div>
		<div class="more">&nbsp;
<!--
EOT;
if($lfjuid==$uid){
print <<<EOT
-->
	<a href='$webdb[_www_url]/member/?main=$Murl/member/homepage_ctrl.php?atn=page' target='_blank'>修改</a>
<!--
EOT;
}
print <<<EOT
-->	
		</div>
	</div>
	<div class="cont">
		 $conf[page_content]
	</div>
</div> 
<!--
EOT;
?>
-->