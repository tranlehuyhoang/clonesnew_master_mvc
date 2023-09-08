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
                            <p><strong>Vui l&ograve;ng nhập đ&uacute;ng nội dung CHUYỂN, cộng tiền sau&nbsp;1
                                    ph&uacute;t - 10 ph&uacute;t</strong></p>

                            <p><strong>Nếu nhập sai nội dung sẽ bị trừ&nbsp;10% gi&aacute; trị nạp</strong></p>

                            <p><strong>Nếu hệ thống kh&ocirc;ng cộng tiền sau 10p h&atilde;y li&ecirc;n hệ
                                    Zalo:&nbsp;0337799453 hoặc call 0337799453</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Nạp tiền theo hoá đơn</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0 mb-3">
                                    <div type="button" onclick="openModalAmount(5)"
                                        class="blur-shadow p-4 shadow-showcase text-center">
                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>assets/storage/images/vietinbank_637018943312743351.jpg"
                                            width="200px" height="100px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Backend Bundle JavaScript -->
    <script src="../public/datum/assets/js/backend-bundle.min.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="../public/datum/assets/js/customizer.js"></script>
    <script src="../public/datum/assets/js/sidebar.js"></script>
    <!-- Flextree Javascript-->
    <script src="../public/datum/assets/js/flex-tree.min.js"></script>
    <script src="../public/datum/assets/js/tree.js"></script>
    <!-- Table Treeview JavaScript -->
    <script src="../public/datum/assets/js/table-treeview.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="../public/datum/assets/js/sweetalert.js"></script>
    <!-- Vectoe Map JavaScript -->
    <script src="../public/datum/assets/js/vector-map-custom.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="../public/datum/assets/js/chart-custom.js"></script>
    <script src="../public/datum/assets/js/charts/01.js"></script>
    <script src="../public/datum/assets/js/charts/02.js"></script>
    <!-- slider JavaScript -->
    <script src="../public/datum/assets/js/slider.js"></script>
    <!-- Emoji picker -->
    <script src="../public/datum/assets/vendor/emoji-picker-element/index.js" type="module"></script>
    <!-- app JavaScript -->
    <script src="../public/datum/assets/js/app.js"></script>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {


                if ($_POST['invoices_price'] < 10000) {
            ?>
            <script type="text/javascript">
            Swal.fire({
                title: 'Thất bại!',
                text: 'Số tiền nạp tối thiểu là 10.000đ',
                icon: 'error',
                confirmButtonText: 'OK'
            });
            </script>
            <?php
                } else {
                    if (!isset($_SESSION['clone_user_id'])) {
                        echo "<script>location.href = '../client/login.php';</script>";
                        return;
                    }
                ?>
            <script type="text/javascript">
            $('#btnDepositOrder').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').prop(
                'disabled',
                true);
            </script>
            <?php


                    $invoices = $invoices->insert_invoices($_POST);
                    if (isset($invoices)) {
                        if ($invoices !== '400') {
                    ?>
            <script type="text/javascript">
            Swal.fire({
                title: 'Thành công!',
                text: 'Tạo hóa đơn thành công',
                icon: 'success',
                confirmButtonText: 'OK'
            });
            window.location.href = "../client/payment.php?bill=<?php echo $invoices ?>";
            </script>

            <?php
                        } else {

                            if ($invoices == '400') {

                            ?>
            <script type="text/javascript">
            Swal.fire({
                title: 'Thất bại!',
                text: 'Tạo hóa đơn thất bại',
                icon: 'error',
                confirmButtonText: 'OK'
            });
            </script>
            <?php

                            }
                        }
                    }
                }
            }
            ?>
            <form action="" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nhập số tiền cần nạp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <input type="hidden" id="token" value="25f78b1021a96a1df271ba06e29ab889" required>
                            <input type="hidden" id="modal-id" required>
                            <input type="number" name="invoices_price" id="amount " onchange="totalRecharge(this.value)"
                                onkeyup="totalRecharge(this.value)" placeholder="Nhập số tiền bạn cần nạp vào hệ thống"
                                class="form-control" required>
                        </div>
                        <p>
                            <span class="float-left">Số tiền cần thanh toán<br><br><b id="payment"
                                    style="color: blue;">0</b></span>
                            <span class="float-right">Số tiền nhận được<br><br><b id="received"
                                    style="color: red;">0</b></span>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" id="btnDepositOrder" class="btn btn-primary">Tạo hoá đơn</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
</div>



<!-- Wrapper End-->

<script type="text/javascript">
function openModalAmount(id) {
    $("#modal-id").val(id);
    $("#exampleModal").modal();
}
</script>

<script type="text/javascript">
new ClipboardJS(".copy");

function copy() {
    cuteToast({
        type: "success",
        message: "Đã sao chép vào bộ nhớ tạm",
        timer: 5000
    });
}

// function totalRecharge() {
//     // $('#total').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...');
//     // $.ajax({
//     //     url: "https://clonesnew.com/ajaxs/client/totalRecharge.php",
//     //     method: "POST",
//     //     data: {
//     //         amount: $("#amount").val(),
//     //         token: $("#token").val(),
//     //     },
//     //     success: function(data) {

//     //     },
//     //     error: function() {
//     //         cuteToast({
//     //             type: "error",
//     //             message: 'Không thể tính kết quả thanh toán',
//     //             timer: 5000
//     //         });
//     //     }
//     // });
//     $("#received").html($("#amount").val());
//     $("#payment").html($("#amount").val().toString().replace(/(.)(?=(\d{3})+$)/g, '$1.'));
// }
function totalRecharge(e) {
    // var amount = document.getElementById("amount").value;
    document.getElementById("received").innerHTML = e + 'đ';
    document.getElementById("payment").innerHTML = formatNumber(e);

}

function formatNumber(amount) {
    return amount.toString().replace(/(\d)(?=(\d{3})+$)/g, '$1.');
}


// $("#btnDepositOrder").on("click", function() {
//     $('#btnDepositOrder').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').prop(
//         'disabled',
//         true);
//     $.ajax({
//         url: "https://clonesnew.com/ajaxs/client/deposit-order.php",
//         method: "POST",
//         dataType: "JSON",
//         data: {
//             type: $("#modal-id").val(),
//             amount: $("#amount").val(),
//             token: $("#token").val()
//         },
//         success: function(respone) {
//             if (respone.status == 'success') {
//                 cuteToast({
//                     type: "success",
//                     message: respone.msg,
//                     timer: 5000
//                 });
//                 //window.open("https://clonesnew.com/client/payment/" + respone.trans_id + " ", '_blank');
//                 setTimeout("location.href = 'https://clonesnew.com/client/payment/" + respone
//                     .trans_id +
//                     " ' ;", 500);

//             } else {
//                 Swal.fire(
//                     'Thất bại',
//                     respone.msg,
//                     'error'
//                 );
//             }
//             $('#btnDepositOrder').html('Tạo hoá đơn').prop('disabled', false);
//         },
//         error: function() {
//             cuteToast({
//                 type: "error",
//                 message: 'Không thể xử lý',
//                 timer: 5000
//             });
//             $('#btnDepositOrder').html('Tạo hoá đơn').prop('disabled', false);
//         }

//     });
// });
</script>

<?php
include_once __DIR__ . '/./inc/footer.php';

?>