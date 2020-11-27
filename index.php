<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bin Lookup -HindustaniBhau_XD</title>
	<script type="text/javascript" src="bin-lookup.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style type="text/css">
	.block {
		display: block;
		background-color: #405070;
		padding: 10px;
		padding-top: 30px;
		height: 400px;
		width: 300px;
        margin-top: 20px;
        margin-bottom: 30px;
	}
	body {
		background-color: #222;
		font-family: monospace;
		margin: 20px;
	}
	.head1 {
		background-color: #ffffff;
		color: black;
		font-family: monospace;
		width: 320px;
		

	}
		.head2 {
		background-color: #ffffff;
		color: black;
		font-family: monospace;
		width: 300px;
		

	}
	span {
		text-align: left;
		margin: 2px;
	}
</style>
</head>
<body>
	<script type="text/javascript">

	</script>
<center>
	<h3 class="head1">BIN CHECKER</h3>
	<div class="block" style="margin: 2px;">
		
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Enter Bin" id="ibin">
  <div class="input-group-append">
    <input type="button" value="GET" class="btn btn-outline-secondary" type="button" id="button-addon2" style="background-color: red; color: green;" onclick="getbin()">
  </div>
</div>


    <div class="alert alert-primary" role="alert">
  Type:<span id="type"></span>
</div>
<div class="alert alert-secondary" role="alert">
  Brand: <span id="brand"></span>
</div>
<div class="alert alert-success" role="alert">
  Bank: <span id="bank"></span>
</div>
<div class="alert alert-warning" role="alert">
  Credit/Debit: <span id="cd"></span>
</div>
<div class="alert alert-danger" role="alert">
  Country: <span id="country"></span>
</div>

	</div>
	&nbsp;


<footer style="background:#3f51b5; width:320px; padding:10px; margin-top: 30px;">
	<h4 class="head2">Follow</h4>
	<a href="https://t.me/AnonyBinners">
      <img src="https://img.icons8.com/color/30/000000/telegram-app.png"/> 
</a>
</footer>

</center>
</body>
</html>
