// JavaScript Document
// JavaScript Document

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
			aNav_a[2].style.color="yellow";
			aNav_a[2].style.background="#06C";
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
		
}