<?php

/**
 * 
 * Buatlah program buble sort tanpa menggunakan temporary variable
 * 
 */
class BubbleSort
{
    private $array = [];

    public function __construct($array)
    {
        $this->array = $array;
    }

    public function changeValue($indexKecil, $valueKecil, $indexBesar, $valueBesar)
    {
        $this->array[$indexKecil] = $valueKecil;
        $this->array[$indexBesar] = $valueBesar;
    }
    public function sort()
    {
        for ($i = 1; $i < count($this->array); $i++) {
            for ($j = count($this->array) - 1; $j >= $i; $j--) {
                if ($this->array[$j] < $this->array[$j - 1]) {
                    self::changeValue($j, $this->array[$j - 1], $j - 1, $this->array[$j]);
                }
            }
        }

    }

    public function printArray()
    {
        return $this->array;
    }
}
/**
 * value array tipe numeric
 */
$arrayAcak = [10,8,9,4,57,75,43,23,4,2,34,13];

$array = new BubbleSort($arrayAcak);
$array->sort();
echo "<pre>";
print_r($array->printArray());
echo "</pre>";

?>