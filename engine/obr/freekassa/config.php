<?php
class Config
{
    // Настроек от проекта в личном кабинете https://merchant.freekassa.ru/settings
    const MERCHANT_ID = '7576';
    const SECRET_KEY_1 = '+!/MGDx]0VjaL]=';
    const SECRET_KEY_2 = 'u2RNDl^?3iN69J(';

    // Валюта платежа (RUB,USD,EUR,UAH,KZT)
    const CURRENCY = 'RUB';

    // Стоимость товара в руб.
    const ITEM_PRICE = 1;

    // Таблица начисления товара, например `users`
    const TABLE_ACCOUNT = 'nrp_players';
    // Название поля из таблицы начисления товара по которому производится поиск аккаунта/счета, например `email`
    const TABLE_ACCOUNT_NAME = 'id';
    // Название поля из таблицы начисления товара которое будет увеличено на количество оплаченного товара, например `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'donate_transactions';

    // Параметры соединения с бд
    // Хост
    const DB_HOST = '194.93.2.103';
    // Имя пользователя
    const DB_USER = 'black';
    // Пароль
    const DB_PASS = '0NYaVkIssLxGMcOv';
    // Название базы
    const DB_NAME = 'black';
}
