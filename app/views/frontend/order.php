<?php
include_once __DIR__ . '/./inc/header.php';
// $p_first =  $data['products_first'];
// $p_second =  $data['products_second'];
// $cat =  $data['cate'];
// $latest_product =  $data['latest_product'];
$fm = new Format();

?>

<div style="padding-top:90px">
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert bg-white alert-primary" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-alert-line"></i>
                        </div>
                        <div class="iq-alert-text">
                            <p>Thay đổi th&ocirc;ng b&aacute;o lịch sử đơn h&agrave;ng trong <strong>C&agrave;i
                                    Đặt -&gt;&nbsp;Ghi ch&uacute; lịch sử đơn h&agrave;ng</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-left">
                    <div class="mb-3">
                        <a href="" type="button" class="btn btn-danger btn-sm"><i
                                class="fas fa-arrow-left mr-1"></i>Quay Lại</a>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <!-- <div class="mb-3">
                    <button class="btn btn-primary btn-sm btn-icon-left m-b-10" data-toggle="modal"
                        data-target="#modal-default" type="button"><i
                            class="fas fa-cloud-download-alt mr-1"></i>Tải Về File Backup VIA</button>
                </div> -->
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Lịch Sử Mua Hàng</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table data-table table-hover mb-0">
                                    <thead class="table-color-heading">
                                        <tr>
                                            <th width="5%">#</th>
                                            <th>Mã giao dịch</th>
                                            <th>Sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Thanh toán</th>
                                            <th>Thời gian</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tải Về File Backup VIA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>UID VIA</label>
                            <input type="text" id="uid_via" class="form-control"
                                placeholder="Nhập UID VIA cần tải về file backup">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                        <button type="button" onclick="downloadBackup()" class="btn btn-primary">Tải Về</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</div>
</div>



<!-- Wrapper End-->




<!-- Backend Bundle JavaScript -->


<!-- Dev By PS26819 | FB.COM/PS26819 | ZALO.ME/0947838128 | MMO Solution -->
<!-- Script Footer -->

<script type="text/javascript">
function downloadFile(transid, token) {
    function downloadTxtFile(a, b) {
        var content = b;
        var filename = a + ".txt";
        var element = document.createElement('a');
        element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(content));
        element.setAttribute('download', filename);
        element.style.display = 'none';
        document.body.appendChild(element);
        element.click();
        document.body.removeChild(element);
    }



    function confirmDownload(transid, token) {
        cuteAlert({
            type: "question",
            title: "Xác nhận tải về đơn hàng #" + transid,
            message: "Bạn có chắc chắn muốn tải về hàng này không",
            confirmText: "Đồng Ý",
            cancelText: "Huỷ"
        }).then((e) => {
            console.log(e)

            if (e) {
                downloadTxtFile(transid, token);
            }
        });
    }
    confirmDownload(transid, token)
}

function downloadBackup() {
    if ($("#uid_via").val() == '') {
        return cuteAlert({
            type: "error",
            title: "Error",
            message: "Vui lòng nhập UID cần tải",
            buttonText: "Okay"
        });
    }
    window.open('https://clonesnew.com/assets/storage/backup/' + $("#uid_via").val() + '.zip', '_blank').focus();
}

function RemoveRow(id, token, transid) {
    cuteAlert({
        type: "question",
        title: "Xác nhận xoá đơn hàng #" + transid,
        message: "Bạn có chắc chắn muốn xóa đơn hàng này không ?",
        confirmText: "Đồng Ý",
        cancelText: "Huỷ"
    }).then((e) => {
        if (e) {
            $.ajax({
                url: "https://clonesnew.com/ajaxs/client/removeOrder.php",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    token: token
                },
                success: function(respone) {
                    if (respone.status == 'success') {
                        cuteToast({
                            type: "success",
                            message: respone.msg,
                            timer: 5000
                        });
                        location.reload();
                    } else {
                        cuteAlert({
                            type: "error",
                            title: "Error",
                            message: respone.msg,
                            buttonText: "Okay"
                        });
                    }
                },

            });
        }
    })
}

function downloadTXT(filename, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);
    element.style.display = 'none';
    document.body.appendChild(element);
    element.click();
    document.body.removeChild(element);
}
</script>

<?php
include_once __DIR__ . '/./inc/footer.php';

?>