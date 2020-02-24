<?php
class MyLogger {
	public function warning($message) {
		echo 'WARNING: ' . $message . PHP_EOL;
	}	
	
	public function error($message) {
		echo 'ERROR: ' . $message . PHP_EOL;
	}

	public function debug($message) {
		echo 'DEBUG: ' . $message . PHP_EOL;
	}	
	
	public function info($message) {
		echo 'INFO: ' . $message . PHP_EOL;
	}

	public function log($message, $loglevel = "") {
		switch ($loglevel) {
			case 'warning':
				$this->warning($message);
				break;
			case 'error':
				$this->error($message);
				break;
			case 'debug':
				$this->debug($message);
				break;
			case 'info':
				$this->info($message);
				break;
			default:
				echo $message;
		}
	}
}

$logger = new MyLogger();
$logger->error('dit is een error'); // Result: 'ERROR: dit is een error'
$logger->log('hello world', 'INFO'); // Result: 'INFO: hello world'
?>
