divid='';
	function handleHttpResponse()
	{
		if (http.readyState == 4)
		{
			if (divid != '')
			{
			switch (divid){
			 
			     case 'delete':
                 	document.location.reload();
				  break;
				  case 'div1':
                 	document.getElementById(divid).innerHTML = http.responseText;
				break;
					default : 
					document.getElementById(divid).innerHTML = http.responseText;
			  }
			

			}
		}
	}
	function getHTTPObject()
	{
		var xmlhttp;
		/*@cc_on
		@if (@_jscript_version >= 5)
			try {
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (E) {
					xmlhttp = false;
				}
			}
		@else
		xmlhttp = false;
		@end @*/
		if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
		{
			try
			{
				xmlhttp = new XMLHttpRequest();
			}
			catch (e)
			{
				xmlhttp = false;
			}
		}
		return xmlhttp;
	}
	var http = getHTTPObject(); // We create the HTTP Object
    
 function srch(v1)
 {
  divid='div1';
		if(v1=='')
		{
			alert("Please Enter Search Data!");
			document.getElementById(divid).innerHTML = "";
		}
		else
		{
		http.open("GET", "srch1s.php?cont="+v1, true);
		http.onreadystatechange = handleHttpResponse;
		http.send(null);
		}
  }
  
   function srch1()
 {
  divid='div1';
		var v1=document.getElementById('cont').value;
		//var nm=document.getElementById('nm').value;
		//var cls=document.getElementById('cls').value;
		http.open("GET", "srch1s.php?cont="+v1, true);
		//http.open("GET", "srch1s.php?cont="+v1+"&nm1="+nm+"&cls1="+cls, true);
		http.onreadystatechange = handleHttpResponse;
		http.send(null);
  }
  
  function checkS(e){
// capture the mouse position
				    var posx = 0;
					var posy = 0;
    if (!e) var e = window.event;
    if (e.pageX || e.pageY)
    {
        posx = e.pageX;
        posy = e.pageY;
    }
    
	
	
				document.getElementById('lbox').style.left = -500+posx+"px";
				document.getElementById('lbox').style.top = posy+"px";
				document.getElementById('lbox').style.display='block';
				
			}
			
	
function sfdtl(sl,e)
	{	
	 
		checkS(e);
		divid = 'lbox';
		
		
		time =  new Date();
		timestamp = time.getTime()+time.getSeconds();
		url = "?sl="+sl+"&timestamp="+timestamp;
		http.open("GET", "edit.php"+url, true);
		http.onreadystatechange = handleHttpResponse;
		http.send(null);
	}
	

function clr()
	{	divid = 'lbox';
		document.getElementById(divid).innerHTML = "";
		
	}
	
	function del(sl)
	{	divid = 'delete';
	    if(confirm("Are You Sure?"))
		{
			time =  new Date();
		timestamp = time.getTime()+time.getSeconds();
		url = "?sl="+sl+"&timestamp="+timestamp;
		http.open("GET", "del.php"+url, true);
		http.onreadystatechange = handleHttpResponse;
		http.send(null);
		}
	    
		
		
	}


 
