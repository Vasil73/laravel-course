<?php

namespace App\Http\Middleware;

use App\Models\Log;
use Closure;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

//use File;

class DataLogger
{
    private $start_time;

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $this->start_time = microtime(true);
        return $next($request);
    }

    public function terminate($request)
    {
        if (env ( 'API_DATALOGGER', true )) {

            $endTime = microtime ( true );
            if (env ( 'API_DATALOGGER_USE_DB', true )) {
                $log = new Log();
                $log->time = gmdate ( 'Y-m-d H:i:s' );
                $log->duration = number_format ( $endTime - LARAVEL_START, 3 );
                $log->ip = $request->ip ();
                $log->url = $request->fullUrl ();
                $log->method = $request->method ();
                $log->input = $request->getContent ();
                $log->save ();

            } else {
                $fileName = 'api_datalogger_' . date ( 'd-m-y' ) . 'log';
                $dataLog = 'Time: ' . date ( 'Y-m-d H:i:s', time () ) . "\n";
                $dataLog .= 'Duration: ' . number_format ( $endTime - LARAVEL_START, 3 ) . "\n";
                $dataLog .= 'IP Address: ' . $request->ip () . "\n";
                $dataLog .= 'URL: ' . $request->fullUrl () . "\n";
                $dataLog .= 'Method: ' . $request->method () . "\n";
                $dataLog .= 'Input: ' . $request->getContent () . "\n";
                File::append ( storage_path ( 'logs' . DIRECTORY_SEPARATOR . $fileName ), $dataLog .
                    "\n" . str_repeat ( "=", 20 ) . "\n\n"
                );

            }
        }
    }
}
