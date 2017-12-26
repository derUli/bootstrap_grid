<?php
class BootstrapGridController extends Controller {
	private $moduleName = "bootstrap_grid";
	public function contentFilter($html) {
		return $this->processBootstrapTags ( $html );
	}
	public function processBootstrapTags($html) {
		$html = str_ireplace ( "[container]", '<div class="container">', $html );
		$html = str_ireplace ( "[container-fluid]", '<div class="container-fluid">', $html );
		$html = str_ireplace ( "[row]", '<div class="row">', $html );
		$colTags = array (
				"col-xs-",
				"col-sm-",
				"col-md-",
				"col-lg-" 
		);
		foreach ( $colTags as $tag ) {
			for($i = 1; $i <= 12; $i ++) {
				$html = str_ireplace ( "[" . $tag . $i . "]", '<div class="' . $tag . $i . '">', $html );
			}
		}
		
		$closingTags = array (
				"[/container]",
				"[/container-fluid]",
				"[/row]",
				"[/col]" 
		);
		foreach ( $closingTags as $tag ) {
			$html = str_ireplace ( $tag, "</div>", $html );
		}
		return $html;
	}
}