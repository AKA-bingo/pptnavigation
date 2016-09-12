<?php
require 'conn.php';
$hid = req_sec(isset($_GET['hid']) ? $_GET['hid'] : "");
if ($hid != '') {
	$query = "select * from chtml where hid=".$hid;
	$res = mysql_query($query);
	$row = mysql_fetch_array($res);
	$label = $row['label'];
    $ch_note = $row['ch_note'];
	$ch_code = $row['ch_code'];
}
?> 
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            修改标签:
                        </header>
                            <div class="panel-body">
                                <div role="form" class="form-horizontal adminex-form" >
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">标签名</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="label" class="form-control" value="<?php echo $label; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">注释</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="label" class="form-control" value="<?php echo $ch_note; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label">code</label>
                                        <div class="col-lg-10">
                                            <textarea id="ch_code" placeholder="" class="form-control" rows="5"><?php echo $ch_code; ?></textarea>
                                        </div>
                                    </div>
                                    <input id="hid" value="<?php echo $hid; ?>" style="display:none" >
                                    <div class="err" style="text-align:center;color:red;"></div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-1 col-lg-10">
                                            <button id="chtml_modify_btn" class="btn btn-primary" type="button">保存</button>
                                            <button id="backup" class="btn btn-primary" type="button">返回</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>