<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//RU" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">	
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Конструктор рисунка изделий из воздушных шаров</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Mr. Fingersman - Лещанов Сергей" />
<meta name="keywords" content="конструктор,рисунок,плетение,гирлянда,арка,сердце,панно" />
<meta name="description" content="конструктор рисунка гирлянд, арок, сердец, панно из воздушных шаров" />
<meta name="robots" content="index,follow" />	

<script type="text/javascript" src="js/canvg.js"></script>
<script type="text/javascript" src="js/rgbcolor.js"></script>
<script type="text/javascript" src="js/StackBlur.js"></script>
<script type="text/javascript" src="js/jquery-1.8.2.min.js "></script>
<script type="text/javascript" src="js/canvas2image.js"></script>
<script type="text/javascript" src="js/base64.js"></script>
<!--<script type="text/javascript" src="js/saveSVG.js"></script>-->
<script type="text/javascript" src="js/FileSaver.js"></script>
<link href="styles.css" rel="stylesheet" type="text/css"/></head>

<body style="margin: 0px">
	<!--<div style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 0); font-size: 13px; position: absolute; top: 10px; left: 92px; z-index: 128;"><span>
	Гирлянда из четверок шаров с периодом 4.<br>
	<b>Шаблон 1</b>
	<br><a href="garland44-1.html">Очистить рисунок</a><br>
	<a href="#" onclick="onBlicks()">Блик включить / выключить</a><br>
	<a href="#" onclick="SaveImage()">Получить рисунок</a>
	</span></div>-->


<div id="SVGDoc"> 	
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
xml:space="preserve" width="800px" height="615px" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" 
viewBox="0 0 800 615" 
   onload="getSVGDoc(evt)">
 

  <defs>

    <style type="text/css">
      <![CDATA[
		.str0 {stroke:black;stroke-width:0.77}
      
      ]]>
    </style>


    <script type="text/javascript">
      <![CDATA[
      var svgdoc,svgroot,aktfill;
 
function getSVGDoc(load_evt)
      {
        svgdoc=load_evt.target.ownerDocument;
        svgroot=svgdoc.rootElement;
        aktfill=svgdoc.getElementById("aktfill");
       }

function SetColors(mousedown_event)
      {
		setcol=mousedown_event.target.style.getPropertyValue("fill");
		aktfill.style.setProperty("fill",setcol,"");
       }

	//  function coloritgr01 (evt) {var element = evt.target.ownerDocument.getElementById("gr01");
	//	element.setAttribute("fill", setcol);	}
      ]]>
    </script>
  </defs>

<rect fill="#ffffff" stroke="silver" stroke-width="4" width="800" height="800"/>

<?php include ('seria1/rask1.php'); ?>
<?php include ('seria1/rask2.php'); ?>
<?php include ('seria1/rask3.php'); ?>
<?php include ('seria1/rask4.php'); ?>

<?php include ('seria2/rask1.php'); ?>
<?php include ('seria2/rask2.php'); ?>
<?php include ('seria2/rask3.php'); ?>
<?php include ('seria2/rask4.php'); ?>

<?php include ('seria4/rask1.php'); ?>
<?php include ('seria4/rask2.php'); ?>
<?php include ('seria4/rask3.php'); ?>
<?php include ('seria4/rask4.php'); ?>

<path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M477.1,305.1"/>
<!--<polyline fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
	497.3,185.7 460.6,197.7 460.6,325.7 "/>-->
<g>
	
		
	<g>
		<rect x="-0.4" y="0" fill="#FFFFFF" width="799.8" height="72.8"/>
	</g>
