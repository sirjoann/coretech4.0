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
                <h3 style="text-align: center">ประกาศวันหยุดประจำปี 2560</h3>
                <h4 style="text-align: center; padding-bottom: 20px;">(มาตรา 39 นายจ้างประกาศกำหนดวันหยุดตามประเพณีให้ลูกจ้างทราบล่วงหน้า)</h4>
                <div style="text-align: center;"><a href="upload/Holiday.pdf" target="_bank" class="btn btn-success" style="font-size: 20px;">ตารางวันหยุดประจำปี 2017</a></div>
            </div>
            <div class="content-box-large">
                <div class="row">
                    <div class="row" style="text-align: right">
                        <a onclick="myFunction()" style="padding-right: 20px; color: #333"><i class="fa fa-bars"></i></a>
                    </div>
                    <h3 style="text-align: center">แบบฟอร์มภายในสำนักงานต่าง</h3>
                    <h4 style="text-align: center; padding-bottom: 20px;">ดาวน์โหลดเอกสารแบบฟอร์มหรือเอกสารต่างๆที่ใช้ในสำนักงาน</h4>
                    <div id="download">

                        
                        <div class="col-md-3">
                            <div class="sidebar" style="display: block;">
                                <ul id="sidebar" class="nav">
                                    <h3>แบบฟอร์ม</h3>
                                    <li></li>
                                    <li class="submenu">
                                        <a href="#">
                                            <i class="fa fa-file-pdf-o"></i> แบบฟอร์มใบรับประกัน
                                            <span class="caret pull-right"></span>
                                        </a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-download" style="padding-right: 5px;"></i> ใบรับประกันสินค้า</a></li>
                                            <li><a href="#"><i class="fa fa-download" style="padding-right: 5px;"></i> ใบรับประกันโครงการ</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="#">
                                            <i class="fa fa-file-pdf-o"></i> แบบฟอร์มใบเบิกสินค้า
                                            <span class="caret pull-right"></span>
                                        </a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-download" style="padding-right: 5px;"></i> ใบเบิกสินค้า PDF</a></li>
                                            <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i> คู่มือการใช้งาน</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i>แบบฟอร์มใบขออนุญาตเข้าสต็อก</a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i>แบบฟอร์มหนังสือมอบอำนาจ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sidebar" style="display: block;">
                                <ul id="sidebar" class="nav">
                                    <h3>แบบฟอร์ม</h3>
                                    <li></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i>ใบลา</a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i>ใบลาออก</a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i>ใบขออนุมัติซื้อ</a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i>ใบเบิกค่าน้ำมันรถส่วนตัว</a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i>ใบเบิกเงินสดย่อย</a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i>ใบเบิกเงินทดรองจ่าย</a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i>ใบเบิกยืมสินค้า DEMO</a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i>ใบเบิกยืมอุปกรณ์ภายใน</a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i>ใบเบิกอุปกรณ์</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sidebar" style="display: block;">
                                <ul id="sidebar" class="nav">
                                    <h3>แบบของใช้สำนักงาน</h3>
                                    <li></li>
                                    <li><a href="upload/Document.docx"><i class="fa fa-file-text-o"></i> เอกสารหัวจดหมาย</a></li>
                                    <li><a href="upload/Coretech Power Point template.pptx"><i class="fa fa-file-powerpoint-o"></i> แบบนำเสนองาน</a></li>
                                    <li class="submenu">
                                        <a href="#">
                                            <i class="fa fa-envelope-o"></i> แบบซองจดหมาย (ขาว)
                                            <span class="caret pull-right"></span>
                                        </a>
                                        <ul>
                                            <li><a href="upload/envelope/Envelope-none.pdf"><i class="fa fa-download" style="padding-right: 5px;"></i> ดาวน์โหลด</a></li>
                                            <li><a href="upload/envelope/Envelope-PDF.pdf"><i class="fa fa-download" style="padding-right: 5px;"></i> ดาวน์โหลด (จ่าหน้า)</a></li>
                                            <li><a href="upload/envelope/คู่มือการพิมพ์ซองจดหมาย(ซองขาว).pdf"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i> คู่มือการพิมพ์</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="#">
                                            <i class="fa fa-envelope-o"></i> แบบซองน้ำตาล
                                            <span class="caret pull-right"></span>
                                        </a>
                                        <ul>
                                            <li><a href="upload/envelope/Envelope-c4.pdf"><i class="fa fa-download" style="padding-right: 5px;"></i> ซองขนาด C4</a></li>
                                            <li><a href="upload/envelope/Envelope-f4.pdf"><i class="fa fa-download" style="padding-right: 5px;"></i> ซองขนาด F4</a></li>
                                            <li><a href="upload/envelope/คู่มือการพิมพ์ซองน้ำตาล.pdf"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i> คู่มือการพิมพ์</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sidebar" style="display: block;">
                                <ul id="sidebar" class="nav">
                                    <h3>ดาวน์โหลด</h3>
                                    <li></li>
                                    <li class="submenu">
                                        <a href="#">
                                            <i class="fa fa-file-archive-o"></i> ฟ้อนต์ PSLxDisplay
                                            <span class="caret pull-right"></span>
                                        </a>
                                        <ul>
                                            <li><a href="upload/PSLxDisplay.rar"><i class="fa fa-download" style="padding-right: 5px;"></i> ดาวน์โหลด</a></li>
                                            <li><a href="#"><i class="fa fa-file-pdf-o" style="padding-right: 5px;"></i> วิธีการลงฟ้อนต์</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        var x = document.getElementById('download');
        if (x.style.display === 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
    }
</script>
<?php include './footer.php'; ?>