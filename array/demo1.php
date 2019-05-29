<?php
	$arr1[]=10;
	$arr1[]='demo1';
	$arr1['a']='demo';
	echo '<pre>';
	print_r($arr1);
	echo '</pre>';
	
	//第二种
	$arr2=array();
	
	
	//第三种
	$arr3=array(1,2,33,4,'刘晨旭',3=>'test');
	echo '<pre>';
	print_r($arr3);
	echo '</pre>';
	

	
	
	
	
	//php数组
	//数组的定义
	//直接定义并给值
	//eg
	
	//$arr[]=10;   $arr[]=20 ;$arr['a']='test';
	//print_r($arr);

	//定义赋值
	//eg: $arr1=[1,2,'a'=>'test'];
	
	//定义一个空数组
	//$arr2=array();
	
	//$arr3=array(1,2,3);
	
	//定义带键值的数组
	//eg: $arr4=array('101'=>'所长'，'102'=>'冲哥');
	
	echo '<br />';
	
	$aee=array('101'=>'test');
	echo $aee[101];
	echo '<br />';
	
	$aee1=array('101.1'=>'qwe');
	echo $aee1['101.1'];
	echo '<br />';
	
	$aee2=array(101.1=>'sdf');
	echo $aee2[101.1];
	echo '<br />';
	
	$aee3=array(true=>'true');
	echo $arr3[1];
	echo '<br />';
	
	$aee4=array(null=>'wer');
	echo $aee4[''];
	echo '<br />';
	
	$acc=[1,2,3,4,'a'=>'test'];
	echo '<pre>';
	print_r($acc);
	echo '</pre>';
	echo '<br />';
	
	$acc1=array(1,2,3);
	echo '<pre>';
	print_r($acc1);
	echo '</pre>';
	echo '<br />';
	
	$acc2=array('101'=>'qin','102'=>'shou');
	echo $acc2['101'];
	echo '<br />';
	
	for($a=1;$a<=5;$a++){
		$ab[]=$a;
	}
	echo '<pre>';
	print_r($ab);
	echo '</pre>';
	echo '<br />';
	
	
	$aa=range(1,10,2);
	echo '<pre>';
	print_r($aa);
	echo '</pre>';
	echo '<br />';
	
	
	$name='禽兽';
	$sex='妖';
	$age=1000;
	
	$arrr=compact('name','sex','age');
	echo '<pre>';
	print_r($arrr);
	echo '</pre>';
	echo '<br />';
	
	$agg=array('nan'=>'禽兽','nv'=>'熏儿','yao'=>' 紫妍');
	extract($agg);
	echo $nan;
?>