</g>
<!--<a style="cursor:pointer;" onClick="window.location.reload()"><rect x="258.7" y="6.3" fill="#FFFFFC" stroke="#E6E7E8" stroke-miterlimit="10" width="64.6" height="60.5"/></a>-->
<a style="cursor:pointer;" id="erise"><rect x="258.7" y="6.3" fill="#FFFFFC" stroke="#E6E7E8" stroke-miterlimit="10" width="64.6" height="60.5"/></a>
<rect x="329.9" y="6.3" fill="#FFFFFC" stroke="#E6E7E8" stroke-miterlimit="10" width="64.6" height="60.5"/>
<rect x="401.4" y="6.3" fill="#FFFFFC" stroke="#E6E7E8" stroke-miterlimit="10" width="385.1" height="60.5"/>
<rect id="aktfill" style="stroke: black; stroke-width: 0.9345; fill: none" x="344.8" y="18.6" width="35.1" height="36"/>
<g onclick="SetColors(evt)">
<rect style="fill: #F0ABCA" x="758" y="40.2" width="20.7" height="20.7"/>
<rect style="fill: #DE527C" x="731" y="40.2" fill="#DE527C" width="20.7" height="20.7"/>
<rect style="fill: #E02C38" x="704" y="40.2" fill="#E02C38" width="20.7" height="20.7"/>
<rect style="fill: #E9652E" x="677.7" y="40.2" fill="#E9652E" width="20.7" height="20.7"/>
<rect style="fill: #F5C1B8" x="650.7" y="40.2" fill="#F5C1B8" width="20.7" height="20.7"/>
<rect style="fill: #A72221" x="623.7" y="40.2" fill="#A72221" width="20.7" height="20.7"/>
<rect style="fill: #7D1D39" x="596.7" y="40.2" fill="#7D1D39" width="20.7" height="20.7"/>
<rect style="fill: #F5EC0F" x="569.7" y="40.2" fill="#F5EC0F" width="20.7" height="20.7"/>
<rect style="fill: #FAC633" x="542.7" y="40.2" fill="#FAC633" width="20.7" height="20.7"/>
<rect style="fill: #2EB26D" x="516.2" y="40.2" fill="#2EB26D" width="20.7" height="20.7"/>
<rect style="fill: #43B787" x="489.2" y="40.2" fill="#43B787" width="20.7" height="20.7"/>
<rect style="fill: #88C446" x="462.2" y="40.2" fill="#88C446" width="20.7" height="20.7"/>
<rect style="fill: #288E42" x="435.2" y="40.2" fill="#288E42" width="20.7" height="20.7"/>
<rect style="fill: #387B46" x="408" y="40.2" fill="#387B46" width="20.7" height="20.7"/>
<rect style="fill: #177979" x="758" y="13.3" fill="#177979" width="20.7" height="20.7"/>
<rect style="fill: #32A7B9" x="731" y="13.3" fill="#32A7B9" width="20.7" height="20.7"/>
<rect style="fill: #3DADE6" x="704.6" y="13.3" fill="#3DADE6" width="20.7" height="20.7"/>
<rect style="fill: #CE7F2F" x="543" y="13.3" fill="#CE7F2F" width="20.7" height="20.7"/>
<rect style="fill: #3A56A7" x="677.6" y="13.3" fill="#3A56A7" width="20.7" height="20.7"/>
<rect style="fill: #6F4129" x="516" y="13.3" fill="#6F4129" width="20.7" height="20.7"/>
<rect style="fill: #657EC0" x="650.6" y="13.3" fill="#657EC0" width="20.7" height="20.7"/>
<rect style="fill: #EAF2F8" x="489" y="13.3" fill="#EAF2F8" width="20.7" height="20.7"/>
<rect style="fill: #917BBA" x="623.6" y="13.3" fill="#917BBA" width="20.7" height="20.7"/>
<rect style="fill: #889299" x="462" y="13.3" fill="#889299" width="20.7" height="20.7"/>
<rect style="fill: #664FA2" x="596.6" y="13.3" fill="#664FA2" width="20.7" height="20.7"/>
<rect style="fill: #252525" x="435" y="13.3" fill="#252525" width="20.7" height="20.7"/>
<rect style="fill: #44328D" x="569.6" y="13.3" fill="#44328D" width="20.7" height="20.7"/>
<rect style="fill: #FFFFFF" x="408" y="13.3" fill="#FFFFFF" stroke="#58595B" stroke-miterlimit="10" width="20.7" height="20.7"/>
</g>
<a href="#" class="savebtn"><text transform="matrix(1 0 0 1 36.7135 57.1635)" fill="#0e71b8" font-family="sans-serif" font-size="15" style="font-weight:bold;">Сохранить раскраску</text></a>
<path fill="#58595B" d="M312.1,28.9c0,0.5,0,1.1,0,1.6c-0.8,1-1.4,2-2.3,2.9c-5.9,6-11.9,12-17.9,17.9c-0.3,0.3-0.5,0.5-0.9,1
		c0.6,0,1,0,1.4,0c5.8,0,11.6,0,17.4,0c0.5,0,1.5-0.4,1.5,0.6c0,0.9-0.9,0.6-1.5,0.6c-8.7,0.1-17.5,0.1-26.2,0.2
		c-1.2,0-2.2-0.4-3.1-1.3c-2-2-4-3.9-5.9-6c-0.8-0.8-1.4-1.8-2-2.7c0-0.5,0-1.1,0-1.6c0.4-0.6,0.7-1.3,1.2-1.8
		c6.5-6.6,13.1-13.1,19.7-19.7c0.6-0.6,1.6-1.1,2.4-1.2c1.7-0.3,3.5-0.3,5.3-0.5c1.3-0.1,2.3,0.3,3.2,1.2c1.9,2,4,3.9,5.9,5.9
		C310.9,27,311.4,28,312.1,28.9z M289.4,31.4c-0.3,0.3-0.6,0.6-0.8,0.9c-2.9,2.9-5.9,5.9-8.8,8.8c-1.3,1.4-1.3,2.5,0,3.8
		c2.1,2.1,4.2,4.2,6.4,6.4c1.4,1.4,2.5,1.4,3.9,0c3-3,6-6,9-9c0.2-0.2,0.4-0.4,0.7-0.8c-3.4-3.4-6.8-6.7-10.4-10.3
		c3.6-3.6,7.2-7.1,10.7-10.7c-1-0.1-1.8,0.2-2.6,1c-2.9,3-5.9,5.9-8.8,8.8c-0.2,0.2-0.5,0.5-0.8,0.8
		C288.4,31.2,288.8,31.3,289.4,31.4z M285,52.2c-0.3-0.3-0.5-0.5-0.7-0.8c-1.9-1.9-3.7-3.7-5.6-5.6c-1.9-1.9-1.8-3.9,0-5.8
		c2.7-2.7,5.4-5.4,8-8c0.2-0.2,0.5-0.5,0.8-0.9c-1.3-0.3-2.3-0.4-3.3,0.6c-3,3.1-6.1,6.1-9.1,9.2c-1.6,1.6-1.6,2.6,0,4.2
		c1.9,1.9,3.8,3.7,5.6,5.7C281.9,52.1,283.2,52.6,285,52.2z"></path>
