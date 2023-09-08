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
                <!--                 <div class="col-lg-12">
                    <div class="alert bg-white alert-danger" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-alert-line"></i>
                        </div>
                        <a href="https://clonesnew.com/client/security" class="iq-alert-text">Vui lòng bật xác minh 2 bước Google 2FA để bảo vệ tài khoản của bạn.</a>
                    </div>
                </div>
             -->
                <div class="col-lg-12">
                    <div class="alert bg-white alert-primary" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-alert-line"></i>
                        </div>
                        <div class="iq-alert-text">
                            <p style="text-align:center"><span style="font-size:22px"><span style="color:#8e44ad">VUI
                                        L&Ograve;NG BANK VTB
                                        AUTO&nbsp;</span></span><br />
                                <span style="color:#27ae60">CLONESNEW.SITE -&nbsp;<strong>Cam kết cung cấp
                                        h&agrave;ng clone uy t&iacute;n v&agrave; chuy&ecirc;n
                                        nghiệp</strong></span>
                            </p>

                            <p style="text-align:center"><span style="color:#27ae60">Mọi danh mục clone đều
                                    c&oacute; ghi ch&uacute; r&otilde; r&agrave;ng về c&aacute;c kiểu xuất
                                    file&nbsp;</span><br />
                                <span style="font-size:14px"><strong><span style="background-color:#f1c40f">Zalo
                                            hỗ trợ : </span><span
                                            style="background-color:#ffffff">0337799453</span></strong></span><br />
                                <span style="font-size:16px"><strong><span
                                            style="background-color:#f1c40f">Hotline&nbsp;hỗ
                                            trợ</span></strong><span
                                        style="background-color:#f1c40f">:&nbsp;</span><strong><span
                                            style="background-color:#ffffff">0337799453</span></strong></span>
                            </p>

                            <p style="text-align:center"><strong>Join group Zalo để thảo luận
                                    nh&eacute;!&nbsp;</strong>:<span style="font-size:18px"><strong><a
                                            href="https://zalo.me/g/gzojdf259">Group ZALO</a></strong></span>
                            </p>

                            <ul>
                                <li style="text-align:center"><strong>Lưu &Yacute;:&nbsp;</strong>

                                    <ul>
                                        <li>Để tr&aacute;nh lấy mất tiền v&agrave; clone c&aacute;c bạn vui
                                            l&ograve;ng kh&ocirc;ng đặt t&agrave;i khoản&nbsp;hoặc mật
                                            khẩu&nbsp;tr&ugrave;ng với web kh&aacute;c&nbsp;</li>
                                        <li>Khuyến c&aacute;o n&ecirc;n mua đủ s&agrave;i, Clone được checklive
                                            trước khi xuất file, kh&ocirc;ng c&oacute; ch&iacute;nh s&aacute;ch
                                            bảo h&agrave;nh​​</li>
                                    </ul>
                                </li>
                            </ul>

                            <p style="text-align:center">Rất cảm ơn c&aacute;c bạn đ&atilde; v&agrave; đang ủng
                                hộ CLONESNEW.SITE, rất mong rằng sẽ phục vụ c&aacute;c bạn tốt nhất&nbsp;<img
                                    alt="heart"
                                    src="https://muameta.net/public/ckeditor/plugins/smiley/images/heart.png"
                                    title="heart" /><br />
                                <span style="font-size:28px"><span style="color:#8e44ad">X&Oacute;A DATA ĐƠN
                                        H&Agrave;NG SAU 5&nbsp;NG&Agrave;Y KỂ TỪ NG&Agrave;Y MUA&nbsp;AE LƯU
                                        &Yacute;</span></span>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between" style="background: #060606;">
                            <div class="header-title">
                                <h5 class="card-title" style="color:white;">MUA TÀI LIỆU </h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab-fill" onclick="showProduct(0)"
                                        data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home"
                                        aria-selected="true"><i class="fas fa-shopping-cart mr-1"></i>Tất Cả Sản
                                        Phẩm</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent-1">
                                <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel"
                                    aria-labelledby="pills-home-tab-fill">
                                    <div id="showProduct">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <div class="iq-maintenance">
                                                    <img src="https://clonesnew.com/public/datum/assets/images/error/maintenance.png"
                                                        class="img-fluid" alt="">
                                                    <h3 class="mt-4 mb-2">Sản phẩm không tồn tại</h3>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-center border-top-table p-3">
                            <a type="button" href="../client/orders.php" class="btn btn-secondary btn-sm"><i
                                    class="fas fa-cart-arrow-down mr-1"></i>Lịch Sử Mua
                                Hàng</a>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="modalBuy" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thanh toán đơn hàng</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-window-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label>Tên sản phẩm:</label>
                                    <input class="form-control" type="hidden" id="token"
                                        value="25f78b1021a96a1df271ba06e29ab889">
                                    <input type="text" class="form-control" id="name" readonly />
                                    <input type="hidden" value="" readonly class="form-control" id="modal-id">
                                    <input type="hidden" value="" readonly class="form-control" id="price">
                                </div>
                                <div class="form-group mb-3" id="showDiscountCode">
                                    <label>Mã giảm giá:</label>
                                    <input type="text" class="form-control" onchange="totalPayment()"
                                        onkeyup="totalPayment()" placeholder="Nhập mã giảm giá của bạn" id="coupon" />
                                </div>
                                <div class="mb-3 text-right"><button id="btnshowDiscountCode"
                                        onclick="showDiscountCode()" class="btn btn-danger btn-sm">Nhập mã giảm
                                        giá</button></div>
                                <div class="mb-3 text-center" style="font-size: 20px;">Tổng tiền cần thanh toán:
                                    <b id="total" style="color:red;">0</b>
                                </div>
                                <div class="text-center mb-3">
                                    <button type="submit" id="btnBuy" onclick="buyDocument()"
                                        class="btn btn-primary btn-block"><i class="fas fa-credit-card mr-1"></i>Thanh
                                        toán</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                // function buyDocument() {
                //     var id = $("#modal-id").val();
                //     var amount = $("#amount").val();
                //     var token = $("#token").val();
                //     $('#btnBuy').html('<i class="fa fa-spinner fa-spin"></i> Loading...').prop('disabled',
                //         true);
                //     $.ajax({
                //         url: "https://clonesnew.com/ajaxs/client/buyDocument.php",
                //         method: "POST",
                //         dataType: "JSON",
                //         data: {
                //             token: token,
                //             id: id,
                //             coupon: $("#coupon").val()
                //         },
                //         success: function(data) {
                //             $('#btnBuy').html('<i class="fas fa-credit-card mr-1"></i>Thanh toán')
                //                 .prop(
                //                     'disabled', false);
                //             if (data.status == 'success') {
                //                 cuteToast({
                //                     type: "success",
                //                     message: data.msg,
                //                     timer: 5000
                //                 });
                //                 setTimeout("location.href = 'https://clonesnew.com/client/orders';",
                //                     1000);
                //             } else {
                //                 cuteToast({
                //                     type: "error",
                //                     message: data.msg,
                //                     timer: 5000
                //                 });
                //             }
                //         },
                //         error: function() {
                //             $('#btnBuy').html('<i class="fas fa-credit-card mr-1"></i>Thanh toán')
                //                 .prop(
                //                     'disabled', false);
                //             cuteToast({
                //                 type: "error",
                //                 message: 'Không thể xử lý',
                //                 timer: 5000
                //             });
                //         }
                //     });
                // }
                </script>
                <script type="text/javascript">
                // showProduct(0);

                // function showProduct(id) {
                //     $("#showProduct").html(
                //         '<center><img src="https://clonesnew.com/assets/storage/images/gif_loadingZOA.png" width="100px" /></center>'
                //     );
                //     $.ajax({
                //         url: "https://clonesnew.com/ajaxs/client/showDocument.php",
                //         method: "POST",
                //         data: {
                //             id: id
                //         },
                //         success: function(data) {
                //             $("#showProduct").html(data);
                //         },
                //         error: function() {
                //             cuteToast({
                //                 type: "error",
                //                 message: 'Không thể xử lý',
                //                 timer: 5000
                //             });
                //         }
                //     });
                // }
                // document.getElementById('showDiscountCode').style.display = 'none';

                // function showDiscountCode() {
                //     if (document.getElementById('showDiscountCode').style.display == 'none') {
                //         document.getElementById('btnshowDiscountCode').className = "btn btn-sm btn-dark";
                //         $('#btnshowDiscountCode').html('Huỷ mã giảm giá');
                //         document.getElementById('showDiscountCode').style.display = 'block';
                //     } else {
                //         document.getElementById('btnshowDiscountCode').className = "btn btn-sm btn-danger";
                //         $('#btnshowDiscountCode').html('Nhập mã giảm giá');
                //         document.getElementById('showDiscountCode').style.display = 'none';
                //         document.getElementById('coupon').value = '';
                //         totalPayment();
                //     }
                // }

                // function totalPayment() {
                //     $('#total').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...');
                //     $.ajax({
                //         url: "https://clonesnew.com/ajaxs/client/totalPayment.php",
                //         method: "POST",
                //         data: {
                //             id: $("#modal-id").val(),
                //             coupon: $("#coupon").val(),
                //             token: $("#token").val(),
                //             store: 'documents'
                //         },
                //         success: function(data) {
                //             $("#total").html(data);
                //         },
                //         error: function() {
                //             cuteToast({
                //                 type: "error",
                //                 message: 'Không thể tính kết quả thanh toán',
                //                 timer: 5000
                //             });
                //         }
                //     });
                //     //$("#total").html(total.toString().replace(/(.)(?=(\d{3})+$)/g, '$1,'));
                // }

                // function modalBuy(id, price, name) {
                //     $("#modal-id").val(id);
                //     $("#price").val(price);
                //     $("#name").val(name);
                //     $("#modalBuy").modal();
                //     totalPayment();
                // }
                </script>
            </div>
        </div>
    </div>
</div>



<div class="onboarding-modal modal fade animated" id="notice_popup" role="dialog" style="display: none;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thông báo</h5>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <p><span style="font-size:16px"><strong>Lưu &yacute; : Để tr&aacute;nh mất t&agrave;i khoản
                                đ&atilde; mua&nbsp;</strong></span></p>

                    <p>Qu&yacute; kh&aacute;ch vui l&ograve;ng tải c&aacute;c đơn h&agrave;ng đ&atilde;
                        mua&nbsp;về ,&nbsp;sau 5 ng&agrave;y hệ thống sẽ tự động x&oacute;a c&aacute;c đơn
                        h&agrave;ng</p>

                    <p>xin cảm ơn !!</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="hide_notice_popup">Không hiển thị
                        lại</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(e => {
        ShowModal_notice_popup()
    }, 0)
});

function ShowModal_notice_popup() {
    $('#notice_popup').modal({
        keyboard: true,
        show: true
    });
}
</script>

</div>
</div>

<?php
include_once __DIR__ . '/./inc/footer.php';

?>

<!-- Wrapper End-->