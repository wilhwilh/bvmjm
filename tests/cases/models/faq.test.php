<?php
/* Faq Test cases generated on: 2013-02-04 00:55:19 : 1359955519*/
App::import('Model', 'Faq');

class FaqTestCase extends CakeTestCase {
	var $fixtures = array('app.faq');

	function startTest() {
		$this->Faq =& ClassRegistry::init('Faq');
	}

	function endTest() {
		unset($this->Faq);
		ClassRegistry::flush();
	}

}
