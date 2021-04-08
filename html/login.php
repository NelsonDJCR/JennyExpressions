<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../plugins/alertify/alertify.css">
</head>

<body>
    <div class="contenedor">
        <div class="box-login">
            <div class="login-img">
                <img src="https://gamepedia.cursecdn.com/blacksurvival_gamepedia_en/e/e4/Alex_Avatar.png" alt="" class="img-login">
            </div>
            <div class="login-form">
                <div class="form" id="div_login">
                    <h1>LOG IN</h1>
                    <input class="input-text" placeholder="Username" type="text" id="user">
                    <input class="input-text" placeholder="Password" type="password" id="password">
                    <button class="input-submit" id="btnLogin">Log in</button>
                </div>
                <div class="footer-form">
                    <p>Forgot your password?</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
<script src="../plugins/alertify/alertify.min.js"></script>
<script src="../plugins/jquery.js"></script>
<script>
    // form_login
    $("#btnLogin").click(function() {

        var form = `user=${$("#user").val()}&password=${$("#password").val()}`;


        $.ajax({
            type: "post",
            url: "../querys/login.php",
            data: form,
            success: function(r) {
                if (r == 500) {
                    alertify.alert("Usuario o contraseña incorrectos", function() {
                        alertify.message('Aceptar');
                    })
                }else if (r == 200) {
                    window.location.href = "../dashboard";
                }

            }
        });

        ;
    })
</script>