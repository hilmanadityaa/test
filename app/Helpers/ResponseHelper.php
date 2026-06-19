<?php

namespace App\Helpers;
use Illuminate\Http\JsonResponse;

class ResponseHelper
{
    public static function jsonResponse($success, $data, $statusCode): JsonResponse
    {
        return response()->json([
            'success' => $success,
            'data' => $data,
        ], $statusCode);
    }

    public static function error($message, $statusCode): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $statusCode);
    }
}
