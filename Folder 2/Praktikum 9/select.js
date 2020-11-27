var xmlHttp = createXmlHttpRequestObject();


function createXmlHttpRequestObject()
{
    var xmlHttp;
    if(window.ActiveXObject)
    {
       try
       {
          xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
       }
       catch (e)
       {
          xmlHttp = false;
       }
    }
else
{
    try
    {
       xmlHttp = new XMLHttpRequest();
    }
    catch (e)
    {
         xmlHttp = false;
    }
}

if (!xmlHttp) alert("Obyek XMLHttpRequest gagal dibuat");
else
return xmlHttp;
}

function select()
{    
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
    {
       propinsi = 
         encodeURIComponent(document.getElementById("propinsi").value);
	   
       xmlHttp.open("GET", "select.php?prop=" + propinsi, true);
       xmlHttp.onreadystatechange = handleServerResponse;
       xmlHttp.send(null);
    }
else setTimeout('select()', 1000);
}


function handleServerResponse()
{
    if (xmlHttp.readyState == 4)
    {
       if (xmlHttp.status == 200)
       {
          xmlResponse = xmlHttp.responseXML;
  
	    xmlRoot = xmlResponse.documentElement;

          kabArray = xmlRoot.getElementsByTagName("kab");
          
	    html = "";
		  
          for (var i=0; i<kabArray.length; i++)
		  {
   	        html += "<option value='" 
                     + kabArray.item(i).firstChild.data 
                     + "'>" 
                     + kabArray.item(i).firstChild.data + "</option>";
		  }
		  
          document.getElementById("kabupaten").innerHTML = html;
         
       }
       
       else
       {
          alert("Ada kesalahan dalam mengakses server: " +
          xmlHttp.statusText);
       }
    }
}
