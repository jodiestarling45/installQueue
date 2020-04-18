<?php
class Queue{
    protected $queue;
    protected $limit;
    protected $count = 0 ;
    public function __construct($array,$limit = 20)
    {
        if (is_array($array)){
            $this->queue=$array;
        }else{
            $this->queue=[];
        }
        if (is_integer($limit)){
            $this->limit=$limit;
        }
    }
    public function enqueue($value){
        if (count($this->queue)<$this->limit){
            array_push($this->queue,$value);
            $this->count++;
        }else{
            $this->dequeue();
        }
    }
    public function dequeue(){
            array_shift($this->queue);
            $this->count--;
    }
    public function isEmpty(){
        return empty($this->queue);
    }
    public function __toString()
    {
        return implode(",",$this->queue);
        // TODO: Implement __toString() method.
    }
    public function displayQueueStatus (){
        if ($this->isEmpty()){
            die("there are nothing inside the data structure");
        }else{
            return "there are ".$this->count."data inside";
        }
    }
}
$queue = new Queue($array = [],5);
$queue->enqueue("hello");
$queue->enqueue("my name is jodie ");
$queue->enqueue("i am an programing website");
$queue->enqueue("nice to meet you");
$queue->enqueue("let start ");
$queue->enqueue("this will delete ");
$queue->enqueue("nice ");
$queue->enqueue("cool");
$queue->enqueue("hell yeah ");
var_dump($queue);

