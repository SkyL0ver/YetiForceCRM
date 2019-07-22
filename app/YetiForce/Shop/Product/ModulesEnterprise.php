<?php
/**
 * YetiForce shop ModulesEnterprise file.
 *
 * @package   App
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */

namespace App\YetiForce\Shop\Product;

/**
 * YetiForce shop ModulesEnterprise class.
 */
class ModulesEnterprise extends \App\YetiForce\Shop\AbstractBaseProduct
{
	/**
	 * {@inheritdoc}
	 */
	public $prices = [
		's' => 100,
		'm' => 200,
		'l' => 300,
		'xl' => 500,
	];
	/**
	 * {@inheritdoc}
	 */
	public $featured = true;

	/**
	 * {@inheritdoc}
	 */
	public function verify(): bool
	{
		return true;
	}
}