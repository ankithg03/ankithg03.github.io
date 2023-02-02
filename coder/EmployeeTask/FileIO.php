<?php
Class FileIO{
    /**
     * @var String $data
     * 
     */
    private $data; 
    /**
     * @param $fileName
     * @return false if File!Exist
     * @return File Data $str
     */
    public function FileRead($fileName){
        $fh=fopen($fileName,"r");
        if($fh==false){
            fclose($fh);
            return false;
        }
       $str= file_get_contents($fileName);
        fclose($fh);
       // echo $str;
        return $str;
    }
    /**
     * @param String $fileName
     * @param String $data
     * @return $fileData
     */
    public function FileWrite($fileName,$data){
        $fh=fopen($fileName,"w");
        $this->data=fwrite($fh,$data);
        fclose($fh);
        return $this->data;
    }

}