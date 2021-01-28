<?php

namespace Core\HttpClient;

interface IHttpResponse
{
    /** Устанавливает заголовки
     *
     * @param array $headers в формате ключ - значение
     * @return void
     */
    public function setHeaders(array $headers) : void;

    /**
     * Перенаправляет клиента на иной ресурс
     *
     * @param string $url URL по которому производится перенаправление клиента
     */
    public function redirect(string $url) : void;

    /**
     * Задаёт тело ответа
     *
     * @param string $body тело ответа
     */
    public function withBody(string $body) : void;

    /**
     * Задаёт код ответа
     * Example: 200, 201, 404
     * @param int $code - код ответа
     */
    public function statusCode(int $code) : void;

    /**
     * Задаёт текст ответа ( Описание кода ответа )
     * Example: 200 - OK
     *
     * @param string $statusText - текст ответа
     */
    public function statusText(string $statusText) : void;


}