<?php include './header.php'; ?>
<?php include './navbar.php'; ?>

<div class="page-content">
    <div class="row">
        <?php include './sidebar.php'; ?>
        <div class="col-md-10">
            <div class="content-box-large">
                <div style="font-size: 35px; text-align: center">ยินดีต้อนรับสู่ระบบบริหารจัดการองค์กร คอร์เทคฯ 4.0</div>
            </div>
            <div class="content-box-large">
                <div class="row" style="text-align: right">
                    <a onclick="myFunction()" style="padding-right: 20px; color: #333"><i class="fa fa-bars"></i></a>
                </div>
                <h3 style="text-align: center">ประกาศวันหยุดประจำปี 2560</h3>
                <h4 style="text-align: center; padding-bottom: 20px;">(มาตรา 39 นายจ้างประกาศกำหนดวันหยุดตามประเพณีให้ลูกจ้างทราบล่วงหน้า)</h4>
                <div style="text-align: center;"><a href="upload/Holiday.pdf" target="_bank" class="btn btn-success" style="font-size: 20px;">ตารางวันหยุดประจำปี 2017</a></div>
                <div id="tbl" style="text-align: center">
                    <!--
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center">เดือน</th>
                                <th style="text-align: center">ลำดับวัน</th>
                                <th style="text-align: center">วันที่</th>
                                <th style="text-align: center">วันหยุด</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">มกราคม</td>
                                <td>1. วันจันทร์ที่</td>
                                <td>2</td>
                                <td>วันชดเชยวันขึ้นปีใหม่</td>
                            </tr>
                            <tr>
                                <td>2. วันอังคารที่</td>
                                <td>3</td>
                                <td>วันชดเชยวันขึ้นปีใหม่</td>
                            </tr>
                            <tr>
                                <td>กุมภาพันธ์</td>
                                <td>3. วันจันทร์ที่ <div style="display: inline-block; color: red"><b>*</b></div></td>
                                <td>13</td>
                                <td>วันชดเชยวันมาฆบูชา</td>
                            </tr>
                            <tr>
                                <td rowspan="3">เมษายน</td>
                                <td>4. วันพฤหัสบดีที่</td>
                                <td>6</td>
                                <td>วันจักรี</td>
                            </tr>
                            <tr>
                                <td>5. วันพฤหัสบดีที่</td>
                                <td>13</td>
                                <td>วันสงกรานต์</td>
                            </tr>
                            <tr>
                                <td>5. วันศุกร์ที่</td>
                                <td>14</td>
                                <td>วันสงกรานต์</td>
                            </tr>
                            <tr>
                                <td rowspan="3">พฤษภาคม</td>
                                <td>7. วันจันทร์ที่</td>
                                <td>1</td>
                                <td>วันแรงงานแห่งชาติ</td>
                            </tr>
                            <tr>
                                <td>8. วันศุกร์ที่</td>
                                <td>5</td>
                                <td>วันฉัตรมงคล</td>
                            </tr>
                            <tr>
                                <td>9. วันพุธที่</td>
                                <td>10</td>
                                <td>วันวิสาขบูชา</td>
                            </tr>
                            <tr>
                                <td rowspan="2">กรกฏาคม</td>
                                <td>10. วันจันทร์ <div style="display: inline-block; color: red"><b>*</b></div></td>
                                <td>10</td>
                                <td>วันชดเชยวันอาสาฬบูชา</td>
                            </tr>
                            <tr>
                                <td>11. วันศุกร์ที่</td>
                                <td>28</td>
                                <td>วันเฉลิมพระชนมพรรษา (ร.๑๐)</td>
                            </tr>
                            <tr>
                                <td>สิงหาคม</td>
                                <td>12. วันจันทร์ <div style="display: inline-block; color: red"><b>*</b></div></td>
                                <td>14</td>
                                <td>วันชดเชยวันแม่</td>
                            </tr>
                            <tr>
                                <td>ตุลาคม</td>
                                <td>13. วันจันทร์ที่</td>
                                <td>23</td>
                                <td>วันปิยมหาราช</td>
                            </tr>
                            <tr>
                                <td rowspan="2">ธันวาคม</td>
                                <td>14. วันอังคารที่</td>
                                <td>5</td>
                                <td>วันคล้ายวันพระราชสมภพ ร.๙</td>
                            </tr>
                            <tr>
                                <td>15. วันจันทร์ที่</td>
                                <td>11</td>
                                <td>วันชดเชยวันรัฐธรรมนูญ</td>
                            </tr>
                        </tbody>
                    </table>
                   
                    <div>
                        <b>หมายเหตุ</b> – วันที่มีเครื่องหมาย <div style="display: inline-block; color: red"><b>*</b></div>  คือวันที่ตั้งข้อสังเกตยังไม่ถือเป็นวันหยุดและหากมีการหยุดชดเชย บริษัทจะประกาศให้ทราบภายหลัง
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
    var x = document.getElementById('tbl');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
</script>
<?php include './footer.php'; ?>