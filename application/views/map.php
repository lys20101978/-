<!--dad804f70df8a4f02708dd8b3ac54346-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="天地图"/>
<title>天地图－地图API－范例－地图点击事件</title>
	<script type="text/javascript" src="http://api.tianditu.gov.cn/api?v=4.0&tk=dad804f70df8a4f02708dd8b3ac54346"></script>
	<style type="text/css">body,html{width:100%;height:100%;margin:0;font-family:"Microsoft YaHei"}#mapDiv{width:100%;height:100%}input,b,p{margin-left:5px;font-size:14px}</style>
	<script>
	var map;
	var zoom = 12;
	function onLoad()
	{
		map = new  T.Map('mapDiv');
		map.centerAndZoom(new T.LngLat(110.15163333333334, 26.585848055555555), zoom);
	    removeMapClick();
        addMapClick();
        //start();
    }
	
	function addMapClick()
	{
		removeMapClick();
		map.addEventListener("click",MapClick);
	}

	function removeMapClick()
	{
		map.removeEventListener("click",MapClick);
	}
	
	function MapClick(e)
	{
		alert(e.lnglat.getLng()+","+e.lnglat.getLat());
	}
	//function start()
    //{
     //   removeMapClick();
      //  addMapClick();

    //}
</script>
</head>
<body onLoad="onLoad()">
	<div id="mapDiv" ></div>
	<p>本示例演示如何给地图注册点击事件。</p>
	
</body>
</html>