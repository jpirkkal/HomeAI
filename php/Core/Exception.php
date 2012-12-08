<?php
/**
 * \php\Core\Exception.php
 *
 * @package     HomeAI
 * @subpackage  Core
 * @category    Exception
 */
namespace HomeAI\Core;

defined('HOMEAI_INIT') OR die('No direct access allowed.');
/**
 * Exception -class
 *
 * Generic exception class for HomeAI -software. All Exception classes
 * must extend this class.
 *
 * Note that this class will write all errors to syslog
 *
 * @package     HomeAI
 * @subpackage  Core
 * @category    Session
 *
 * @date        $Date$
 * @author      $Author$
 * @revision    $Rev$
 */
class Exception extends \Exception
{
    /**
     * Construction of main exception class.
     *
     * @param   string      $message    Exception message
     * @param   integer     $code       Error code
     * @param   \Exception  $previous   Previous exception
     *
     * @return  \Exception
     */
    public function __construct($message = "", $code = 0, \Exception $previous = null)
    {
        Logger::write(Logger::TYPE_EXCEPTION, $this);

        parent::__construct($message, $code, $previous);
    }
}
