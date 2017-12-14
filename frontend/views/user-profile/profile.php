<div class="container">
  <h2>หน้าที่2เด้อย้านบ่รู้</h2>
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Tle</th>
        <th>E-mail</th>
        <th>Sex</th>

      </tr>
        <tr>
        
            <td class="active"><?= $users['fname']?></td>
            <td class="success"><?= $users['laname']?></td>
            <td class="warning"><?= $users['tle']?></td>
            <td class="danger"><?= $users['email']?></td>
            <td class="info"><?= $users['men']?></td>
        </tr>
        <tr>
        
            <td class="active"><?= $users['fname']?></td>
            <td class="success"><?= $users['laname']?></td>
            <td class="warning"><?= $users['tle']?></td>
            <td class="danger"><?= $users['email']?></td>
            <td class="info"><?= $users['men']?></td>   
        </tr>
        
    </thead>   
  </table>
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
</div>
<br>
<a class="btn btn-lg btn-warning"href="<?= \yii\helpers\Url::to(['user-profile/conn'])?>">ไปโลด</a> 