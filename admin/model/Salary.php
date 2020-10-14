<?php
namespace app\admin\model;
/**
* 工资模型层
*/
class Salary extends \think\Model
{
	protected $resultSetType = 'collection';

	public function teacher()
	/*工资与教师之间的多对一关系*/
	{
		return $this->belongsTo('Teacher');
	}


}
?>