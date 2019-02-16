<?php

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface HttpClient
{
    public function get(RequestInterface $request): ResponseInterface;
    public function post(RequestInterface $request): ResponseInterface;
    public function put(RequestInterface $request): ResponseInterface;
    public function patch(RequestInterface $request): ResponseInterface;
    public function delete(RequestInterface $request): ResponseInterface;
}

