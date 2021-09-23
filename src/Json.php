<?php
/**
 * Project json-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/21/2021
 * Time: 00:52
 */

namespace nguyenanhung\Libraries\JSON;

use Laminas\Json\Json as BaseJson;

/**
 * Class Json
 *
 * @package   nguyenanhung\Libraries\JSON
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Json extends BaseJson
{
    /**
     * Function jsonItem
     *
     * @param string $json_string
     * @param string $item_output
     *
     * @return null|string
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 9/29/18 11:08
     *
     */
    public static function jsonItem(string $json_string = '', string $item_output = '')
    {
        $result      = json_decode(trim($json_string), true);
        $item_output = trim($item_output);
        if (($result !== null) && isset($result[$item_output])) {
            return trim($result[$item_output]);
        }

        return null;
    }

    /**
     * Function isJson
     *
     * @param string $json
     *
     * @return bool TRUE or FALSE
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/13/18 09:39
     *
     */
    public static function isJson(string $json = ''): bool
    {
        $decode = json_decode(trim($json), true);

        return !($decode === null);
    }
}
