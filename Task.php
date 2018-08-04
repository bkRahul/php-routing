<?php

class Task {

	public $description;

	public $completed;

	public function complete() {
		$this->completed = true;
	}
}

?>