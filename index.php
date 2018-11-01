<!DOCTYPE html>
<html lang="en-gb">
<head>
<meta charset="UTF-8">
<title>Home - SMS-EMAIL-SOCIAL-Sending-Application</title>
<!-- CORE STYLESHEETS -->
<link rel="stylesheet" type="text/css" href="/css/global/main.css">
<!-- BOOTSTRAP -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/js/send_a_free_text_message.js"></script>
</head>

<body>

<!-- File Location: /index.php -->

<div class="container-fluid">
  <div class="row">
    <div class="text-center">
      <h1>SEND A FREE TEXT MESSAGE</h1>
    </div>
  </div>
  <div class="row">
  <form id="send_a_free_text_message" autocomplete="off">
    Enter Your Mobile Number:
    <input type="text" class="form-control" placeholder="0000 0000 000 OR +00 0000000000">
    <br>
    Select Your Mobile Provider:
    <select class="form-control">
      <option>Three Mobile</option>
    </select>
    <br>
    Enter Your Text Message:
    <textarea class="form-control" rows="2" maxlength="160"></textarea>
    <br>
    <div class="text-center">
      <button type="submit" class="btn btn-default">SEND TEXT MESSAGE</button>
      <button type="button" onclick="ResetFormData()" class="btn btn-default">RESET ENTERED DATA</button>
    </div>
  </form>
  </div>
  <br>
  <div class="row">
    <div class="text-center">
      COPYRIGHT &copy; 2017 <a href="https://github.com/danielrutter/SMS-EMAIL-SOCIAL-Sending-Application" target="_blank">GitHub - SMS-EMAIL-SOCIAL-Sending-Application (MIT Licence)</a>
    </div>
  </div>
  <br>
</div>

</body>

</html>
