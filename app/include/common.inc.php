<?php

function active_class($path) {
    return is_active_link($path) ? 'active' : '';
}

function is_active_link($path) {
    return get_path() == $path;
}

function get_path($new_path = NULL) {
    static $path = NULL;

    if (!empty($new_path)) {
        $path = $new_path;
    }

    return $path;
}

/**
 * @param string $key Key to look for in $_GET array
 * @return null
 */
function try_get($key) {
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }
    return NULL;
}

/**
 * Main entry point to "system"
 */
function go() {
    // path is set in .htaccess if we get a 404
    get_path(try_get('p'));

    $parts = parse_url($_SERVER['REQUEST_URI']);
    if (array_key_exists('query', $parts))
        parse_str($parts['query'], $variables);
    $variables['appBrand'] = 'SMS';
    $index = 0;
    do_path_handler(get_path(), $variables, $index);
}

/**
 * (Eventually) gracefully exit
 */
function do_exit() {
    exit;
}

/**
 * Retrieve all defined routes. This can call "alter_routes" if it's defined later on.
 * @return array
 */
function get_routes() {
    $routes = array(
        null => 'handle_default_route',
    );

    if (function_exists("alter_routes")) {
        alter_routes($routes);
    }

    return $routes;
}

/**
 * @param string $path the url path to handle
 * @param array $variables Dictionary of variables to expose to template file as "global" scope
 */
function do_path_handler($path, $variables, $index) {

    $routes = get_routes();


    if (isset($routes[$path])) {
        $handler = $routes[$path];

        if (function_exists($handler)) {

            $handler($variables);
        }
    } else {

        // try reentering with last part of path as variable
        $parts = explode("/", $path);
        $lastpart = array_pop($parts);
        $new_path = implode($parts);
        if (isset($lastpart) && !empty($new_path)) {
            $variables['param.' . $index] = $lastpart;
            // set new path
            get_path($new_path);
            // recurse
            do_path_handler(get_path(), $variables, $index++);
        } else {
            handle_default_route($variables);
            do_exit();
        }
    }
}

/**
 * @param string $what Type of template to be rendered, corresponds to a directory
 * @param string $name Template file to be rendered
 * @param array $variables Dictionary of variables to expose to template file as "global" scope
 * @return string The rendered template
 */
function render_template($what, $name, $variables = array()) {
    $handler = "preprocess_" . $what . '_' . $name;

    if (function_exists($handler)) {
        $handler($variables);
    }
    extract($variables);

    ob_start();
    include($what . '/' . $name . '.tpl.php');
    return ob_get_clean();
}
