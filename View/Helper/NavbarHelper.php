<?php
class NavbarHelper extends AppHelper
{
	public $brandName = 'Project Name';
	public $brandRedirection = '#';



	public function display() {
		$navbar = "<div class=\"navbar\">\n";
		$navbar .= "\t<div class=\"navbar-inner\">\n";
		$navbar .= "\t\t<div class=\"container\">\n";
		$navbar .= "\t\t\t<a class=\"brand\" href=\"$this->brandRedirection\">$this->brandName</a>\n";
		$navbar .= "\t\t</div>\n";
		$navbar .= "\t</div>\n";
		$navbar .= "</div>\n";

		echo $navbar;
	}
}

