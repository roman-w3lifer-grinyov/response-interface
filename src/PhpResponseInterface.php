<?php

namespace w3lifer\PhpResponseInterface;

class PhpResponseInterface
{
    public static function getFalseResponse(array $errors = []): array
    {
        return [
            'success' => false,
            'errors' => $errors,
        ];
    }

    public static function getTrueResponse(array $data = []): array
    {
        return [
            'success' => true,
            'data' => $data,
        ];
    }
}
