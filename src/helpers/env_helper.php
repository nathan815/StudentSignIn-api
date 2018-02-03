<?php

/**
 * Returns an environment variable, or default value if not set
 * @param  string   $key      Key of the environment variable
 * @param  boolean  $default  Default value if key is not set
 * @return                    The env variable value
 */
function env($key, $default = false) {
    return getenv($key) ? getenv($key) : $default;
}