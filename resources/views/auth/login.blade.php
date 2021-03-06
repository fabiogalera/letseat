
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Let's Eat ® - Intranet </title>

    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/bootstrap-social.css") }}" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content center-block">
                <form>
                    <div class="form-group center-block"><img src="{{ asset("images/logo-lets.png") }}" width="240" height="272"/></div>
                    <div style="width: 200px;" class="center-block">
                        <br /><br />
                        <a href="/auth/facebook" class="btn btn-block btn-social btn-facebook">
                            <span class="fa fa-facebook"></span> Logar com Facebook
                        </a>
                        <br />
                    </div>


                    <div class="clearfix"></div>

                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <p>©2016 Todos os direitos reservados. Let's Eat ® - Marca registrada de Marcos Nunes.</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>