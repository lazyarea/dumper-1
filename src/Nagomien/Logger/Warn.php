<?php
namespace Nagomien\Logger;

class Warn
{
    private $fpath;
    public function __construct($fpath='/tmp/dumper.log')
    {
      $this->fpath = ($fpath) ? $fpath : '/tmp/dumper.log';
    }

    public function dumper($str='',$data=[]){
        $dt = date('Y-m-d G:i:s');
        // logging timestamp
        error_log(print_r("\n[$dt] ",true),3,$this->fpath);
        // logging string part
        if ( !(string)$str ){
            error_log("[param0 is not string] []",3,$this->fpath);
            return;
        }
        error_log("[$str] [",3,$this->fpath);
        // logging data part
        if ( gettype($data) == 'string' ){
            error_log("[$data]",3,$this->fpath);
        }
        elseif ( is_array($data) ) {
          error_log(print_r($data,true),3,$this->fpath);
        }
        else{
          error_log(print_r($data,true),3,$this->fpath);
        }
        error_log("]",3,$this->fpath);
    }
}
