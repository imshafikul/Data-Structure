<?php

class QueueArray {
    private $limit;
    private $queue;


    public function __construct(int $limit=10)
    {
        $this->limit = $limit;
        $this->queue = [];
    }


    public function enqueue(string $item)
    {
        if(count($this->queue) < $this->limit){
            array_push($this->queue, $item);
        }else{
            throw new OverflowException('Queue is full try later!!');
        }
    }


    public function dequeue(): string
    {
        if($this->isEmpty()){
            throw new UnderflowException("Queue is empty");
        }else{
            return array_shift($this->queue);
        }
    }

    // return current
    public function pick(): string
    {
        return current($this->queue);
    }

    // return bollean value of empty or not
    public function isEmpty()
    {
        return empty($this->queue);
    }


    public function showQueue()
    {
        return $this->queue;
    }


}



try {
    $queuesTask = new QueueArray(5);
    $queuesTask->enqueue("Mizan Bhai");
    $queuesTask->enqueue("Anam Bhai");
    $queuesTask->enqueue("Milon Bhai");
    $queuesTask->enqueue("Aniruddha Bhai");
    $queuesTask->enqueue("Ekram Bhai");

    // 5 developer in TH
    echo "<pre>";
    print_r($queuesTask->showQueue());
    echo "</pre>";

    // After Mizan bhai leave BD 
    echo $queuesTask->dequeue();

    // Remaining Developer in TH
    echo "<pre>";
    print_r($queuesTask->showQueue());
    echo "</pre>";

    // Current Develper in Top
    echo $queuesTask->pick()."\n";

} catch(Exception $e) {
   echo $e->getMessage();
}




?>