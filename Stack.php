<?php

class TaskList
{
    protected $stack;
    protected $limit;

    public function __construct(int $limit = 10) {
        $this->stack = [];
        $this->limit = $limit;
    }

    // return currently available value in stack
    public function showStack(){
        return $this->stack;
    }


    public function push(string $item){
        if(count($this->stack) < $this->limit){
            // prepend item start of the array
            array_unshift($this->stack, $item);
        }else{
            throw new OverflowException("Stack is full");
        }
    }

    public function pop(): string{
        if($this->isEmpty()){
            throw new UnderflowException("Stack is empty!!");
        }else{
             // pop item from the start of the array
             return array_shift($this->stack);
        }
    }

    // return current index
    public function top(){
        return current($this->stack);
    }

    // Return stack empty or not
    public function isEmpty(){
        return empty($this->stack);
    }

}


$taskList = new TaskList();
$taskList->push("Make alarm for fazar Salah");
$taskList->push("Drink some water before sleep");
$taskList->push("Prepare next day todo list");
$taskList->push("Complete esha Salah");
$taskList->push("Call to my friend Anwar");

// All taks in my task list [Pushed ]
echo "<pre>";
print_r($taskList->showStack());
echo "</pre>";


// Marked two task as complete [Call to anwar & Esha salah task completed]
$taskList->pop();
$taskList->pop();

// Remaining task list after complete top two task
echo "<pre>";
print_r($taskList->showStack());
echo "</pre>";


// current task
echo $taskList->top();

?>