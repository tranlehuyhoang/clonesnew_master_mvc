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
                    <div class="alert bg-white alert-warning" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-alert-line"></i>
                        </div>
                        <div class="iq-alert-text">Mỗi hoá đơn chỉ tồn tại trong 24 tiếng tính từ thời gian tạo,
                            vui lòng thực hiện thanh toán sau khi tạo hoá đơn.</div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Hoá Đơn</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table data-table table-striped mb-0">
                                    <thead class="table-color-heading">
                                        <tr>
                                            <th width="5%">#</th>
                                            <th>Mã giao dịch</th>
                                            <th>Phương thức thanh toán</th>
                                            <th>Số lượng</th>
                                            <th>Thanh toán</th>
                                            <th>Trạng thái</th>
                                            <th>Thời gian</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        if (isset($show_invoices)) {
                                            if ($show_invoices && $show_invoices->num_rows > 0) {
                                                $i = 0;
                                                while ($results = $show_invoices->fetch_assoc()) {
                                                    // echo print_r($results)
                                        ?>
                                        <tr>
                                            <td><?php echo $results['invoices_id'] ?></td>
                                            <td><a target="_blank"
                                                    href="../client/payment.php?bill=<?php echo $results['invoices_content'] ?>"><i
                                                        class="fas fa-file-alt"></i>
                                                    <?php echo $results['invoices_content'] ?></a></td>
                                            <td><b style="font-size:15px;">VTB</b></td>
                                            <td><b style="color: red;"><?php echo $results['invoices_price'] ?></b>
                                            </td>
                                            <td><b
                                                    style="color: green;"><?php echo number_format($results['invoices_price']) ?>đ</b>
                                            </td>
                                            <td>
                                                <?php
                                                            if ($results['invoices_status'] == '0') {
                                                            ?>
                                                <p
                                                    class="mb-0 text-warning font-weight-bold d-flex justify-content-start align-items-center">
                                                    Đang chờ thanh toán</p>
                                                <?php
                                                            } else {
                                                            ?>
                                                <p
                                                    class="mb-0 text-success font-weight-bold d-flex justify-content-start align-items-center">
                                                    Đã thanh toán</p>
                                                <?php
                                                            }
                                                            ?>

                                            </td>
                                            <td><?php echo $results['invoices_date'] ?></td>
                                            <td>
                                                <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Chi tiết hoá đơn"
                                                    href="../client/payment.php?bill=<?php echo $results['invoices_content'] ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4"
                                                        width="20" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
</div>

<?php
include_once __DIR__ . '/./inc/footer.php';

?>

<!-- Wrapper End-->