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
if (!xmlHttp) alert("Obyek XMLHttpRequest tidak dapat dibuat");
else
return xmlHttp;
}

function process()
{
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
    {
       nama = 
          encodeURIComponent(document.getElementById("namaMhs").value);
       xmlHttp.open("GET", "search.php?namaMhs=" + nama, true);
       xmlHttp.onreadystatechange = handleServerResponse;
       xmlHttp.send(null);
    }
    else
    setTimeout('process()', 1000);
}

function handleServerResponse()
{
    if (xmlHttp.readyState == 4)
    {
       if (xmlHttp.status == 200)
       {
		  var xmlResponse = xmlHttp.responseXML;
              xmlRoot = xmlResponse.documentElement;

              nimArray = xmlRoot.getElementsByTagName("nim");
              namaMhsArray = xmlRoot.getElementsByTagName("namamhs");
		  alamatArray = xmlRoot.getElementsByTagName("alamat");
		  		                    		  
		  if (nimArray.length == 0)
		  {
		     html = "Data tidak ditemukan";
		  }
		  else
		  {
              
  // membentuk tabel untuk menampilkan hasil pencarian

		  html = "<table border='1'><tr><th>NIM</th><th>NamaMhs</th><th>Alamat</th></tr>";
		  	  
		  for (var i=0; i<nimArray.length; i++)
		  {
	           html += "<tr><td>" + nimArray.item(i).firstChild.data +
                            "</td><td>" +
                          namaMhsArray.item(i).firstChild.data + 
                            "</td><td>" + 
		              alamatArray.item(i).firstChild.data + 
                            "</td></tr>";
		  }
		  html = html + "</table>";
		  }
		  
		  document.getElementById("hasil").innerHTML = html;
setTimeout('process()', 1000);
       }	
       else
       {
          alert("Ada masalah dalam mengakses server: " +
          xmlHttp.statusText);
       }
    }
}
