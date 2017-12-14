<div class="container"> 
<p1>ชื่อ</p1>
  <input type="text" class="form-control" id="usr" value="<?= $users['fname']?>">
  <p1>สกุล</p1>
  <input type="text" class="form-control" id="usr" value="<?= $users['laname']?>">
  <p1>เบอร์โทร</p1>
  <input type="text" class="form-control" id="usr" value="<?= $users['tle']?>">
  <p1>อีเมล</p1>
  <input type="text" class="form-control" id="usr" value="<?= $users['email']?>">
  <p1>เพศ</p1>
  <input type="text" class="form-control" id="usr" value="<?= $users['men']?>">
<br>
<a class="btn btn-lg btn-warning"href="<?= \yii\helpers\Url::to(['user-profile/conn'])?>">ไปโลด</a> 
</div>
