var xhr;
function getcity()
{
	getxhr();
	
	xhr.open("GET","City.php",true);
	
	xhr.onreadystatechange=function()
	{
	
		if(xhr.readyState==4 && xhr.status==200)
		{
			var data=xhr.responseXML;
			var city=data.getElementsByTagName('city');
			var sel=document.getElementById("city");
			for(var i=0;i<city.length;i++)
			{
				var dr=city[i].childNodes[0].nodeValue;
				var ob=document.createElement("option");
				ob.value=dr;
				ob.text=dr;
				sel.appendChild(ob);
				
			}
		}
	}
	xhr.send();
}
function getxhr()
{
	if(!xhr && typeof XMLHttpRequest!='undefined')
	{
		xhr=new XMLHttpRequest();
	}
	else
	{
		xhr=new ActiveXObject("Microsoft.XMLHTTP");
	}
}