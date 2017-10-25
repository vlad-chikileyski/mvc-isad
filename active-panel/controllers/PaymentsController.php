<?php

class PaymentsController
{
    public function actionSingle($paymentsId)
    {
        if (isset($_POST['submit'])) {
            $title = $_POST['title-name'];
            $price = $_POST['price'];
            $url = $_POST['url'];
            $active = $_POST['active'];
            $paymentSave = PaymentsActivePanel::updatePayments($paymentsId, $title, $price, $url, $active);
            if (isset($paymentSave) && $paymentSave == true) {
                $userMessageOK = '<div class="alert alert-success alert-block fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <h4>
                        <i class="icon-ok-sign"></i>
                        Success!
                    </h4>
                    <p>New payment method is created
                    </p>
                </div>';
            } else {
                $userMessageERROR = '<div class="alert alert-block alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Oh no :(</strong> Change a few things up and try submitting again.
                            </div>';
            }
        }
        $getPaymentById = array();
        $getPaymentById = PaymentsActivePanel::getPaymentsByPId($paymentsId);
        require_once(ROOT . '/views/payments/single.php');
        return true;

    }


    public function actionAllPayments()
    {

        $getAllPaymentsMethod = array();
        $getAllPaymentsMethod = PaymentsActivePanel::getAllPayments();
        require_once(ROOT . '/views/payments/all-payments.php');
        return true;
    }

    public function actionNew()
    {
        if (isset($_POST['submit'])) {
            $title = $_POST['title-name'];
            $price = $_POST['price'];
            $url = $_POST['url'];
            $active = $_POST['active'];
            $paymentSave = PaymentsActivePanel::saveNewPayments($title, $price, $url, $active);
            if (isset($paymentSave) && $paymentSave == true) {
                $userMessageOK = '<div class="alert alert-success alert-block fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <h4>
                        <i class="icon-ok-sign"></i>
                        Success!
                    </h4>
                    <p>New payment method is created
                    </p>
                </div>';
            } else {
                $userMessageERROR = '<div class="alert alert-block alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Oh no :(</strong> Change a few things up and try submitting again.
                            </div>';
            }
        }
        require_once(ROOT . '/views/payments/new.php');
        return true;
    }
}