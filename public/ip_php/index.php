<?php
/*
/////////////////////////////////////////////////////////////////////////////
// Copyright (c) 2007 - 2008 边缘狂人 [中国蓝途]
// URL:http://www.cnbluetu.com
// E-mail:support@cnbluetu.com
// QQ:124181646
// date: Sat Oct 10 10:28:51 CST 2009
// description: 
// write by: 陈阳昇 
// 中国蓝途,致力于开发优秀的网络产品
/////////////////////////////////////////////////////////////////////////////

功能简介:
此类可以验证 指定IP地址 属于国内IP用户,还是属于国外IP用户
功能简单,但对有特殊需求的朋友,绝对实用


约定: 
以下情况被视为 国内IP, 返回 true
1 IP地址是局域网内的, 如192.168.1.1
2 特殊环境下取不到IP时

用法:
调用方法1: 测试当前用户是否在国内

include_once('iplimit.class.php');
$iplimit = new iplimit;
if($iplimit->setup())
{
	echo "在国内";
}
else
{
	echo "在国内";
}
调用方法2: 测试指定IP地址属于国内还是国外
include_once('iplimit.class.php');
$iplimit = new iplimit;
if($iplimit->setup('10.192.43.159'))
{
	echo "在国内";
}
else
{
	echo "在国内";
}
调用方法3: 调试信息
echo $iplimit->msg;

echo $ip = '222.201.192.0';
echo "<br>";
echo $ip2 = ip2long('222.201.192.0');
echo "<br>";
echo $ip3 = sprintf('%u', ip2long('222.201.192.0'));
echo "<br>";
*/


include_once('iplimit.class.php');
$iplimit = new iplimit;
$ip = $iplimit->GetIP();
echo $iplimit->setup($ip) ? 1 :0;
