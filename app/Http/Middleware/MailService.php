<?php
namespace App\Http\Middleware;
use Closure;
use App;
class MailService
{
public function handle($request, Closure $next)
{
$app = App::getInstance();
$app->register('App\Providers\MailServiceProvider');
return $next($request);
}
}