<?php
class DataStorage
{
    private $dataFolder;

    public function __construct()
    {
        $this->dataFolder = dirname(__DIR__) . '/data/';
        if (!file_exists($this->dataFolder)) {
            mkdir($this->dataFolder, 0777, true);
        }
    }

    public function saveData($filename, $data)
    {
        $filepath = $this->dataFolder . $filename . '.json';
        file_put_contents($filepath, json_encode($data, JSON_PRETTY_PRINT));
    }


    public function loadData($filename)
    {
        $filepath = $this->dataFolder . $filename . '.json';

        if (file_exists($filepath)) {
            $data = file_get_contents($filepath);
            $decodedData = json_decode($data, true);

            if (json_last_error() === JSON_ERROR_NONE && !empty($decodedData)) {
                return $decodedData;
            } else {
                return [];
            }
        }

        return [];
    }
}
?>