<!doctype html>
<html>
<body>
<form action="/api/brief/send" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <label>
        Имя
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Организация
        <input type="text" name="organization">
    </label>
    <br>
    <label>
        Услуги
        <input type="text" name="services">
    </label>
    <br>
    <label>
        Цели
        <input type="text" name="purposes">
    </label>
    <br>
    <label>
        Описание
        <input type="text" name="description">
    </label>
    <br>
    <label>
        Файлы
        <input type="file" name="files[]" multiple>
    </label>
    <br>
    <label>
        Сайт
        <input type="text" name="website">
    </label>
    <br>
    <label>
        Дедлайн
        <input type="text" name="deadline">
    </label>
    <br>
    <label>
        Почта
        <input type="text" name="email">
    </label>
    <br>
    <label>
        Телефон
        <input type="text" name="phone">
    </label>
    <br>
    <label>
        Ссылки
        <input type="text" name="references">
    </label>
    <br>


    <input type="submit" value="Отправить">
</form>
</body>
</html>
