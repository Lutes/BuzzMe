<head>
	<title>3557 Buzzer</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="/favicon.ico" type="image/x-icon" rel="icon" />
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body style="overflow-y: hidden">
<img src="krim.gif" style="width: 100%; position: absolute;">
<div class="container-fluid" style="position: relative; top: 50vh;">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-2" >
			 
			<input type="submit" class="button  btn btn-lg btn-block btn-danger" name="insert" value="BUZZ" />

		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
        });
    });

});
</script>
</body>
