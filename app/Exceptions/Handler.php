<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        //后台的跳转地址
        if ( $exception->getMessage()=='Unauthenticated.' && in_array('admin', $exception->guards())  ) {
            return redirect()->guest(route('admin.login'));
        }
        if ( $exception->getMessage()=='Unauthenticated.' ) {
            $json =['code'=>401,'status'=>-10,'msg'=>'需要登录','data'=>[]];
            $response = response()->json($json);
            $response->header('Access-Control-Allow-Origin','*');
            $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Authorization, Cookie, Accept');
            $response->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, PTIONS, DELETE');
            $response->header('Access-Control-Allow-Credentials', 'false');
            return $response;
        }
        return parent::render($request, $exception);
    }
}
