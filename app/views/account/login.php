<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale = 1.0">
    <title>Login</title>


</head>
<body>
                <div class="row justify-content-center">
                    <div class="col-4 text-center">
                        <div class="tag">
                            <h2>METEO ZP</h2>
                            <span class="text-justify">Узнай погоду в любимом городе</span>
                        </div>
                            <form action="/account/login" method="post" class="form-login">
                                <div class="form-group">
                                <p><input type="text" name="login" placeholder="Логин" class="form-control"  ></p>
                                <p><input type="password" name="password" placeholder="Пароль" class="form-control" ></p>
                                    <div class="row">
                                        <div class="col">
                                <b><button class="btn btn-outline-primary btn-block rounded" type="submit"  >Логин</button></b>
                                        </div>
                                        <div class="col">
                                <a class="btn btn-outline-primary btn-block" href="register" >Регистрация</a>
                                        </div>
                                </div>
                            </form>
                    </div>
                    </div>
</body>
</html>