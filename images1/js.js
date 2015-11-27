//v1.0
//Copyright 2006 Adobe Systems, Inc. All rights reserved.
function AC_AddExtension(src, ext)
{
  if (src.indexOf('?') != -1)
    return src.replace(/\?/, ext+'?'); 
  else
    return src + ext;
}

function AC_Generateobj(objAttrs, params, embedAttrs) 
{ 
  var str = '<object ';
  for (var i in objAttrs)
    str += i + '="' + objAttrs[i] + '" ';
  str += '>';
  for (var i in params)
    str += '<param name="' + i + '" value="' + params[i] + '" /> ';
  str += '<embed ';
  for (var i in embedAttrs)
    str += i + '="' + embedAttrs[i] + '" ';
  str += ' ></embed></object>';

  document.write(str);
}

function AC_FL_RunContent(){
  var ret = 
    AC_GetArgs
    (  arguments, ".swf", "movie", "clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
     , "application/x-shockwave-flash"
    );
  AC_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);
}

function AC_SW_RunContent(){
  var ret = 
    AC_GetArgs
    (  arguments, ".dcr", "src", "clsid:166B1BCA-3F9C-11CF-8075-444553540000"
     , null
    );
  AC_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);
}

function AC_GetArgs(args, ext, srcParamName, classid, mimeType){
  var ret = new Object();
  ret.embedAttrs = new Object();
  ret.params = new Object();
  ret.objAttrs = new Object();
  for (var i=0; i < args.length; i=i+2){
    var currArg = args[i].toLowerCase();    

    switch (currArg){	
      case "classid":
        break;
      case "pluginspage":
        ret.embedAttrs[args[i]] = args[i+1];
        break;
      case "src":
      case "movie":	
        args[i+1] = AC_AddExtension(args[i+1], ext);
        ret.embedAttrs["src"] = args[i+1];
        ret.params[srcParamName] = args[i+1];
        break;
      case "onafterupdate":
      case "onbeforeupdate":
      case "onblur":
      case "oncellchange":
      case "onclick":
      case "ondblClick":
      case "ondrag":
      case "ondragend":
      case "ondragenter":
      case "ondragleave":
      case "ondragover":
      case "ondrop":
      case "onfinish":
      case "onfocus":
      case "onhelp":
      case "onmousedown":
      case "onmouseup":
      case "onmouseover":
      case "onmousemove":
      case "onmouseout":
      case "onkeypress":
      case "onkeydown":
      case "onkeyup":
      case "onload":
      case "onlosecapture":
      case "onpropertychange":
      case "onreadystatechange":
      case "onrowsdelete":
      case "onrowenter":
      case "onrowexit":
      case "onrowsinserted":
      case "onstart":
      case "onscroll":
      case "onbeforeeditfocus":
      case "onactivate":
      case "onbeforedeactivate":
      case "ondeactivate":
      case "type":
      case "codebase":
        ret.objAttrs[args[i]] = args[i+1];
        break;
      case "width":
      case "height":
      case "align":
      case "vspace": 
      case "hspace":
      case "class":
      case "title":
      case "accesskey":
      case "name":
      case "id":
      case "tabindex":
        ret.embedAttrs[args[i]] = ret.objAttrs[args[i]] = args[i+1];
        break;
      default:
        ret.embedAttrs[args[i]] = ret.params[args[i]] = args[i+1];
    }
  }
  ret.objAttrs["classid"] = classid;
  if (mimeType) ret.embedAttrs["type"] = mimeType;
  return ret;
}

//变换图片代码

    TitlePics = new Array();              
                                                      
    TitlePics[0] = "<img src=images/pro6.jpg width=555 height=318 border=0 >";                                                             
    TitlePics[1] = "<img src=images/pro1.jpg width=555 height=318 border=0 >";          
	TitlePics[2] = "<img src=images/pro2.jpg width=555 height=318 border=0 >";    
	TitlePics[3] = "<img src=images/pro3.jpg width=555 height=318 border=0 >";	
	TitlePics[4] = "<img src=images/pro4.jpg width=555 height=318 border=0 >";	
	TitlePics[5] = "<img src=images/pro5.jpg width=555 height=318 border=0 >";                                                      
                                                      
    var i = 0;              
    var mytimeout;              
    function playTitlePics() {              
        if(TitlePics.length == 1){              
            document.all["span_titlepics"].filters[0].apply();              
            document.all["span_titlepics"].innerHTML = TitlePics[0];              
            document.all["span_titlepics"].filters[0].play();              
        }else{              
            if (i == TitlePics.length-1) i = 0;  else i++;                                                
            document.all["span_titlepics"].filters[0].apply();                
            document.all["span_titlepics"].innerHTML = TitlePics[i];              
            document.all["span_titlepics"].filters[0].play();              
            mytimeout = setTimeout('playTitlePics()',4500);              
        }              
    }              
//鼠标移上效果
//图片变换效果开始：

var ii=1;
var iii=0;
var no=0;
var speed=5;//设置图片翻动速度，现在为8秒钟翻一幅
var imgobj;
var tdobj;

