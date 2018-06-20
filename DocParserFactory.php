<?php
	/**
	 * Created by PhpStorm.
	 * User: mybook-lhp
	 * Date: 18/5/15
	 * Time: 下午4:27
	 */

	namespace app\common\utils\ApiDoc;

	/**
	 * Class DocParserFactory 解析doc
	 *
	 * @example
	 *      DocParserFactory::getInstance()->parse($doc);
	 */
	class DocParserFactory
	{

		private static $p;

		private function DocParserFactory()
		{
		}

		public static function getInstance()
		{
			if (self::$p == null)
			{
				self::$p = new DocParser ();
			}
			return self::$p;
		}


		/**
		 * 解析doc
		 * 下面的DocParserFactory是对其的进一步封装，每次解析时，可以减少初始化DocParser的次数
		 *
		 * @param $php_doc_comment
		 * @return array
		 */
		function parse_doc($php_doc_comment)
		{
			$p = new DocParser();
			return $p->parse($php_doc_comment);
		}

	}