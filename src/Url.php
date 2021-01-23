<?php

declare(strict_types=1);

namespace Llissssss\Puri;

final class Url
{
    private string $rawUrl;
    private string $host;
    private string $scheme;
    private string $port;
    private string $user;
    private string $pass;
    private string $query;
    private string $path;
    private string $fragment;

    public function __construct(string $url)
    {
        $this->validateUrl($url);
        $parsedUrl = parse_url($url);

        $this->rawUrl = $url;
        $this->scheme = $parsedUrl['scheme'] ?? '';
        $this->host = $parsedUrl['host'] ?? '';
        $this->port = (string) $parsedUrl['port'] ?? '';
        $this->user = $parsedUrl['user'] ?? '';
        $this->pass = $parsedUrl['pass'] ?? '';
        $this->query = $parsedUrl['query'] ?? '';
        $this->path = $parsedUrl['path'] ?? '';
        $this->fragment = $parsedUrl['fragment'] ?? '';
    }

    private function validateUrl(string $url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            throw new \InvalidArgumentException('URL is not valid.');
        }
    }
}

