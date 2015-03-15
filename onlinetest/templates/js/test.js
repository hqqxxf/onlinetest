function test_home(aNav_a,aul,ali)
{
	for(var i=0; i<aNav_a.length; i++)
	{
		aNav_a[i].index=i;
		aul[i].index=i;
		aul[i].onmouseover=aNav_a[i].onmouseover=function()
		{
			for(var j=0; j<aNav_a.length; j++)
			{
				aNav_a[j].style.color="white";
				aNav_a[j].style.background="#39F";
			}
			for(var j=0; j<aul.length; j++)
			{
				aul[j].style.display='none';
			}
			aNav_a[this.index].style.color="yellow";
			aNav_a[this.index].style.background="#06C";
			aul[this.index].style.display='block';
		}
		aul[i].onmouseout=aNav_a[i].onmouseout=function()
		{
			for(var j=0; j<aNav_a.length; j++)
			{
				aNav_a[j].style.color="white";
				aNav_a[j].style.background="#39F";
			}
			for(var j=0; j<aul.length; j++)
			{
				aul[j].style.display='none';
			}
			aNav_a[0].style.color="yellow";
			aNav_a[0].style.background="#06C";
			//aul[0].style.display='block';
		}
	}
	for(var i=0; i<ali.length; i++)
	{
		ali[i].onmouseover=function()
		{
			for(var i=0; i<ali.length; i++)
			{
				ali[i].style.background='';
			}
			this.style.background="#99F";
		}
		ali[i].onmouseout=function()
		{
			for(var i=0; i<ali.length; i++)
			{
				ali[i].style.background='';
			}
		}
	}	
}
function change(num)
{
	if(num<10)
		return '0'+num;
	else
		return ''+num;
}
function backward_clock(obj)
{
	var end=(new Date(obj.innerHTML)).getTime();
	var now=(new Date()).getTime();
	var s=Math.floor((end-now)/1000);
	var day=Math.floor(s/(3600*24));
	var hour=Math.floor((s%(3600*24))/3600);
	var minute=Math.floor(((s%(3600*24))%3600)/60);
	var second=Math.floor(((s%(3600*24))%3600)%60);
	var str='剩余'+day+'天'+change(hour)+':'+change(minute)+':'+change(second);
	if(day<=0 && hour<=0 && minute<=0 && second<=0)
	{
		alert('时间到，去看成绩吧！');
		//window.close();
		
	}
	return str;
}
window.onscroll=function()
{
	var oDiv=document.getElementById('top');
	var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
	oDiv.style.top=scrollTop+'px';
}
window.onload=function()
{
	var oNav=document.getElementById('nav');
	var aNav_a=oNav.getElementsByClassName('menu_a');
	var aul=oNav.getElementsByTagName('ul');
	var ali=document.getElementsByTagName('li');
	test_home(aNav_a,aul,ali);
	alert('1');
	
	var oDiv=document.getElementById('div1');
	var oTop=document.getElementById('top');
	var str=backward_clock(oDiv);
	
	oTop.innerHTML=str;
	setInterval(function(){
		var oDiv=document.getElementById('div1');
		var oTop=document.getElementById('top');
		var str=backward_clock(oDiv);
		oTop.innerHTML=str;
	},1000);
}// JavaScript Document
