<?php
namespace GDO\Math;

use GDO\Core\GDO_Module;

/**
 * Math evaluator module.
 * 
 * @author gizmore
 * @version 7.0.1
 * @since 7.0.0
 */
final class Module_Math extends GDO_Module
{
	public int $priority = 20;
	
	public function checkSystemDependencies() : bool
	{
		if (!function_exists('bcadd'))
		{
			return $this->errorSystemDependency('err_php_extension_missing', ['bcmath']);
		}
		return true;
	}
	
}
