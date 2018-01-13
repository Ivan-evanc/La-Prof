<!DOCTYPE html>
<html>
<head>
	<title>Add | row</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="../jquery/jquery-new.min.js"></script>
	<!--create the functionto handle the addition  of more rows to the table-->
	<script type="text/javascript">
	function getMoreRows(){
		document.getElementById("myTable").addRow(-1).innerHTML='<td>1</td><td>2</td><td>3</td>';
	}
</script>
</head>
<body>
	<fieldset class="container">
		<legend>Add row to table demo</legend>
		<table class="table table-striped" id="myTable" border="1">
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>Status</th>
			</tr>
			<tr>
				<td>Evans</td>
				<td>Kibet</td>
				<td><span class="label label-info">Working</span></td>
			</tr>
			
		</table>
		
	</fieldset>
	<div class="container">
		<button type="button" class="btn btn-primary" onclick="getMoreRows()">Add row</button>
	</div>



<button>Add row</button>

<table id="myTable">
    <tbody>
        <tr>
            <td>1</td>
            <td>John</td>
            <td>654 789 321</td>
        </tr>
    </tbody>
</table>
<br><br>
<script type="text/javascript">
	$('button').click(function(){
    //Add row
    //table.append('<tr><td>0</td><td>Hey</td><td>**********</td></tr>');
    $("#tableId").last().append("<tr><td>New row</td></tr>");
})
</script>



<!--create the selected demo for the project-->
<div class="container">
	<div class="alert alert-info"><h2>The selected form</h2></div>
	<form>
		<select class="form-control" id="select-item">
			<option selected="selected">Male</option>
			<option selected="selected">Female</option>
			<option selected="selected">Others</option>
		</select>
	</form>
	<div id="div-get" class="alert alert-info"></div>
	<!--add javascript to handle the demo selected options-->
	<script type="text/javascript">
		$( "select > #select-item" ).change(function() {
    var str = "";
    $( "select option:selected" ).each(function() {
      str += $( this ).text() + " ";
    });
    $( "#div-get" ).text( str );
  })
  .trigger( "change" );
	</script>
</div>



</body>
</html>