<g>
	<a onclick="openmenu()" class="rasvybor"><text transform="matrix(1 0 0 1 36.7136 27.5846)" fill="#0e71b8" font-family="sans-serif" font-size="15" style="font-weight:bold;">Выбрать раскраску</text></a>
</g>
<g>
	<polygon fill="#14559B" style="fill:#14559B !important" points="20.4,28.4 27.2,20.3 13.5,20.3 	"/>
</g>
<g>
	<path fill="#14559B" style="fill:#14559B !important" d="M14.6,43.9c0,0.7,0,1.2,0,1.8c0,3.8,0,7.6,0,11.4c0,0.7,0.1,0.8,0.8,0.8c3.4,0,6.7,0,10.1,0
		c0.4,0,0.6-0.1,0.6-0.6c0-3.4,0-6.9,0-10.3c0-0.4-0.1-0.6-0.5-0.6c-1.1,0-2.3,0-3.4,0c-0.3,0-0.5,0.1-0.5,0.4c0,1.4,0,2.7,0,4.1
		c0,0,0,0.1,0.1,0.2c0.9,0,1.8,0,2.6,0c-1.3,1.3-2.7,2.7-4,4c-1.3-1.3-2.6-2.6-4-4c0.9,0,1.8,0,2.8,0c0-0.2,0-0.4,0-0.6
		c0-1.7,0-3.3,0-5c0-1.3,0.4-1.7,1.7-1.7c2.1,0,4.1,0,6.2,0c1.2,0,1.7,0.5,1.7,1.7c0,4.4,0,8.9,0,13.3c0,1.1-0.5,1.6-1.6,1.6
		c-4.4,0-8.9,0-13.3,0c-1.2,0-1.6-0.5-1.6-1.6c0-4.5,0-8.9,0-13.4c0-1.1,0.5-1.6,1.6-1.6C14,43.9,14.3,43.9,14.6,43.9z"/>
