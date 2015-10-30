<?php

/**
 * @file
 * CardholderCard class.
 */

namespace Cardcom\Telnet;

require_once __DIR__ . '/../vendor/autoload.php';

class AsyncTelnetClient extends \Bestnetwork\Telnet\TelnetClient {

    /**
     * Executes command without waiting for the response.
     * This method is a wrapper for lower level private methods
     *
     * @param string $command
     *   Command to execute
     * @param string $prompt
     *   Ignored. Included for compatibility.
     * @param string $err_prompt
     *   Ignored. Included for compatibility.
     * @return NULL
     */
    public function execute( $command, $prompt = NULL, $err_prompt = NULL ){
        $this->write($command);
    }
}
