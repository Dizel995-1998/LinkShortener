<?php

namespace Core\HttpClient;

interface IHttpRequest
{
    /**
     * Проверяет был ли заголовок в запросе клиента
     *
     * @param string $header заголовок, аргумент нечувствителен к регистру
     * @return bool
     */
    public function hasHeader(string $header) : bool;

    /**
     * Возвращает HTTP заголовки
     *
     * @return array формат ключ - значение
     */
    public function getHeaders() : array;

    public function withMethod
}