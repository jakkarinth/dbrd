<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username?> <a href="#"><i class="fa fa-circle text-success"></i> Online</a><p>
                <p><?php echo Yii::$app->formatter->asDate(time());?></p>
                
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'เมนูหลัก', 'options' => ['class' => 'header']],
                    ['label' => 'จัดการสิทธิ์ User', 'icon' => 'glyphicon glyphicon-user', 'url' => ['user/index']],
                    ['label' => 'จัดการข้อมูลนักวิจัย', 'icon' => 'glyphicon glyphicon-registration-mark', 'url' => ['rs-info/index']],
                    ['label' => 'จัดการข้อมูลโครงการวิจัย', 'icon' => 'glyphicon glyphicon-book', 'url' => ['rs-research/index']],
                    ['label' => 'จัดการข้อมูลข้อเสนอโครงการ', 'icon' => 'glyphicon glyphicon-tags', 'url' => ['rs-proposal/index']],
                    ['label' => 'จัดการข้อมูลการตีพิมพ์', 'icon' => 'glyphicon glyphicon-print', 'url' => ['/index']],
                    ['label' => 'จัดการข้อมูลสิ่งประดิษฐ์', 'icon' => 'glyphicon glyphicon-wrench', 'url' => ['/index']],
                    ['label' => 'จัดการ Copyright', 'icon' => 'glyphicon glyphicon-copyright-mark', 'url' => ['/index']],
                    /* 
                    //Drop Down Manu
                    ['label' => 'จัดการข้อมูลนักวิจัย',
                                'icon' => 'glyphicon glyphicon-registration-mark',
                                'url' => ['rs-info/index'],
                                'items' => [
                                    ['label' => 'เพิ่มข้อมูลนักวิจัย', 'icon' => 'glyphicon glyphicon-plus', 'url' => ['rs-info/index']],
                                    ['label' => 'ค้นหานักวิจัย', 'icon' => 'glyphicon glyphicon-search', 'url' => ['#']],
                                    ['label' => 'แก้ไขข้อมูลนักวิจัย', 'icon' => 'glyphicon glyphicon-pencil', 'url' => ['#']],
                                    ['label' => 'ลบข้อมูลนักวิจัย', 'icon' => 'glyphicon glyphicon-minus', 'url' => ['#']],
                       ],
                    ],
                    //////////////////////////
                   ['label' => 'จัดการข้อมูลโครงการวิจัย',
                                'icon' => 'glyphicon glyphicon-book',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'เพิ่มโครงการวิจัย', 'icon' => 'fa fa-circle-o', 'url' => ['rs-research/index']],
                                    ['label' => 'ค้นหาโครงการวิจัย', 'icon' => 'fa fa-circle-o', 'url' => ['#']],
                                    ['label' => 'แก้ไขข้อมูลโครงการวิจัย', 'icon' => 'fa fa-circle-o', 'url' => ['#']],
                                    ['label' => 'ลบข้อมูลโครงการวิจัย', 'icon' => 'fa fa-circle-o', 'url' => ['#']],
                       ],
                    ],
                    //////////////////////////
                    ['label' => 'จัดการข้อมูล Proposal',
                                'icon' => 'glyphicon glyphicon-tags',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'เพิ่มข้อมูล Proposal', 'icon' => 'fa fa-circle-o', 'url' => ['rs-proposal/index']],
                                    ['label' => 'ค้นหา Proposal', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'แก้ไข Proposal', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'ลบ Proposal', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                       ],
                    ],
                    //////////////////////////
                    ['label' => 'จัดการข้อมูลการตีพิมพ์',
                                'icon' => 'glyphicon glyphicon-print',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'เพิ่มข้อมูลการตีพิมพ์', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'ค้นหาการตีพิมพ์', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'แก้ไขข้อมูลการตีพิมพ์', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'ลบข้อมูลการตีพิมพ์', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                       ],
                    ],
                    //////////////////////////
                    ['label' => 'จัดการข้อมูลสิ่งประดิษฐ์',
                                'icon' => 'glyphicon glyphicon-wrench',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'เพิ่มข้อมูลการตีพิมพ์', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'ค้นหาการตีพิมพ์', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'แก้ไขข้อมูลการตีพิมพ์', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'ลบข้อมูลการตีพิมพ์', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                       ],
                    ],
                    //////////////////////////
                    ['label' => 'จัดการ Copyright',
                                'icon' => 'glyphicon glyphicon-copyright-mark',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'เพิ่มทรัพย์สินทางปัญญา', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'ค้นหาทรัพย์สินทางปัญญา', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'แก้ไขทรัพย์สินทางปัญญา', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    ['label' => 'ลบทรัพย์สินทางปัญญา', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                       ],
                    ],                    
                    //////////////////////////
                    
                     */
                    ['label' => 'รายงานการเบิกจ่าย $',
                                'icon' => 'glyphicon glyphicon-usd',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'ปีงบประมาณ 2560', 'icon' => 'glyphicon glyphicon-print', 'url' => '#',],
                                    ['label' => 'ปีงบประมาณ 2559', 'icon' => 'glyphicon glyphicon-print', 'url' => '#',],
                                    ['label' => 'ปีงบประมาณ 2558', 'icon' => 'glyphicon glyphicon-print', 'url' => '#',],
                                    ['label' => 'ปีงบประมาณ 2557', 'icon' => 'glyphicon glyphicon-print', 'url' => '#',],
                                    ['label' => 'ปีงบประมาณ 2556', 'icon' => 'glyphicon glyphicon-print', 'url' => '#',],
                                    ['label' => 'ปีงบประมาณ 2555', 'icon' => 'glyphicon glyphicon-print', 'url' => '#',],
                                    ['label' => 'ปีงบประมาณ 2554', 'icon' => 'glyphicon glyphicon-print', 'url' => '#',],
                                    ['label' => 'ปีงบประมาณ 2553', 'icon' => 'glyphicon glyphicon-print', 'url' => '#',],
                                    ['label' => 'ปีงบประมาณ 2552', 'icon' => 'glyphicon glyphicon-print', 'url' => '#',],
                                    ['label' => 'ปีงบประมาณ 2551', 'icon' => 'glyphicon glyphicon-print', 'url' => '#',],
                                    
                       ],
                    ],  
                    //////////////////////////
                    
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Admin tools',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
