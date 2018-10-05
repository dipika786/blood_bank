<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<style>
table,th,td{
 border: 1px solid black;
margin:0 auto;
height:50px;
width:300px;
}
h2{
text-align: center;
}
th {padding: 0;
    background-color: #4CAF50;
    color: white;
}
.boxed { background-color: lightgrey;
    width: 450px;
    border: 5px solid green;
    padding: 15px;
    font-size:20px;
    margin: auto;
      }
</style>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
$(function() 
{
$("#donorlist").empty();
});
function myFunction()
{
	$("#donorlist").empty();
    $.ajax({
       url:"test.php",
       type: "post", 
       data: {"blood_group":$("#blood_group").val()},
       success:function(result)
       {
    	  
			var obj = JSON.parse(result);
			var donorlist="";
			
			if( obj!="" )                           
			{
				donorlist+= "<table>"+
				"<tr>"+
				"<th style='text-align: center;'>Name</th>"+
				"<th style='text-align: center;'>Gender</th>"+
				"<th style='text-align: center;'>Blood group</th>"+
				"<th style='text-align: center;'>Mobile number</th>"+
				"</tr>";

				$.each(obj, function(idx, picture)
				{
            		donorlist+= "<tr style='text-align: center;'>"+
					"<td>"+picture.name+"</td>"+
					"<td>"+picture.gender+"</td>"+
					"<td>"+picture.blood_group+"</td>"+
					"<td>"+picture.mobile+"</td>"+
					"</tr>";
            	});
            	donorlist+="</table>"
			}
			else
			{donorlist+="<h2>No data found</h2>"}
		$("#donorlist").append(donorlist);
       },
       error: function ()
       {
          alert("error")
       }
    });
}
</script></head>
<body>
<?php include('top.php'); ?>
<br><br>
<div class="boxed">
  <div class="box box-primary">
  	<h3 style="margin-left:100px;color:red;">Search Blood Group</h3><br>
  	<form method="post" onsubmit="return false">
  	<div class="input-group">
  	  <label>Blood group</label>
  	  <select id="blood_group">
  	  	<option>A+</option>
  	  	<option>A-</option>
  	  	<option>B+</option>
  	  	<option>B-</option>
  	  	<option>AB+</option>
  	  	<option>AB-</option>
  	  	<option>O+</option>
  	  	<option>O-</option>
  	  	</select>
  	  
  	</div>  	
  <div class="input-group">
  	  <button onclick="myFunction()" class="btn btn-default">Go</button>
  	</div>
  </form>
	<br><br>
	</div>
	<div id="donorlist"></div>
	</div>
</body>
</html>