<?php
namespace tg;

use LogicException;
use Nette\Object;

/**
 * Description of FluentString
 *
 * @author Tomas Grasl <grasl.t@centrum.cz>
 */
class FluentString extends Object {

    /** 
     * @var FluentStringContainer  
     */
    private static $_string;    
    
    /**
     * @throws LogicException
     */
    final public function __construct() {
        throw new LogicException("Cannot instantiate static class " . get_class($this));
    }

    /**
     * @param string $string
     * @return FluentStringContainer
     */
    public static function init($string) {
        return self::$_string = new FluentStringContainer($string);
    }
    
    /**
     * @return void
     */
    public function __toString() {
        if(isset(self::$_string)) {
            echo self::$_string->fetch();
        }
    }
}