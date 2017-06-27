<?php include './header.php'; ?>
<?php include './navbar.php'; ?>
<?php include './dbconfig.php'; ?>

<div class="page-content">
    <div class="row">
        <?php include './sidebar.php'; ?>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-box-large">
                        <h1 style="text-align: center;">จำนวนพิมพ์ A4</h1>
                        <div class="row">
                            <div class="col-md-6 col-xs-6" style="text-align: center">
                                <div style="font-size: 50px;"><?php echo number_format("3659",0); ?></div>
                                <div style="color: red">พิมพ์สี</div>
                            </div>
                            <div class="col-md-6 col-xs-6" style="text-align: center">
                                <div style="font-size: 50px;"><?php echo number_format("9856",0); ?></div>
                                <div>ขาวดำ</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-box-large">
                        <h1 style="text-align: center;">จำนวนพิมพ์ A3</h1>
                        <div class="row">
                            <div class="col-md-6 col-xs-6" style="text-align: center">
                                <div style="font-size: 50px;"><?php echo number_format("3659",0); ?></div>
                                <div style="color: red">พิมพ์สี</div>
                            </div>
                            <div class="col-md-6 col-xs-6" style="text-align: center">
                                <div style="font-size: 50px;"><?php echo number_format("9856",0); ?></div>
                                <div>ขาวดำ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <div class="row" style="padding-top: 30px;">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>NAME</th>
                                                <th>QTY</th>
                                                <th>PRICE</th>
                                                <th>DATE</th>
                                                <th>BY</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './footer.php'; ?>
