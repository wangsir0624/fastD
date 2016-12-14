<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace Http\Controller;

use FastD\Http\JsonResponse;
use FastD\Http\ServerRequest;
use FastD\Middleware\Delegate;

class IndexController
{
    /**
     * @param ServerRequest $request
     * @param Delegate $delegate
     * @return \FastD\Http\JsonResponse
     */
    public function welcomeAction(ServerRequest $request, Delegate $delegate)
    {
        return json([
            'foo' => 'bar'
        ]);
    }

    /**
     * @param ServerRequest $request
     * @param Delegate $delegate
     * @return JsonResponse
     */
    public function sayHelloAction(ServerRequest $request, Delegate $delegate)
    {
        return json([
            'foo' => $request->getAttribute('name'),
        ]);
    }
}