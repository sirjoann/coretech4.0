<?php include './header.php'; ?>
<?php include './navbar.php'; ?>

<div class="page-content">
    <div class="row">
        <?php include './sidebar.php'; ?>
        <div class="col-md-10">
            <div class="content-box-large">
                <h2 style="text-align: center;">ยื่นคำขอออกนอกพื้นที่</h2>
                <div class="row" style="padding-top: 30px;">
                    <div class="col-md-4 col-xs-4"></div>
                    <div class="col-md-4 col-xs-4">
                        <form action="" onsubmit="return confirm('Do you really want to submit the form?');">
                            <fieldset>
                                <div class="form-group">
                                    <label>ผู้ยื่นคำขอ</label>
                                    <input class="form-control" placeholder="สุกัญญา เปี่ยนขุนทศ" type="text" readonly="">
                                </div>
                                <div class="form-group">
                                    <label>ส่วนงาน</label>
                                    <select class="form-control" id="select-1">
                                        <option>งานซ่อมบำรุงรักษา</option>
                                        <option>งานติดตั้งระบบ</option>
                                        <option>งานสำรวจโครงการใหม่</option>
                                        <option>งานการเงินและบัญชี</option>
                                        <option>งานควบคุมจัดส่งสินค้า</option>
                                        <option>งานประชุมทั่วไป</option>
                                        <option>อื่นๆ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>สถานที่</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-map-marker"></i></span>
                                        <input id="txtLocation" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>รายละเอียด</label>
                                    <textarea class="form-control" placeholder="" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>วัน/เดือน/ปี ออก</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input id="txtDate" type="date" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">
                                            <label>เวลาเริ่มต้น</label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-time"></i></span>
                                                <input  id="date1" type="time" class="form-control" placeholder="" data-mode="24h">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-4">
                                            <label>เวลาสิ้นสุด</label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-time"></i></span>
                                                <input  id="date2" type="time" class="form-control" placeholder="" data-mode="24h" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <hr>
                            <div style="text-align: left">
                                <button class="btn btn-success" type="submit"><i class="fa fa-save" style="padding-right: 5px;"></i> ยื่นคำขอ</button>
                                <button class="btn btn-danger" type="reset"><i class="fa fa-close" style="padding-right: 5px;"></i> ยกเลิก</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-xs-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

<script src="vendors/select/bootstrap-select.min.js"></script>

<script src="vendors/tags/js/bootstrap-tags.min.js"></script>

<script src="vendors/mask/jquery.maskedinput.min.js"></script>

<script src="vendors/moment/moment.min.js"></script>

<script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- bootstrap-datetimepicker -->
<link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
<script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<script src="js/custom.js"></script>
<script src="js/forms.js"></script>
<?php include './footer.php'; ?>