</g>
</svg>

</div>
<div class="menu-raskr" id="raskmenu" style="display:none;">
    	<p onclick="change('xmlid5'); openmenu()">«Элексир здоровья» ч.1</p>
        <p onclick="change('xmlid6'); openmenu()">«Элексир здоровья» ч.2</p>
        <p onclick="change('xmlid7'); openmenu()">«Элексир здоровья» ч.3</p>
        <p onclick="change('xmlid8'); openmenu()">«Элексир здоровья» ч.4</p>
        
        <p onclick="change('xmlid9'); openmenu()">«Секреты стройности» ч.1</p>
        <p onclick="change('xmlid10'); openmenu()">«Секреты стройности» ч.2</p>
        <p onclick="change('xmlid11'); openmenu()">«Секреты стройности» ч.3</p>
        <p onclick="change('xmlid12'); openmenu()">«Секреты стройности» ч.4</p>
        
    	<p onclick="change('xmlid14'); openmenu()">«Зарядка для всех» ч.1</p>
        <p onclick="change('xmlid2'); openmenu()">«Зарядка для всех» ч.2</p>
        <p onclick="change('xmlid3'); openmenu()">«Зарядка для всех» ч.3</p>
        <p onclick="change('xmlid4'); openmenu()">«Зарядка для всех» ч.4</p>
        
</div>	

<script>
    document.querySelector('.savebtn').addEventListener('click', function (e) {
        e.preventDefault();
        var svg = document.querySelector('svg');
        var canvas = document.createElement('canvas');
        canvas.height = svg.getAttribute('height');
        canvas.width = svg.getAttribute('width');
        canvg(canvas, svg.parentNode.innerHTML.trim());
        var dataURL = canvas.toDataURL('image/png');
        var data = atob(dataURL.substring('data:image/png;base64,'.length)),
                asArray = new Uint8Array(data.length);

        for (var i = 0, len = data.length; i < len; ++i) {
            asArray[i] = data.charCodeAt(i);
        }

        var blob = new Blob([asArray.buffer], {type: 'image/png'});
        saveAs(blob, 'export_' + Date.now() + '.png');
    });
</script>


<script>
function change(idName) { 
  var matches = document.querySelectorAll('.cursorpip');
  if(document.getElementById(idName).style.display=='none') {
      for(var i = 0; i < matches.length; i++) {
        matches[i].style.display = 'none';
      }
	  document.getElementById(idName).style.display = '';
  }
}

function openmenu() {
	if(document.getElementById('raskmenu').style.display=='none') {
	document.getElementById('raskmenu').style.display = '';
	} else {
    document.getElementById('raskmenu').style.display = 'none';
  }
  return false;
}

</script>

<script>
$('#erise').on('click', function() {
	$('g path[fill!="none"]').attr('fill', '#FFFFFF');
	$('g polygon[fill!="none"]').attr('fill', '#FFFFFF');
});
</script>

<style>
.hiddenBlick
{
    visibility: hidden;
}
.cursorpip {
	cursor : url("brush.png"), auto;
	}
.menu-raskr {
    background-color: #fff;
    border: 1px solid #e9e9e9;
    font-family: "ArialNarrow",sans-serif;
    left: 0;
    padding: 0;
    position: absolute;
    top: 43px;
    width: 256px;
}
.menu-raskr p {
    border-top: 1px solid #eaeaea;
    cursor: pointer;
    font-size: 15px;
    margin: 0;
    padding: 10px 25px;
}
.menu-raskr p:hover {
	background-color:#DADADA;
	} 
.rasvybor {
	cursor:pointer;
	}
</style>	



</body>
</html>

