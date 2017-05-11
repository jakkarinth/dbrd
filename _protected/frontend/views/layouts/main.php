<?php
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => '<img src="images/rmutilogo.png" style="display:inline; vertical-align: top; height:26px;">  ระบบบริหารจัดการโครงการวิจัยและงานสร้างสรรค์',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);

            // everyone can see Home page
            $menuItems[] = ['label' => Yii::t('app', 'หน้าแรก'), 'url' => ['/site/index']];

            // we do not need to display Article/index, About and Contact pages to editor+ roles
            if (!Yii::$app->user->can('editor'))
            {
                //$menuItems[] = ['label' => Yii::t('app', 'บทคววม'), 'url' => ['/article/index']];
                $menuItems[] = ['label' => Yii::t('app', 'เกี่ยวกับเรา'), 'url' => ['/site/about']];
                $menuItems[] = ['label' => Yii::t('app', 'ติดต่อเรา'), 'url' => ['/site/contact']];
            }

            // display Article admin page to editor+ roles
            if (Yii::$app->user->can('editor'))
            {
                $menuItems[] = ['label' => Yii::t('app', 'บทความ'), 'url' => ['/article/admin']];
            }

            // display Signup and Login pages to guests of the site
            if (Yii::$app->user->isGuest)
            {
                $menuItems[] = ['label' => Yii::t('app', 'สมัครสมาชิก'), 'url' => ['/site/signup']];
                $menuItems[] = ['label' => Yii::t('app', 'เข้าสู่ระบบ'), 'url' => ['/site/login']];
            }
            // display Logout to all logged in users
            else
            {
                $menuItems[] = [
                    'label' => Yii::t('app', 'ออกจากระบบ'). ' (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left"><?= Yii::t('app', Yii::$app->name) ?>   &copy; <?= date('Y') ?> <a href="http://www.surin.rmuti.ac.th/research/">พัฒนาโดย แผนกงานวิจัยและพัฒนา</a></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
