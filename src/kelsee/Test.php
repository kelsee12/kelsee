<?php
namespace kelsee;
class Test
{
    public function kelsee(){
        return 'my name is 开浩通';
    }
    public function baobao(){
        $kelsee = $this->kelsee();
        echo $kelsee.', 邵长慧 is my 宝宝';
    }
}