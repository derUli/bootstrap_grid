<?php
class BootstrapGridTest extends PHPUnit_Framework_TestCase {
	public function testProcessBootstrapTags() {
		$controller = ModuleHelper::getMainController ( "bootstrap_grid" );
		$this->assertNotNull ( $controller );
		$input = "[container][row][col-xs-3]Colum Content[/col][col-xs-7]Colum Content[/col][col-xs-2]Colum Content[/col][/row][/container]";
		$expectedOutput = '<div class="container"><div class="row"><div class="col-xs-3">Colum Content</div><div class="col-xs-7">Colum Content</div><div class="col-xs-2">Colum Content</div></div></div>';
		$this->assertEquals ( $expectedOutput, $controller->processBootstrapTags ( $input ) );
	}
}