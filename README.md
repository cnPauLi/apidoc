# apidoc
##使用方法如下
    /**
		 * 获取所有列表
		 * api GET api.php/index/index/all
		 * @param integer $page 页数
		 * @param integer $limit 每页个数
		 * @return integer $code 状态码
		 * @return string $msg 返回消息
		 * @return array $void 结果!!!
		 *
		 * // 地址中新增两个占位符写法
		 * // api.php/index/{controller}/{method}
		 * // {method} 会自动换成对应的方法名
		 * // {controller} 会自动换成文件名(大驼峰会转成匈牙利)。
		 * //--------------------------------
		 * // 默认是文件名和方法名都开启大驼峰转换
		 * // 文件名是大写字母出现1次以及以上就转换
		 * // 方法名是大写字母出现2次以及以上就转换
		 * // 可以通过下面方法去改变,参数1是文件名,参数2是方法名
		 * // $doc->setChange(true,true);
		 * // $doc->setTime(1,2);
		 */
		public function index()
		{
			$API_FILES_PATH_ARRAY = [
				'app\\flea\\api\\Flea',
				'app\\flea\\api\\Fleacart',
				'app\\flea\\api\\Fleacategory',
				'app\\flea\\api\\Fleagoods',
				'app\\flea\\api\\Fleapay',
				'app\\flea\\api\\Shareimg',
				'app\\flea\\api\\Fleaaddress',
				'app\\flea\\api\\Fleasharechain',
				'app\\flea\\api\\Fleabindingshops',
				'app\\flea\\api\\Fleaslide',
				'app\\flea\\api\\Fleareport',
				'app\\flea\\api\\Felawallet',
				'app\\flea\\api\\Flearichtext',
				'app\\paygateway\\api\\Wallet',
			];
			$doc = new ApiDoc($API_FILES_PATH_ARRAY);
			$doc->setName(RUNTIME_PATH . 'api');
			echo $doc->make(true);
		}
