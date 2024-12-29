<?php

use JetBrains\PhpStorm\NoReturn;

function views(string $file, array $data = []): void
{
    extract($data);
    require "resources/views/" . $file . ".html";
}

#[NoReturn]function redirect(string $url): void {
    header("Location: $url");
    exit;

}

#[NoReturn] function APIresponse($date, $status = 200): void
{
    header('Content-Type: application/json');
    http_response_code($status);
    echo json_encode($date);
    exit;
}
