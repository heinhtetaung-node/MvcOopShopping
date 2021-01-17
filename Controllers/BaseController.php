<?php

namespace Controllers;

use Jenssegers\Blade\Blade;

class BaseController {

	protected $admin_baseurl = '/MvcOopShopping/admin/';

	protected $baseurl = '/MvcOopShopping/';

	public function renderBlade($blade_file, $data = []) {
		$blade = new Blade('views', 'cache');

		echo $blade->render($blade_file, array_merge($data, ['baseurl' => $this->admin_baseurl]) );
	}

}