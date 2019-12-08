<?php
    $body = 'color: #000; font: normal 16px/1.5 Arial;';
    $h1 = 'font: bold 45px/1.24 Tahoma; margin-bottom: 48px;';
    $h2 = 'font: bold 22px/1.24 Tahoma; margin-bottom: 8px;';
    $row = 'margin-bottom: 32px;'
?>

<div style="color: #000; line-heigth: 1.5;">
    <div style="{{ $h1 }}">Заказ #{{ $brief->id }}</div>

    <div style="{{ $row }}">
        <div style="{{ $h2 }}">Требуемые услуги</div>
        <p>{{ $brief->services }}</p>
    </div>

    <div style="{{ $row }}">
        <div style="{{ $h2 }}">Цели проекта</div>
        <p>{{ $brief->purposes }}</p>
    </div>

    @if ($brief->files_description)
    <div style="{{ $row }}">
        <div style="{{ $h2 }}">Описание файлов</div>
        <p>{{ $brief->files_description }}</p>
    </div>
    @endif

    @if ($brief->website)
    <div style="{{ $row }}">
        <div style="{{ $h2 }}">Адрес сайта</div>
        <p>{{ $brief->website }}</p>
    </div>
    @endif

    @if ($brief->deadline)
    <div style="{{ $row }}">
        <div style="{{ $h2 }}">Дэдлайн</div>
        <p>{{ $brief->deadline }}</p>
    </div>
    @endif

    <div style="{{ $row }}">
        <div style="{{ $h2 }}">E-Mail</div>
        <p>{{ $brief->email }}</p>
    </div>

    @if ($brief->phone)
    <div style="{{ $row }}">
        <div style="{{ $h2 }}">Номер телефона</div>
        <p>{{ $brief->phone }}</p>
    </div>
    @endif

    @if ($brief->references)
    <div style="{{ $row }}">
        <div style="{{ $h2 }}">Источник трафика</div>
        <p>{{ $brief->references }}</p>
    </div>
    @endif

    <div style="margin-top: 64px;">
        — {{ $brief->from . ' ' . $brief->name}}
    </div>
</div>