function testobj()
{
	var tbbb;
	tbbb=document.all.tags("table").item(0);
	if (tbbb==null)
	{
	return false;
	}
	else
	{
	
	imgobj=tbbb.all.tags("img");
	tdobj=tbbb.all.tags("td");
	if (imgobj.item(0)==null||tdobj.item(0)==null)
	{
	return false;
	}
	else
	{
	return true;
	}
	}
}
function isobj(obj)
{
	if (obj==null)
	{
	return false;
	}
	else
	{
	return true;
	}
}
function initimg()
{
	var imid, i;
	var imgnum=0;
	if (isobj(imgobj.item(0))&&isobj(tdobj.item(0)))
	{
	imgnum=imgobj.length;
	for(i=0;i<imgnum;i++)
	{
			tdobj.item(i).style.display="none";
			tdobj.item(i).style.textAlign="center";
			imgobj.item(i).style.filter="revealTrans(Duration=4.0, Transition=23)";
			imgobj.item(i).style.visibility="hidden";
	}
	}
	return imgnum;
}
function changeimg()
{
	var nnn;
	if (testobj())
	{
		nnn=initimg();
		showimg();
		setInterval("turnit("+nnn+")",speed*1000);
	}
	else
	{
		no++;
		if (no<3) setTimeout("changeimg()",1000);
	}
	
}
function turnit(num)
{
	iii=ii;
	if (ii<num-1)
	{
		ii++;
	}
	else
	{
		ii=0
	}
	hidimg();
	setTimeout("showimg()",1000)
}
function showimg()
{
	var ele,ele1;
	ele=imgobj.item(ii);
	ele1=tdobj.item(ii);
	ele2=tdobj.item(iii);
	if (isobj(ele)&&isobj(ele1)&&isobj(ele2))
	{
	ele2.style.display="none";
	ele1.style.display="";
	ele.filters.item(0).apply();
	ele.filters.item(0).transition = 12;
	ele.style.visibility = "";
	ele.filters(0).play(1.0);
	}
}
function hidimg()
{
	var ele;
	ele=imgobj.item(iii);
	if (isobj(ele))
	{
	ele.filters.item(0).apply();
	ele.filters.item(0).transition = 12;
	ele.style.visibility = "hidden";
	ele.filters(0).play(1.0);
	}
}
// script writen by Fu Dawei

//无级缩放图片大小
function resizepic(thispic) 
{ 
if(thispic.height>5500||thispic.width>550)thispic.style.zoom=550/(thispic.height>thispic.width?thispic.height:thispic.width); 
}


function bbimg(o)
{
  var zoom=parseInt(o.style.zoom, 10)||100;
  zoom+=event.wheelDelta/12;
  if (zoom>0) o.style.zoom=zoom+'%';
  return false;
}
//更改字体大小
var status0='';
var curfontsize=10;
var curlineheight=18;
function fontZoomA(){
  if(curfontsize>8){
    document.getElementById('fontzoom').style.fontSize=(--curfontsize)+'pt';
	document.getElementById('fontzoom').style.lineHeight=(--curlineheight)+'pt';
  }
}
function fontZoomB(){
  if(curfontsize<64){
    document.getElementById('fontzoom').style.fontSize=(++curfontsize)+'pt';
	document.getElementById('fontzoom').style.lineHeight=(++curlineheight)+'pt';
  }
}
//完毕

//防止copy代码
function nocopy() 
{
//alert("对不起，为保护本站权益，本站任何文件都不允许复制。\n\n如有特殊需要，请与本站联系。");
//event.returnValue=false;
}
//function stop(){
//return false;
//}
//document.oncontextmenu=stop;
//完毕

//弹出窗口代码

function yysoft(){}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}


//完毕



//图片大小定义-->
function Wa_SetImgAutoSize(img) 
{ 
//var img=document.all.img1;//获取图片 
var MaxWidth=150;//设置图片宽度界限 
var MaxHeight=120;//设置图片高度界限 
var HeightWidth=img.offsetHeight/img.offsetWidth;//设置高宽比 
var WidthHeight=img.offsetWidth/img.offsetHeight;//设置宽高比 

if(img.readyState!="complete"){
 return false;//确保图片完全加载
}

if(img.offsetWidth>MaxWidth){ 
img.width=MaxWidth; 
img.height=MaxWidth*HeightWidth; 
} 
if(img.offsetHeight>MaxHeight){ 
img.height=MaxHeight; 
img.width=MaxHeight*WidthHeight; 
} 
} 
//图片大小定义结束-->

//双击鼠标滚动屏幕的代码
var currentpos,timer;
function initialize()
{
timer=setInterval ("scrollwindow ()",30);
}
function sc()
{
clearInterval(timer);
}
function scrollwindow()
{
currentpos=document.body.scrollTop;
window.scroll(0,++currentpos);
if (currentpos !=document.body.scrollTop)
sc();
}
document.onmousedown=sc
document.ondblclick=initialize

//定义结束-->


