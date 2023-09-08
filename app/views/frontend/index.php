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
                <!--  -->
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
                                            hỗ trợ : </span><span style="background-color:#ffffff">0337799453</span></strong>
                                </span><br />
                                <span style="font-size:16px"><strong><span style="background-color:#f1c40f">Hotline&nbsp;hỗ
                                            trợ</span></strong><span style="background-color:#f1c40f">:&nbsp;</span><strong><span style="background-color:#ffffff">0337799453</span></strong></span>
                            </p>

                            <p style="text-align:center"><strong>Join group Zalo để thảo luận
                                    nh&eacute;!&nbsp;</strong>:<span style="font-size:18px"><strong><a href="https://zalo.me/g/gzojdf259">Group ZALO</a></strong></span>
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
                                hộ CLONESNEW.SITE, rất mong rằng sẽ phục vụ c&aacute;c bạn tốt nhất&nbsp;<img alt="heart" src="https://muameta.net/public/ckeditor/plugins/smiley/images/heart.png" title="heart" /><br />
                                <span style="font-size:28px"><span style="color:#8e44ad">X&Oacute;A DATA ĐƠN
                                        H&Agrave;NG SAU 5&nbsp;NG&Agrave;Y KỂ TỪ NG&Agrave;Y MUA&nbsp;AE LƯU
                                        &Yacute;</span></span>
                            </p>
                        </div>
                    </div>
                </div>






                <div class="col-lg-12 mt-3">
                    <div>
                        <!-- <div class="card-header card-product d-flex justify-content-between mb-3"
            style="background-image: linear-gradient(to right, #060606, #060606, #060606);">
            <div class="header-title">
                <h4 style="color:white;">MUA TÀI KHOẢN</h4>
            </div>
        </div> -->
                        <div>
                            <ul class="nav nav-pills mb-1 nav-fill" id="pills-tab-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab-fill" onclick="showProduct(0)" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-shopping-cart mr-1"></i>TẤT CẢ SẢN
                                        PHẨM</a>
                                </li>
                                <?php
                                if (isset($showcategory)) {
                                    if ($showcategory && $showcategory->num_rows > 0) {
                                        $i = 0;
                                        while ($result = $showcategory->fetch_assoc()) {
                                            # code...
                                ?>
                                            <li class="nav-item">

                                                <a class="nav-link " id="pills-home-tab-fill" onclick="showProduct(<?php echo  $result['category_id'] ?>)" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true">
                                                    <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['category_img']); ?>" width="25px">
                                                    <?php echo  $result['category_name'] ?>
                                                </a>
                                            </li>
                                        <?php
                                            $i++;
                                        }
                                    } else {
                                        ?>
                                    <?php
                                    }
                                } else {
                                    ?>
                                <?php
                                }
                                ?>

                            </ul>
                            <div class="tab-content" id="pills-tabContent-1">
                                <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel" aria-labelledby="pills-home-tab-fill">
                                    <div id="showProduct">
                                        <style>
                                            .ribbon-wrapper.ribbon-lg .ribbon {
                                                right: 0;
                                                top: 26px;
                                                width: 150px;
                                            }

                                            .ribbon-wrapper .ribbon {
                                                box-shadow: 0 0 3px rgb(0 0 0 / 30%);
                                                font-size: .8rem;
                                                line-height: 100%;
                                                padding: 0.375rem 0;
                                                position: relative;
                                                right: -2px;
                                                text-align: center;
                                                text-shadow: 0 -1px 0 rgb(0 0 0 / 40%);
                                                text-transform: uppercase;
                                                top: 10px;
                                                -webkit-transform: rotate(45deg);
                                                transform: rotate(45deg);
                                                width: 90px;
                                            }

                                            .ribbon-wrapper.ribbon-lg {
                                                height: 120px;
                                                width: 120px;
                                            }

                                            .ribbon-wrapper {
                                                height: 70px;
                                                overflow: hidden;
                                                position: absolute;
                                                right: 12px;
                                                top: -2px;
                                                width: 70px;
                                                z-index: 10;
                                            }
                                        </style>
                                        <style>
                                            .ribbon-wrapper.ribbon-lg .ribbon {
                                                right: 0;
                                                top: 26px;
                                                width: 150px;
                                            }

                                            .ribbon-wrapper .ribbon {
                                                box-shadow: 0 0 3px rgb(0 0 0 / 30%);
                                                font-size: .8rem;
                                                line-height: 100%;
                                                padding: 0.375rem 0;
                                                position: relative;
                                                right: -2px;
                                                text-align: center;
                                                text-shadow: 0 -1px 0 rgb(0 0 0 / 40%);
                                                text-transform: uppercase;
                                                top: 10px;
                                                -webkit-transform: rotate(45deg);
                                                transform: rotate(45deg);
                                                width: 90px;
                                            }

                                            .ribbon-wrapper.ribbon-lg {
                                                height: 120px;
                                                width: 120px;
                                            }

                                            .ribbon-wrapper {
                                                height: 70px;
                                                overflow: hidden;
                                                position: absolute;
                                                right: 12px;
                                                top: -2px;
                                                width: 70px;
                                                z-index: 10;
                                            }
                                        </style>
                                        <style>
                                            .thumbnail-mobile {
                                                width: 32px;
                                                height: 24px;
                                                overflow: hidden;
                                                border: 1px solid #e5e5e5;
                                            }

                                            .thumbnail-mobile img {
                                                width: 100%;
                                                height: 100%;
                                                transition-duration: 0.1s;
                                            }

                                            .thumbnail-mobile img:hover {
                                                position: absolute;
                                                width: 350px;
                                                height: 210px;
                                                right: -20px;
                                                border: 3px solid #00ac15;
                                                border-radius: 9px;
                                                z-index: 1000;
                                            }
                                        </style>

                                        <div class="row">

                                            <?php
                                            if (isset($showcategory1)) {
                                                if ($showcategory1 && $showcategory1->num_rows > 0) {
                                                    $i = 0;
                                                    while ($result = $showcategory1->fetch_assoc()) {
                                                        # code...
                                            ?>
                                                        <div class="col-sm-12 col-md-12 col-lg-12 mt-12 mt-md-3 p-0 category_id" id="category_id_<?php echo  $result['category_id'] ?>">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-hover mb-0">
                                                                    <thead class="table-color-heading" style="background:#060606;color:white;">
                                                                        <tr>
                                                                            <th><img src="<?php echo 'data:image/png;base64,' . base64_encode($result['category_img']); ?>" width="30px" class="mr-2" /><?php echo  $result['category_name']; ?>
                                                                            </th>
                                                                            <!--  -->
                                                                            <th class="text-center hidemobile" width="10%">
                                                                                Quốc gia
                                                                            </th>
                                                                            <th class="text-center hidemobile" width="10%">
                                                                                Hiện có
                                                                            </th>
                                                                            <th class="text-center hidemobile" width="10%">
                                                                                Đã bán
                                                                            </th>
                                                                            <th class="text-center hidemobile" width="10%">
                                                                                Giá</th>
                                                                            <th class="text-center hidemobile" width="10%">
                                                                                Thao tác
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $getbrandbycat = $brand->getbrandbycat($result['category_id']);
                                                                        ?>
                                                                        <?php
                                                                        if (isset($getbrandbycat)) {
                                                                            if ($getbrandbycat && $getbrandbycat->num_rows > 0) {
                                                                                $i = 0;
                                                                                while ($results = $getbrandbycat->fetch_assoc()) {
                                                                                    # code...
                                                                        ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="col-product-name">
                                                                                                <img class="mr-1 py-1 d-none-600" src="<?php echo 'data:image/png;base64,' . base64_encode($result['category_img']); ?>">
                                                                                                <div class="name-product">
                                                                                                    <h3>
                                                                                                        <?php echo $results['brand_name'] ?>
                                                                                                    </h3>
                                                                                                    <div class="content-mota">
                                                                                                        <?php echo $results['brand_desc'] ?>
                                                                                                    </div>
                                                                                                    <div class="d-none-more-than-601">
                                                                                                        <div class="col-md-12 p-0 mt-2">
                                                                                                            <span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                                                <b><?php echo number_format($results['brand_price']) ?>đ</b>
                                                                                                            </span>
                                                                                                            <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                                                Còn lại: <b>565</b>
                                                                                                            </span>
                                                                                                            <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                                                Đã bán: <b>2.174.100</b>
                                                                                                            </span>
                                                                                                            <span class="btn mb-1 btn-sm btn-outline-warning p-0">
                                                                                                                <img width="30px;" src="https://flagicons.lipis.dev/flags/4x3/<?php echo $results['brand_country'] ?>.svg">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        <div class="col-md-12 p-0 mt-2">
                                                                                                            <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(3, 1000,`[V1] Clone Ngoại Ramdom IP Ngoại ( Băm Ads - BM ) - API 3`)">
                                                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA
                                                                                                                NGAY </button>


                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="text-center d-none-600">
                                                                                            <img width="30px;" src="https://flagicons.lipis.dev/flags/4x3/<?php echo $results['brand_country'] ?>.svg">
                                                                                        </td>
                                                                                        <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                                Còn lại: <b><?php

                                                                                                            $countProduct = $product->countProduct($results['brand_id']);


                                                                                                            if (isset($countProduct)) {
                                                                                                                if ($countProduct && $countProduct->num_rows > 0) {
                                                                                                                    $i = 0;
                                                                                                                    while ($resultsss = $countProduct->fetch_assoc()) {
                                                                                                                        echo $resultsss['total'];
                                                                                                            ?>
                                                                                                            <?php
                                                                                                                        $i++;
                                                                                                                    }
                                                                                                                } else {
                                                                                                                    echo '0';
                                                                                                            ?>

                                                                                                        <?php
                                                                                                                }
                                                                                                            } else {
                                                                                                        ?>
                                                                                                    <?php
                                                                                                            }
                                                                                                    ?>
                                                                                                </b>
                                                                                            </span></td>
                                                                                        <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                                Đã bán: <b>
                                                                                                    <?php

                                                                                                    $countProductselled = $product->countProductselled($results['brand_id']);


                                                                                                    if (isset($countProductselled)) {
                                                                                                        if ($countProductselled && $countProductselled->num_rows > 0) {
                                                                                                            $i = 0;
                                                                                                            while ($resultsss = $countProductselled->fetch_assoc()) {
                                                                                                                echo $resultsss['total'];
                                                                                                    ?>
                                                                                                            <?php
                                                                                                                $i++;
                                                                                                            }
                                                                                                        } else {
                                                                                                            echo '0';
                                                                                                            ?>

                                                                                                        <?php
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>
                                                                                                    <?php
                                                                                                    }
                                                                                                    ?>

                                                                                                </b>
                                                                                            </span></td>
                                                                                        <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                                <b><?php echo number_format($results['brand_price']) ?>đ</b>
                                                                                            </span>
                                                                                        </td>
                                                                                        <td class="text-center d-none-600">
                                                                                            <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(<?php echo $results['brand_id']; ?>, <?php echo $results['brand_price']; ?>,`<?php echo $results['brand_name']; ?>` )">
                                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA
                                                                                                NGAY </button>
                                                                                        </td>
                                                                                    </tr>

                                                                                <?php
                                                                                    $i++;
                                                                                }
                                                                            } else {
                                                                                ?>
                                                                            <?php
                                                                            }
                                                                        } else {
                                                                            ?>
                                                                        <?php
                                                                        }
                                                                        ?>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    <?php
                                                        $i++;
                                                    }
                                                } else {
                                                    ?>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                            <?php
                                            }
                                            ?>





                                            <style>
                                                /* CSS cho các thiết bị có chiều rộng màn hình nhỏ hơn hoặc bằng 600px */
                                                @media only screen and (max-width: 600px) {
                                                    .hidemobile {
                                                        display: none;
                                                    }
                                                }
                                            </style>















                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-center border-top-table p-3">
                            <a type="button" href="<?php echo ASSETS_URL_ROOT . '/' ?>orders" class="btn btn-secondary btn-sm"><i class="fas fa-cart-arrow-down mr-1"></i>Lịch
                                Sử Mua Hàng</a>
                        </div>
                    </div>
                </div>
                <script>
                    // showProduct(0);

                    function showProduct(id) {
                        // $("#showProduct").html(
                        //     '<center><img src="../assets/storage/images/gif_loadingZOA.png" width="100px" /></center>');
                        if (id == 0) {
                            $(".category_id").show();
                            return
                        }
                        $(".category_id").hide(); // Hiển thị các thẻ div có class "category_id"
                        $("#category_id_" + id).show(); // Ẩn thẻ div có id "category_id_'id'"
                        console.log($("#category_id_" + id))


                    }
                </script>











                <div class="modal fade" id="modalBuy" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content" style="background-image: url('../resources/images/bg-buy.png');">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thanh toán đơn hàng</h5>
                                <button type="button" class="close" style="color: red;" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-window-close"></i>
                                </button>
                            </div>
                            <form action="" method="post">
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <label>Tên sản phẩm:</label>
                                        <input type="text" class="form-control" id="name" readonly />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Số lượng cần mua:</label>
                                        <input type="number" class="form-control form-control-solid" style="display: none;" id="price_product" />
                                        <input type="number" class="form-control form-control-solid" placeholder="Nhập số lượng cần mua" name="amount" id="amount" min="1" required onchange="totalPayment()" onkeyup="totalPayment()" />
                                        <input type="hidden" value="" readonly class="form-control" id="modal-id" name="modal-id">
                                        <input type="hidden" value="" readonly class="form-control" name="price" id="price">
                                        <input class="form-control" type="hidden" id="token" value="">
                                    </div>
                                    <div id="hotdeal"></div>
                                    <div class="form-group mb-3" id="showDiscountCode">
                                        <label>Mã giảm giá:</label>
                                        <input type="text" class="form-control" placeholder="Nhập mã giảm giá của bạn" id="coupon" />
                                    </div>

                                    <div class="mb-3 text-center" style="font-size: 20px;">Tổng tiền cần thanh
                                        toán:
                                        <b id="total" style="color:red;">0</b>
                                    </div>
                                    <div class="text-center mb-3">
                                        <button type="submit" id="btnBuy" onclick="" class="btn btn-primary btn-block"><i class="fas fa-credit-card mr-1"></i>Thanh toán</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    function buyProduct() {
                        var id = $("#modal-id").val();
                        var amount = $("#amount").val();
                        var token = $("#token").val();
                        $('#btnBuy').html('<i class="fa fa-spinner fa-spin"></i> Loading...').prop('disabled',
                            true);
                        $.ajax({
                            url: "../ajaxs/client/buyProduct.php",
                            method: "POST",
                            dataType: "JSON",
                            data: {
                                token: token,
                                id: id,
                                coupon: $("#coupon").val(),
                                amount: amount
                            },
                            success: function(data) {
                                $('#btnBuy').html('<i class="fas fa-credit-card mr-1"></i>Thanh toán')
                                    .prop(
                                        'disabled', false);
                                if (data.status == 'success') {
                                    cuteToast({
                                        type: "success",
                                        message: data.msg,
                                        timer: 5000
                                    });
                                    $urlReturn = 'https://clonesnew.com/client/orders';
                                    setTimeout("location.href = '" + $urlReturn + "';", 1000);
                                } else {
                                    Swal.fire(
                                        'Thất bại',
                                        data.msg,
                                        'error'
                                    );
                                }
                            },
                            error: function() {
                                $('#btnBuy').html('<i class="fas fa-credit-card mr-1"></i>Thanh toán')
                                    .prop(
                                        'disabled', false);
                                cuteToast({
                                    type: "error",
                                    message: 'Không thể xử lý',
                                    timer: 5000
                                });
                            }
                        });
                    }
                </script>
                <script type="text/javascript">
                    function modalBuy(id, price, name) {
                        $("#modal-id").val(id);
                        $("#price").val(price);
                        $("#name").val(name);
                        $("#total").html(0);

                        $("#modalBuy").modal();
                        $("#hotdeal").html('');
                        // $.get("../ajaxs/client/loadForm.php?id=" + id + '&type=loadHotDeal', function(data) {
                        //     $("#hotdeal").html(data);
                        // });
                    }

                    document.getElementById('showDiscountCode').style.display = 'none';

                    function showDiscountCode() {
                        if (document.getElementById('showDiscountCode').style.display == 'none') {
                            document.getElementById('btnshowDiscountCode').className = "btn btn-sm btn-dark";
                            $('#btnshowDiscountCode').html('Huỷ mã giảm giá');
                            document.getElementById('showDiscountCode').style.display = 'block';
                        } else {
                            document.getElementById('btnshowDiscountCode').className = "btn btn-sm btn-danger";
                            $('#btnshowDiscountCode').html('Nhập mã giảm giá');
                            document.getElementById('showDiscountCode').style.display = 'none';
                            document.getElementById('coupon').value = '';
                            totalPayment();
                        }
                    }

                    function totalPayment() {
                        $('#total').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...');

                        var price = parseFloat($("#price").val()); // Lấy giá trị từ phần tử có id "price"
                        var amount = parseFloat($("#amount").val()); // Lấy giá trị từ phần tử có id "amount"
                        var total = price * amount; // Tính tổng

                        $("#total").html(total.toString().replace(/(.)(?=(\d{3})+$)/g, '$1,') +
                            "đ"); // Gán giá trị vào phần tử có id "total" và thêm ký tự "đ"
                    }
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
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Không hiển thị
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



<!-- Wrapper End-->
<?php
include_once __DIR__ . '/./inc/footer.php';

?>