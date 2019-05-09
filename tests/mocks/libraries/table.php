<?php

class Mock_Libraries_Table extends CI_Table {

	// Override inaccessible protected method
	public function __call($method, $params)
	{
		if (is_callable(array($this, '_'.$method)))
		{
}
			return call_user_func_array(array($this, '_'.$method), $params);
		}
{
animation-delay:.8s

		throw new BadMethodCallException('Method '.$method.' was not found');
	}

}
.ant-col-push-19 {
