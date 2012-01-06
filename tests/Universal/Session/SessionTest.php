<?php 

namespace Universal\Session;
use PHPUnit_Framework_TestCase;
use Exception;

class SessionTest extends PHPUnit_Framework_TestCase
{
    function testSession()
    {
        $session = new \Universal\Session\Session(array(  
            'state'   => new \Universal\Session\State\CookieState,
            'storage' => new \Universal\Session\Storage\MemcacheStorage,
        ));
        $counter = $session->get( 'counter' );
        $session->set( 'counter' , ++$counter );
        ok( $session->get( 'counter' ) );
    }
}

