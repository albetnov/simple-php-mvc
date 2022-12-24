<?php

namespace Albet\Asmvc\Core;

class Requests
{
    /**
     * Get an input field value
     * @param string $field
     * @param bool $escape
     * @return string|array
     */
    public function input(string $field, bool $escape = true): string|bool|array
    {
        if ($field == '*') {
            return $_POST;
        }

        if (!isset($_POST[$field])) {
            return false;
        }

        if (!$escape) {
            $check = $_POST[$field];
        } else {
            $check = htmlspecialchars($_POST[$field]);
        }
        if (isset($check)) {
            return $check;
        } else {
            return false;
        }
    }

    /**
     * Get user's current URL
     * @return string
     */
    public function currentURL(): string
    {
        return get_http_protocol() . '://' . base_url() . $_SERVER['REQUEST_URI'];
    }

    /**
     * Get form file uploads
     * @param string $name
     * @return mixed
     */
    public function upload(string $name): mixed
    {
        if (isset($_FILES[$name])) {
            return $_FILES[$name];
        } else {
            return null;
        }
    }

    /**
     * Get url query parameter values
     * @param string $name
     * @return string
     */
    public function query(string $name): ?string
    {
        if (isset($_GET[$name])) {
            return htmlspecialchars($_GET[$name]);
        } else {
            return null;
        }
    }
}
