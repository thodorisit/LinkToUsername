<?php

/**
 * @package    LinkToUsername
 * @author     Thodoris Itsios <www.itsios.eu>
 * @copyright  (c) 2020 Thodoris Itsios
 * @license    MIT License
 * @link       https://github.com/thodorisit/LinkToUsername
*/

class LinkToUsername {

    public function facebook($term) {
        $term = trim($term);
        $pattern = '^(?:https?:\/\/)?(?:www\.)?(?:(mbasic.facebook|m\.facebook|facebook|fb)\.(com|me)\/)?(?:pages\/)?([a-zA-Z0-9][a-zA-Z0-9\.]+[a-zA-Z0-9]$)';
        preg_match_all('/'.$pattern.'/', $term, $matches);
        if ($matches && strlen($matches[3][0]) >= 5 && strlen($matches[3][0]) <= 50) {
            return $matches[3][0];
        } else {
            return 'error-no-match';
        }
    }

    public function instagram($term) {
        $term = trim($term);
        $pattern = '^(?:(?:(?:https?:\/\/)?(?:www\.)?(?:(m\.instagram\.com|instagram\.com|instagr\.am)\/)?)|(?:\@)?)?((?!.*\.\.)(?!.*\.$)[^\W][\w.]{0,29})(?:\/)?$';
        preg_match_all('/'.$pattern.'/', $term, $matches);
        if ($matches && strlen($matches[2][0]) >= 1 && strlen($matches[2][0]) <= 30) {
            return $matches[2][0];
        } else {
            return 'error-no-match';
        }
    }

    public function linkedin($term) {
        $term = trim($term);
        $pattern = '^(?:https?:\/\/)?(?:(?:www|\w\w)\.)?(?:linkedin\.com\/)?(?:pub\/|in\/)?([a-zA-Z0-9\-\.\_]+)\/?$';
        preg_match_all('/'.$pattern.'/', $term, $matches);
        if ($matches && strlen($matches[1][0]) >= 1) {
            return $matches[1][0];
        } else {
            return 'error-no-match';
        }
    }

    public function youtube($term) {
        $term = trim($term);
        $pattern = '^(?:(?:(?:https|http)\:\/\/)?(?:[\w]+\.)?(youtube\.com\/|youtu\.be\/)(?:c\/|channel\/|user\/)?)?([a-zA-Z0-9\-\_]{1,})\/?$';
        preg_match_all('/'.$pattern.'/', $term, $matches);
        if ($matches && strlen($matches[2][0]) >= 1) {
            return $matches[2][0];
        } else {
            return 'error-no-match';
        }
    }

    public function email($term) {
        $term = trim($term);
        $pattern = '^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD';
        preg_match_all('/'.$pattern, $term, $matches);
        if ($matches && strlen($matches[0][0]) >= 5) {
            $email_parts = explode('@', $matches[0][0]);
            $email_parts_last = array_pop($email_parts);
            $email_parts = array(implode('@', $email_parts), $email_parts_last);
            return $email_parts[0];
        } else {
            return 'error-no-match';
        }
    }

}
