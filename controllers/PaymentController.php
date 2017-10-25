<?php
require_once(ROOT . '/moduls/Stripe/init.php');

class PaymentController
{
    public function actionIndex($id, $key)
    {
        if (isset($_POST['stripeToken'])) {
            // Set your secret key: remember to change this to your live secret key in production
            // See your keys here: https://dashboard.stripe.com/account/apikeys

            \Stripe\Stripe::setApiKey("sk_test_ZX4ekF5HkRVNtyhHjmRXA95t");

            // Token is created using Stripe.js or Checkout!
            // Get the payment token ID submitted by the form:
            $token = $_POST['stripeToken'];
            try {
                // Charge the user's card:
                $charge = \Stripe\Charge::create(array(
                    "amount" => 91,
                    "currency" => "gbp",
                    "description" => "Buy additional services on AdToday.co.uk",
                    "statement_descriptor" => "Custom descriptor",
                    "source" => $token,
                ));
                var_dump($charge);
            } catch (\Stripe\Error\Card $e) {
                // Since it's a decline, \Stripe\Error\Card will be caught
                $body = $e->getJsonBody();
                $err = $body['error'];

                print('Status is:' . $e->getHttpStatus() . "\n");
                print('Type is:' . $err['type'] . "\n");
                print('Code is:' . $err['code'] . "\n");
                // param is '' in this case
                print('Param is:' . $err['param'] . "\n");
                print('Message is:' . $err['message'] . "\n");
            } catch (\Stripe\Error\RateLimit $e) {
                // Too many requests made to the API too quickly
            } catch (\Stripe\Error\InvalidRequest $e) {
                // Invalid parameters were supplied to Stripe's API
            } catch (\Stripe\Error\Authentication $e) {
                // Authentication with Stripe's API failed
                // (maybe you changed API keys recently)
            } catch (\Stripe\Error\ApiConnection $e) {
                // Network communication with Stripe failed
            } catch (\Stripe\Error\Base $e) {
                // Display a very generic error to the user, and maybe send
                // yourself an email
            } catch (Exception $e) {
                // Something else happened, completely unrelated to Stripe
            }

        } else {
            $checkPaymentInfo = Payment::checkPaymentInfo($id, $key);
            if ($checkPaymentInfo == false) {
                header("HTTP/1.0 404 Not Found");
                require_once(ROOT . '/views/error/404.php');
            } else {
                $getUserIdInfoByPToken = array();
                $getUserIdInfoByPToken = Payment::getUserAdsIdByTokenAndTokenId($id, $key);
                $user_id = $getUserIdInfoByPToken["ads_id"];

                $paymentInfo = array();
                $paymentInfo = Payment::getPaymentInfoByTokenAndTokenId($id, $key);
                
                require_once(ROOT . '/views/payment/checkout.php');
                return true;
            }
        }
    }
}