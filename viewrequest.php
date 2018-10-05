<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head><style>
table,th,td{
 border: 1px solid black;
margin:0 auto;
height:50px;
width:700px;

}
th {padding: 20px;
    background-color: #4CAF50;
    color: white;
}
.boxed1 { background-color: lightgrey;
    width: 1000px;
    border: 5px solid green;
    padding: 25px;
    margin: auto;
    overflow-x:auto;
      }
</style>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
$(function() 
		{
		$("#viewlist").empty();
		
    $.ajax({
       url:"test1.php",
       type: "post", 
       success:function(result)
       {
    	  
			var obj = JSON.parse(result);
			var viewlist="";
			
			if( obj!="" )
			{
				viewlist+= "<table>"+
				"<tr>"+
				"<th style='text-align: center;'>Name</th>"+
				"<th style='text-align: center;'>Gender</th>"+
				"<th style='text-align: center;'>Blood group</th>"+
				"<th style='text-align: center;'>Date of birth</th>"+
				"<th style='text-align: center;'>Email</th>"+
				"<th style='text-align: center;'>Mobile number</th>"+
				"<th style='text-align: center;'>Till Required Date</th>"+
				
				"</tr>";

				$.each(obj, function(idx, picture)
				{
            		viewlist+= "<tr style='text-align: center;'>"+
					"<td>"+picture.name+"</td>"+
					"<td>"+picture.gender+"</td>"+
					"<td>"+picture.blood_group+"</td>"+
					"<td>"+picture.dateofBirth+"</td>"+
					"<td>"+picture.email+"</td>"+
					"<td>"+picture.mobile+"</td>"+
					"<td>"+picture.tillrequireddate+"</td>"+
					"</tr>";
            	});
				viewlist+="</table>"
			}
			else
			{viewlist+="<h2>No data found</h2>"}
		$("#viewlist").append(viewlist);
       },
       error: function ()
       {
          alert("error")
       }
    });
    });

</script></head>
<body>
<?php include('update.php'); ?>
<br><br>
<div class="boxed1">
  <div class="header">
  	<h3>All View Request List</h3>
  </div><br><br>
	<div id="viewlist"></div>
</div>
</body>
</html>