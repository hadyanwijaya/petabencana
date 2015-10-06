<?php
/**
 * Enumeration of possible resource CLASS values
 *
 * PHP version 5.4
 *
 * @category LibDNS
 * @package Records
 * @author Chris Wright <https://github.com/DaveRandom>
 * @copyright Copyright (c) Chris Wright <https://github.com/DaveRandom>
 * @license http://www.opensource.org/licenses/mit-license.html MIT License
 * @version 2.0.0
 */
namespace LibDNS\Records;

use \LibDNS\Enumeration;

/**
 * Enumeration of possible resource CLASS values
 *
 * @category LibDNS
 * @package Records
 * @author Chris Wright <https://github.com/DaveRandom>
 */
class ResourceClasses extends Enumeration
{
    const IN = 1;
    const CS = 2;
    const CH = 3;
    const HS = 4;
}