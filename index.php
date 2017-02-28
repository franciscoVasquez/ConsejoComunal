<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Carnicería los Tavares">
    <meta name="author" content="Norkut">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Consejo Comunal Campomar</title>

    <!--@*@Styles.Render("Content/css")*@-->


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
    <!--@using (Ajax.BeginForm("ValidarUsuario", "Login", new AjaxOptions { HttpMethod = "POST", OnBegin = "BeginInicioSesion", OnSuccess = "SuccessInicioSesion" }, new { @class = "Login-form" }))
    {-->
<form action="validarUsuario.php" method= "POST" >


        <div id="login-container">
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <img src="Content/Images/u97.png" />

            </h1>
            <div class="animation-fadeInQuickInv" style="border-bottom: 2px solid #ccc;margin-bottom: 20px;">
                <span style="font-size:20px;color:#ffffff; font-family:Segoe; margin-left: 140px; "> · Bienvenido · </span>

                <!--@*<label>Ingrese su nombre de usuario y contraseña</label>*@-->
            </div>
            <div class="animation-fadeInQuickInv" style="padding-top: 8px;margin-top: 5px;background-color: #913434;margin-right: -120px;margin-left: 45px;">
                <div class="col-xs-12">
                    <label style="font-weight: 100;">
                        <span style="font-size:18px;color:#ffffff; font-family:Segoe "> Iniciar Sesión</span>
                    </label>
                </div>

                <div class="col-xs-12">
                    <!--@Html.ValidationMessageFor(model => model.Usuario, "", new { @class = "text-warning" })-->
                    <div class="form-group">
                        <input required type="text" class="form-control" name="user" placeholder = "Usuario">
                        <!--@Html.TextBoxFor(model => model.Usuario, new { @class = "form-control inputLogin", @placeholder = "Correo" })-->
                    </div>
                </div>
                <div class="col-xs-12">
                    <!--@Html.ValidationMessageFor(model => model.Password, "", new { @class = "text-warning" })-->
                    <div class="form-group">
                        <input required type="password" class="form-control" name="pass" placeholder = "Contraseña">
                        <!--@Html.TextBoxFor(model => model.Password, new { @class = "form-control inputLogin", @type = "password", @placeholder = "Contraseña" })-->
                    </div>
                </div>
                <div>
                    <button class="btn btn-default btn-group-justified" id="btnInicioSesion" style="width: 50%;margin-top: 15px;margin-left: 40px;" type="submit">Entrar</button>
                    <img id="imgLoadLogin" style="display:none;padding-left: 235px;margin-top: -26px;" src="Content/Images/spinner.gif" />
                </div>
                <p style="font-size:18px;"><span style="font-size:18px;color:#999999;">&nbsp;</span></p>

            </div>
        </div>
</form>
    <!--}-->
    <script>
        // var UrlImagenError = '@Url.Content("Content/Images/error.png")';
       
    </script>
    <script src="Content/content/js/notifIt.js"></script>
    
    <script>

    function SuccessInicioSesion(data) {
        if (data.Error) {
            MostrarAlertasInicio(data.Mensaje, 'error', function (confirmation) {
                if (confirmation) {
                    $('#btnInicioSesion').prop('disabled', false).html('Entrar');
                    //$('#imgLoadLogin').css('display', 'none');
                    $("#Usuario").val('');
                    $("#Password").val('');
                }
            }, '@Request.Url.OriginalString');
        } else {

            location.href = "@Url.Action("Index","Home")";
        }
    }
        function BeginInicioSesion() {
            //$('#imgLoadLogin').show();
            $('#btnInicioSesion').prop('disabled', true).html('Espere...');
        }
    </script>
 

    <!--@Scripts.Render("bundles/Scripts")
    @Scripts.Render("bundles/jqueryval")
    @*@Scripts.Render("bundles/Ajax")*@-->


       

</body>

</html>
