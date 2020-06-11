<?php
namespace App\Http\Controllers\API;


class JsonFormatter
{
    protected static  $respons = [
        'meta' => [
            'code'    => 200,
            'statuss' => 'success',
            'msg'     => null
        ],

        'data' => null
    ];

    public static function success($data, $msg)
    {
        self::$respons['meta']['msg'] = $msg;
        self::$respons['data']        = $data;

        return response()->json(self::$respons, self::$respons['meta']['code']);
    }

    protected static function failed($msg)
    {
        self::$respons['meta']['code'] = 400;
        self::$respons['meta']['statuss'] = 'failed';
        self::$respons['meta']['msg'] = $msg;

        return response()->json(self::$respons, self::$respons['meta']['code']);
    }

}
