<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale = 1.0">
    <title>Register</title>
</head>
<body>
<div class="row justify-content-center">
    <div class="col-2 text-center">
        <div class="tag">
            <h2 class="text-justify">Регистрация</h2>
        </div>
<form action="/account/register" method="post">
    <div class="form-group">
    <p><input type="text" name="name" class="form-control" placeholder="Имя" ></p>
    <p><input type="text" name="surname" class="form-control" placeholder="Фамилия" ></p>
<div class="radio" style="color: white; margin-right: 220px" >
                <input type="radio" name="gend" value="1"   placeholder="Мужчина">Male <br>
</div>
<div class="radio" style="color: white; margin-right: 205px" >
    <input type="radio" name="gend" value="2"  placeholder="Женщина"/>Female <br>
</div>

    </div>
    <p><input type="text" name="login" class="form-control" placeholder="Логин"></p>
    <p><input type="email" name="email" class="form-control" placeholder="E-mail" ></p>
    <p><input type="password" name="password" class="form-control"placeholder="Пароль" ></p>
        <b><button class="btn btn-outline-primary btn-block rounded" type="submit"  >Регистрация</button></b>
    </div>

</form>
        </div>
    </div>
</body>