<?php


namespace Core;

require_once 'HttpClient/IHttpRequest.php';

class Router
{
    private string $path;
    private string $method;
    private string $fullPath;


    public function __construct(IHttpRequest $httpRequest, IHttpResponse $httpResponse)
    {

    }


}