
function change(num)
{
	if(num<10)
		return '0'+num;
	else
		return ''+num;
}
function change_seconds(time)
{
	var oldtime=(new Date(time)).getTime();
	return oldtime;
}
function get_current_time()
{
		var date=new Date();
		var year=date.getFullYear();
		var month=date.getMonth()+1;
		var day=date.getDate();
		var hour=date.getHours();
		var minute=date.getMinutes();
		var second=date.getSeconds();
		var str=change(year)+'/'+change(month)+'/'+change(day)+' '+change(hour)+':'+change(minute)+':'+change(second);
		return str;
		
}
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
window.onload=function()
{
	var oNav=document.getElementById('nav');
	var aNav_a=oNav.getElementsByClassName('menu_a');
	var aul=oNav.getElementsByTagName('ul');
	var ali=document.getElementsByTagName('li');
	test_home(aNav_a,aul,ali);
	
	
	var clock=document.getElementById('clock');
	clock.innerHTML='当前时间：'+get_current_time();
	setInterval(function(){
			var clock=document.getElementById('clock');
	clock.innerHTML='当前时间：'+get_current_time();
		},1000);
	
	
	
	var table=document.getElementsByTagName('table')[0];
	var aTr=table.getElementsByTagName('tr');
	for(var i=1; i<aTr.length; i++)
	{
		aTr[i].onclick=function()
		{
			var aTd=this.getElementsByTagName('td');
			var start_time=aTd[2].innerHTML;
			var end_time=aTd[3].innerHTML;
			var s1=change_seconds(start_time);
			//var s1=change_seconds("2014/11/05 10:10:00");
			var s2=change_seconds((new Date()));
			//var s3=change_seconds("2014/12/05 12:10:00");
			var s3=change_seconds(end_time);
			
			if(s2>=s1 && s2<=s3)
			{
				
			}
			else
			{
				alert('小伙伴你好，请于'+start_time+'开始考试');	
				this.getElementsByTagName('a')[0].href='';
			}
		}
	}
}