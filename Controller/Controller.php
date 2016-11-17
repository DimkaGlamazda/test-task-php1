<?php

class Controller
{

    /**
     * prepares data to db
     *
     * @param string $string
     * @return string
     */
    public function clean($string = "")
    {
        $string = trim($string);
        $string = stripslashes($string);
        $string = strip_tags($string);
        $string = htmlspecialchars($string);

        return $string;
    }

    /**
     * checks data length
     *
     * @param string $string
     * @param $min
     * @param $max
     * @return bool
     */
    public function checkLength($string = "", $min, $max)
    {
        $result = (mb_strlen($string) < $min || mb_strlen($string) > $max);
        return !$result;
    }

}

?>