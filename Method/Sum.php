<?php
namespace GDO\Math\Method;

use GDO\CLI\MethodCLI;
use GDO\Core\GDT;
use GDO\Core\GDT_Decimal;
use GDO\Core\GDT_String;
use GDO\Form\GDT_AntiCSRF;
use GDO\Form\GDT_Form;
use GDO\Form\GDT_Submit;
use GDO\UI\GDT_Repeat;

/**
 * Build a sum from a sequence of numbers.
 * This is merely a testing function :)
 *
 * @author gizmore
 */
final class Sum extends MethodCLI
{

	public function createForm(GDT_Form $form): void
	{
		$form->addFields(
			GDT_Repeat::makeAs('num', GDT_Decimal::make()),
			GDT_AntiCSRF::make(),
		);
		$form->actions()->addField(GDT_Submit::make());
	}

	public function formValidated(GDT_Form $form): GDT
	{
		$sum = 0;
		foreach ($this->gdoParameterValue('num') as $num)
		{
			$sum += $num;
		}
		return GDT_String::make()->var($sum);
	}

}
