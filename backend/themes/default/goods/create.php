<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/18 20:28
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use hongyukeji\imperavi\Widget;

$this->title = Yii::t('common', 'Create') . Yii::t('common','Goods');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common','Goods') . Yii::t('common','List'),'url' => ['goods/index']];
$this->params['breadcrumbs'][] = $this->title;

$fieldOptions = [
    'options' => ['class' => 'form-group has-feedback'],
    'labelOptions' => ['class' => 'control-label col-sm-1'],
    'template' => "{label}<div class=\"col-sm-11\">{input}</div>\n<div class=\"col-sm-1\"></div><div class=\"col-sm-11\">{hint}\n{error}</div>",
];

?>
<div class="goods-create">
    <div class="body-content">
        <div class="row">
            <div class="col-md-12">
                <?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal']]); ?>
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><?= Yii::t('common', 'Basic').Yii::t('common', 'Info') ?></a></li>
                        <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">详细描述</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="box-body">

                                <?= $form->field($model, 'goodsName', $fieldOptions) ?>

                            </div>

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <div class="box-body">
                                <?= $form->field($model, 'goodsIntroduce', $fieldOptions)->widget(Widget::className(), [
                                    'settings' => [
                                        'lang' => 'zh_cn',
                                        'minHeight' => 200,
                                        'plugins' => [
                                            'clips',
                                            'fullscreen'
                                        ]
                                    ]
                                ]) ?>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="box-body">
                            <div class="form-group">
                                <label class="control-label col-sm-1"></label>
                                <div class="col-sm-11">
                                    <?= Html::submitButton(Yii::t('common', 'Submit'), ['class' => 'btn btn-primary']) ?>
                                    <?= Html::a(Yii::t('common', 'Return'), ['goods/index'], ['class' => 'btn btn-default']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div><!-- setting-index -->
