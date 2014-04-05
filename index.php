<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HTML5 Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.form.js"></script>
<link rel="stylesheet" href="css/style.css">
<script>
$(function(){
$('#contact').validate({
submitHandler: function(form) {
    $(form).ajaxSubmit({
    url: 'process.php',
    success: function() {
    $('#contact').hide();
    $('#contact-form').append("<p class='thanks'>Thanks! We would let you know soon.</p>")
    }
    });
    }
});         
});

</script>
</head>

<body>

<img alt="this4bliss logo" src="4blisslogo.jpg">
<div id="contact-form">	


<form id="contact" method="post" action="">
<fieldset>	

<h3>Subscribe to hear our updates</h3>

<label for="email">E-mail</label>
<input type="email" name="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">


<label for="message">Question/Comment</label>
<textarea name="message" rows="3"></textarea>

<input type="submit" name="submit" class="button" id="submit" value="Subscribe" />

</fieldset>
</form>

</div><!-- /end #contact-form -->

<script src="js/modernizr-min.js"></script>
<script>
if (!Modernizr.input.placeholder){
      $('input[placeholder], textarea[placeholder]').placeholder();
}
</script>
</body>
</html>