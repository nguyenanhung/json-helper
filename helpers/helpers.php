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
    function jsonItem(string $json_string = '', string $item_output = '')
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
    function isJson(string $string = ''): bool
    {
        return nguyenanhung\Libraries\JSON\Json::isJson($string);
    }
}
if (!function_exists('get_json_item')) {
    /**
     * Function get_json_item
     *
     * @param string $json_string
     * @param string $item_output
     *
     * @return string|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/22/2021 51:28
     */
    function get_json_item(string $json_string = '', string $item_output = '')
    {
        return jsonItem($json_string, $item_output);
    }
}
if (!function_exists('is_json')) {
    /**
     * Function is_json
     *
     * @param string $string
     *
     * @return bool
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/22/2021 52:30
     */
    function is_json(string $string = ''): bool
    {
        return isJson($string);
    }
}
