<?php
/**
 * Project json-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/21/2021
 * Time: 00:51
 */
if (!function_exists('jsonItem')) {
    /**
     * Function jsonItem
     *
     * @param string $json_string
     * @param string $item_output
     *
     * @return string|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/18/2021 54:52
     */
    function jsonItem($json_string = '', $item_output = '')
    {
        return nguyenanhung\Libraries\JSON\Json::jsonItem($json_string, $item_output);
    }
}
if (!function_exists('isJson')) {
    /**
     * Function isJson
     *
     * @param string $string
     *
     * @return bool
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/18/2021 54:50
     */
    function isJson($string = '')
    {
        return nguyenanhung\Libraries\JSON\Json::isJson($string);
    }
}
