<?php
namespace tg;

use Nette\Object;
use Nette\Utils\Strings;

/**
 * Description of FluentStringContainer
 *
 * @author Tomas Grasl <grasl.t@centrum.cz>
 */
class FluentStringContainer extends Object {
        
    /**
    * @var string 
    */
    private $_string;

    /**
     * @param string $string
     */
    public function __construct($string) {
        $this->_string = $string;
    }
    
    /**
     * Convert to lower case.
     * @return string
     */    
    public function lower() {
        $this->_string = Strings::lower($this->_string);
        return $this;
    }
    
    /**
     * Convert to upper case.
     * @return FluentStringContainer
     */    
    public function upper() {
        $this->_string = Strings::upper($this->_string);
        return $this;
    }

    /**
     * Convert first character to upper case.
     * @return FluentStringContainer
     */    
    public function firstUpper() {
        $this->_string = Strings::firstUpper($this->_string);
        return $this;
    }
    
    /**
     * Capitalize string.
     * @return FluentStringContainer
     */    
    public function capitalize() {
        $this->_string = Strings::capitalize($this->_string);
        return $this;
    }
    
    /**
     * Removes special controls characters and normalizes line endings and spaces.
     * @return FluentStringContainer
     */    
    public function normalize() {
        $this->_string = Strings::normalize($this->_string);
        return $this;
    }
            
    /**
     * Converts to web safe characters [a-z0-9-] text.
     * @param $charlist string allowed
     * @param $lower bool
     * @return FluentStringContainer
     */
    public function webalize($charlist = NULL, $lower = TRUE) {
        $this->_string = Strings::webalize($this->_string, $charlist, $lower);
        return $this;
    }
    
    /**
     * Converts to ASCII.
     * @return FluentStringContainer
     */
    public function toAscii() {
        $this->_string = Strings::toAscii($this->_string);
        return $this;
    }
    
    /**
     * Strips whitespace.
     * @param $charlist string
     * @return FluentStringContainer
     */    
    public function trim($charlist = NULL) {
        $this->_string = Strings::trim($this->_string, $charlist);
        return $this;
    }
    
    /**
     * Truncates string to maximal length.
     * @param $maxLen int
     * @param $append string UTF-8 encoding
     * @return FluentStringContainer
     */    
    public function truncate($maxLen, $append = "\xE2\x80\xA6") {
        $this->_string = Strings::truncate($this->_string, $maxLen, $append);
        return $this;
    }
    
    /**
     * Indents the content from the left.
     * @param $level int
     * @param $chars string
     * @return FluentStringContainer
     */    
    public function indent($level = 1, $chars = "\t") {
        $this->_string = Strings::indent($this->_string, $level, $chars);
        return $this;
    }
    
    /**
     * Pad a string to a certain length with another string.
     * @param $length int
     * @param $pad string
     * @return FluentStringContainer
     */    
    public function padLeft($length, $pad = ' ') {
        $this->_string = Strings::padLeft($this->_string, $length, $pad);
        return $this;
    }

    /**
     * Pad a string to a certain length with another string.
     * @param type $length
     * @param type $pad
     * @return FluentStringContainer
     */
    public function padRight($length, $pad = ' ') {
        $this->_string = Strings::padRight($this->_string, $length, $pad);
        return $this;
    }

    /**
     * Removes invalid code unit sequences from UTF-8 string.
     * @return FluentStringContainer
     */    
    public function fixEncoding() {
        $this->_string = Strings::fixEncoding($this->_string);
        return $this;
    }
    
    /**
     * @return string
     */
    public function fetch() {
        return $this->_string;
    }
}