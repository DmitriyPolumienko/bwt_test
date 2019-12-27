<div class="row justify-content-center">
    <div class="col-6 text-center">
        <div class="tag">
<form action="/feedback/send" method="post" onsubmit="return checkForm(this);">

    <h4>Что вы думаете о нас?</h4>

    <div class="form-group">
        <p></p>
    <p><input type="text" name="name" class="form-control " placeholder="Ваше имя:"></p>
    <p><input type="email" name="email" class="form-control" placeholder="Ваш email:"></p>
    <p>
        <textarea name="text" rows="7" cols="33" placeholder="Ваш отзыв"></textarea>
    </p>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <div class="g-recaptcha" data-sitekey="6Lf6xMkUAAAAADKH4qzU8AP2PqW9ZVr2fhsq7kkh"></div>
    <b><button class="btn btn-outline-primary btn-block rounded" type="submit">Отправить</button></b>
        </form>
        </div>
    </div>
    </div>
