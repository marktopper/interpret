<?php namespace Cartalyst\Interpret\Content;
/**
 * Part of the Interpret package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Cartalyst PSL License.
 *
 * This source file is subject to the Cartalyst PSL License that is
 * bundled with this package in the license.txt file.
 *
 * @package    Interpret
 * @version    1.0.1
 * @author     Cartalyst LLC
 * @license    Cartalyst PSL
 * @copyright  (c) 2011-2014, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Michelf\Markdown;

class MarkdownContent extends Content implements ContentInterface {

	/**
	 * Returns the HTML equivilent of the content.
	 *
	 * @return string
	 */
	public function toHtml()
	{
		return $this->createParser()->defaultTransform($this->getValue());
	}

	/**
	 * Creates a new Markdown Parser instance.
	 *
	 * @return Michelf\Markdown
	 */
	public function createParser()
	{
		return new Markdown;
	}

}