<html>
<head>
  <meta charset="utf-8">
  <title>Switch</title>
  <script type = "text/javascript">

    function submitForm(re){
      var form = document.createElement('form');
      document.body.appendChild(form);
      var input = document.createElement('input');
      input.setAttribute('type','hidden');
      input.setAttribute('name','name');
      input.setAttribute('value',re);
      form.appendChild(input);
      form.setAttribute('action','S.php');
      form.setAttribute('method','post');
      form.submit();
    }
    function encryption(){
      var re = document.forms.one.two.value;
      var key = 30;
      var array = new Array(re.length)
      for(var i = 0; i < re.length; i++){
        array[i] = re.charCodeAt(i);
      }
      re ="";
      for(var i = 0; i < array.length; i++){
        array[i] = array[i] -key;
      }
      for(var i = 0; i < array.length; i++){
        re = re + array[i]+ " ";
      }
      submitForm(re);
    }

  </script>
</head>
<body>
  <h1>You are Hirasawa</h1>
  <form method="post" name="form1" id="one" action="javascript:encryption()">
    <p>name <input type="text" name="name" id="two" size="30"></p>
    <p><input type="submit" value="submit"></p>
  </form>
</body>
</html>