<?php
$country = 'РФ';
$city = 'Санкт-Петербург';
$street = 'Ломоносова';
$num = '9';

echo <<<CONTACTS
    <section>
        <p>Страна: $country </p>
        <p>Город: $city, улица $street, дом $num </p>
    </section>
CONTACTS;

