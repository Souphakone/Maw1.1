<?php

namespace Router;

class Route
{

    public $path;
    public $action;
    public $matches;

    /**
     * Instancie the path and the action 
     * 
     */

    public function __construct($path, $action)
    {
        $this->path = trim($path, '/');
        $this->action = $action;
    }

    /**
     * Check if the route validates the URL
     * 
     */
    public function matches(string $url)
    {
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $pathToMatch = "#^$path$#";

        return (preg_match($pathToMatch, $url, $matches));
    }

    /**
     * Call the right controller and method
     * 
     */

    public function execute()
    {
        $params = explode('@', $this->action);
        $controller = new $params[0]();
        $method = $params[1];

        return isset($this->matches[1]) ? $controller->$method($this->matches[1]) : $controller->$method();
    }
}
