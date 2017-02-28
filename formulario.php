<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>

       <link href="Content/css/bootstrap.min.css" rel="stylesheet">
    <link href="Content/css/bootstrap-theme.css" rel="stylesheet">
    <link href="Content/css/bootstrap-dialog.css" rel="stylesheet">
    <link href="Content/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="Content/css/notifIt.css" rel="stylesheet">
    <link href="Content/css/bootstrap.css" rel="stylesheet">
    <link href="Content/css/plugins-2.3.css" rel="stylesheet">
    <link href="Content/css/EstilosTavares.css" rel="stylesheet">
    <link href="Content/css/stsLogin.css" rel="stylesheet">
    <link href="Content/css/site.css" rel="stylesheet">
</head>
<body>  
    <center>
        <form action="guardar.php" method = "POST">
            <input required type="text" name ="usuario" placeholder="Usuario..."/><br /><br />
            <input required type="text" name ="password" placeholder="password..."/><br /><br />
            <input required type="text" name ="nombre" placeholder="nombre..."/><br /><br />
            <input required type="text" name="apellido" placeholder="apellido"/><br /><br />
            <input required type="correo" name="correo" placeholder="correo..."><br /><br />
            <input type="submit" value="guardar">
        </form>
    </center>
</body>
</html>

 <script src="Content/content/js/notifIt.js"></script>

 <script>
    // function guardar (){
    //      $.ajax({
    //         url: "guardar.php",
    //         type: "POST",
    //         data: $('#formEnquiry').serialize(),
    //         dataType: "json",
    //         success: function (data) {
    //             alert("SUCCESS:");
    //             for(var key in data) {
    //                 $('#msgid').append(key);
    //                 $('#msgid').append('=' + data[key] + '<br />');
    //             }
    //         },
    //         error: function (data) {
    //             alert("ERROR: ");
    //             for(var key in data) {
    //                 $('#msgid').append(key);
    //                 $('#msgid').append('=' + data[key] + '<br />');
    //             }
    //         }
    //     });
    // } else {
    //     $('#msgid').append('<h1>(Outside Ready) NOT VALIDATED</h1>');
    // }    
    // }
 </script>