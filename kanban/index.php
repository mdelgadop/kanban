<!DOCTYPE HTML>
<html>
<head>
<script src="./lib/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css" >

<script src="./lib/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/kanban.css">
<script src="./js/kanban.js"></script>
<script src="./lib/jsrender.min.js"></script>

<script id="theTmpl" type="text/x-jsrender">

{{for states}}
		<td>
			<div class="cola-title alert alert-{{:class}}" role="alert">
			  {{:name}}
			</div>
			<div id="div{{:id}}" class="cola {{:class}}" ondrop="drop(event)" ondragover="allowDrop(event)">
				{{for tasks}}
				<div id="drag{{:id}}" class="nota" draggable="true" ondragstart="drag(event)">{{:desc}}</div>
				{{/for}}
				
			</div>
		</td>
{{/for}}

</script>


</head>
<body>


<div id="log">&nbsp;</div>
<?php
include('./jss/indexjs.php');
?>
<table class="container">
	<tr class="fila" id="result">
	</tr>
</table>

</body>
</html>
