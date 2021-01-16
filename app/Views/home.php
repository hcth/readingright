<h2>Register Form</h2>
Enter Username:
<input type='text' name='name' id='name' />
<br>
<span id='err_name' style='color:red'></span>
<br>
Enter EMail:
<input type='email' name='email' id='email' />
<br>
<span id='err_email' style='color:red'></span>
<br>
<input type='submit' name='register' id='register' value='Register'>
<br>

<h2>Get Data Form</h2>
Enter Token:
<input type='text' name='token' id='token' />
<br>
<span id='err_token' style='color:red'></span>
<br>
<input type='submit' name='verify' id='verify' value='Get data'>
<br>
<span id='msg' style='color:#50135a'></span>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
base_url = '<?php echo base_url(); ?>'+'/ci/public/';

$('#register').click(function() {
    $('#err_name').text('');
    $('#err_email').text('');
    var flag = true;
    if($('#name').val() == '')
    {
        $('#err_name').text('Name is mandatory');
        flag = false;
    }
    if($('#email').val() == '')
    {
        $('#err_email').text('Email is mandatory');
        flag = false;
    }
    if(flag === true){
	    register();
    }
});

$('#verify').click(function() {
    $('#err_token').text('');
    var flag = true;
    if($('#token').val() == '')
    {
        $('#err_token').text('Token is mandatory');
        flag = false;
    }
    if(flag === true){
	    getData();
    }
});

function register(){
    $.ajax({
        url : base_url + 'client/register',
        dataType : 'text',
        type : "post",
        data : {
            name:$('#name').val(),
            email:$('#email').val(),
        },		
        beforeSend : function() {
            // $(".loader").show();
        },
        success : function(data) {
            // $(".loader").hide();
            $('#msg').text(data);
        },
    });
}

function getData(){
    $.ajax({
        url : base_url + 'client/get_data',
        dataType : 'text',
        type : "post",
        data : {
            token:$('#token').val(),
        },		
        beforeSend : function() {
            // $(".loader").show();
        },
        success : function(data) {
            // $(".loader").hide();
            $('#msg').text(data);
        },
    });
}
</script>