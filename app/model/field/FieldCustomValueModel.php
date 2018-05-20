<?php
namespace main\app\model\field;
use main\app\model\CacheModel;
/**
 *  自定义字段的数据表模型
 *
 */
class FieldCustomValueModel extends CacheModel
{
	public $prefix = 'field_';

	public  $table = 'custom_value';
	
	const   DATA_KEY = 'field_custom_value/';

    public $fields = '*';

    /**
     * 用于实现单例模式
     * @var self
     */
    protected static $instance;

    /**
     * 创建一个自身的单例对象
     * @param bool $persistent
     * @throws PDOException
     * @return self
     */
    public static function getInstance( $persistent=false )
    {
        if( !isset(self::$instance[intval($persistent)] ) || !is_object( self::$instance[intval($persistent)]) ) {

            self::$instance[intval($persistent)]  = new self( $persistent );
        }
        return self::$instance[intval($persistent)] ;
    }

}