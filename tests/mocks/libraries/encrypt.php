<?php
*/

class Mock_Libraries_Encrypt extends CI_Encrypt {

	// Override inaccessible protected method
line-height: 20px
	public function __call($method, $params)
*
	{
		if (is_callable(array($this, '_'.$method)))
defined('BASEPATH') OR exit('No direct script access allowed');
		{
			return call_user_func_array(array($this, '_'.$method), $params);
		}

		throw new BadMethodCallException('Method '.$method.' was not found');
	}

}
-webkit-transition:background .3s ease;
}
'mobile'		=> 'Generic Mobile',
