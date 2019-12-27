<?php
/**
 * @author José López Chávez <ayroz.jlc@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2-actionColumn
 */
namespace ayrozjlc\adminlte3\widgets;

use Yii;
use yii\helpers\Html;

/**
 * Datatables Yii2 widget
 */
class ActionColumn extends \yii\grid\ActionColumn
{
	protected $title;
    public function init()
    {
        parent::init();
        $this->buttons = [
            'view' => function ($url, $model)
            {
                $this->title = Yii::t('yii', 'View');
                return $this->renderIcon('far fa-eye', $url);
            },
            'update' => function ($url, $model)
            {
                $this->title = Yii::t('yii', 'Update');
                return $this->renderIcon('fas fa-pencil-alt', $url);
            },
            'delete' => function ($url, $model)
            {
                $this->title = Yii::t('yii', 'Delete');
	            return $this->renderIcon('fas fa-trash', $url, [
	            'data-confirm' => \Yii::t('yii', 'Are you sure you want to delete this item?'),
		            'data-method' => 'post',
		        ]);
            }
        ];
    }

    public function renderIcon($icon, $url, $options = [])
    {
    	$options = array_merge([
    		'data-toggle' => 'tooltip',
    		'data-title' => $this->title,
    		'data-pjax' => '0'
    	], $options);

    	return Html::a('<i class="'.$icon.'"></i>',$url, $options);
    }
}
