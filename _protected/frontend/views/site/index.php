<?php

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);
?>
<div class="site-index">

    <div class="jumbotron">
        
        <h1>  ยินดีต้อนรับท่านเข้าสู่ระบบ</h1> 
        <h2>  ระบบบริหารจัดการโครงการวิจัยและงานสร้างสรรค์
        </h2>
        <h3>มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน วิทยาเขตสุรินทร์</h3>
    </div>

    <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder" align="center">
              <img src="images/RsJournal.png" width="150" height="150">
              <h4>ผลงานวิจัยที่เผยแพร่ 0 ผลงาน</h4>
              <input type=text class="form-control" placeholder="ค้นหาผลงานวิจัยที่เผยแพร่">
              <br>
              <input type=button value="ค้นหา" class="btn btn-info" >
            </div>
        
            <div class="col-xs-6 col-sm-3 placeholder" align="center">
                <img src="images/RsInfo.png" width="150" height="150" >
              <h4>นักวิจัย 0 คน</h4>
              <input type=text class="form-control" placeholder="ค้นหานักวิจัย">
              <br>
              <input type=button value="ค้นหา" class="btn btn-info">
            </div>
        
            <div class="col-xs-6 col-sm-3 placeholder" align="center">
              <img src="images/RsResearch.png" width="150" height="150"">
              <h4>งานวิจัย 0 เรื่อง</h4>
               <input type=text class="form-control" placeholder="ค้นหางานวิจัย">
               <br>
               <input type=button value="ค้นหา" class="btn btn-info">
            </div>
        
            <div class="col-xs-6 col-sm-3 placeholder" align="center">
              <img src="images/RsCopyright.png"width="150" height="150">
              <h4>ลิขสิทธิ์/สิทธิบัตร 0 ผลงาน</h4>
              <input type=text class="form-control" placeholder="ค้นหาลิขสิทธิ์/สิทธิบัตร">
              <br>
              <input type=button value="ค้นหา" class="btn btn-info">
            </div>
            
          </div>
    <div class="body-content">

        <div class="row">
          
        </div>

    </div>
</div>

