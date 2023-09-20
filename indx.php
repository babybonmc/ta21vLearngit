<?php

class ConsoleLogger {
    public function log($message){
        echo $message . "\n";
    }
}

class NothingLogger implements Logger {
    public function log($message) {
        
    }

}

interface Logger {
    public function log($message);
}

class Task {
    public function job(Logger $logger){
        for($i=0; $i<10; $i++){            
            $logger->log($i);
        }
    }
}

$task = new Task();
$logger = new ConsoleLogger ();
$task->job($logger);