<?php

$httpRequest = new \Core\HttpClient\HttpRequest();
$httpResponse = new HttpResponse();

$httpRequest->getPath();

$repositoryLinks = new repositoryLinks();
$needleLink = $repositoryLinks->findOrFail(['link']);

$httpResponse->redirect($needleLink != false ?: '/short');

/**
 * Получить текущий URL, обратится к БД за URL на который
 * нужно перенаправить клиента, если такого URL нет перенаправить на
 * страницу сократителя ссылок с надписью, данный URL не был найден,
 * если найден -> перенаправление на данный URL
 */