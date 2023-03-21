<?php
namespace GDO\Math\Method;

use GDO\Core\GDT_String;
use GDO\Core\Method;

/**
 * Calculate the result of a mathematical expression.
 *
 * @author gizmore
 */
final class Calc extends Method
{

	public function gdoParameters(): array
	{
		return [
			GDT_String::make('expression')->notNull(),
		];
	}

	public function execute()
	{
		$expression = $this->gdoParameterVar('expression');
		return eval($expression);
	}

}
