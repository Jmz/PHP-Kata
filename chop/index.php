<?php require_once('../vendor/autoload.php');

class Chopper {

    protected $currentItem = 0;

    /**
     * Use PHP array functions.
     *
     * @param       $value
     * @param array $array
     * @return int|mixed
     */
    public function chopPhpFunctions($value, array $array)
    {
        if (in_array($value, $array)) {
            return array_search($value, $array);
        }

        return -1;
    }

    /**
     * Looping through the array.
     *
     * @param       $value
     * @param array $array
     * @return int|string
     */
    public function chopIterative($value, array $array)
    {
        foreach($array as $key => $item) {
            if ($value == $item) {
                return $key;
            }
        }

        return -1;
    }

    /**
     * Use array_shift recursively until the array is empty.
     *
     * @param       $value
     * @param array $array
     * @return int
     */
    public function chopShift($value, array $array)
    {
        $item = array_shift($array);
        if ($item) {
            if ($item == $value) {
                $return = $this->currentItem;
                $this->currentItem = 0;
                return $return;
            }
            $this->currentItem++;
            return $this->chopShift($value, $array);
        }

        $this->currentItem = 0;
        return -1;
    }

}

include('tests.php');