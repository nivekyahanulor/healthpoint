<?php

namespace Payment;
use Omnipay\Omnipay;
class Payment

{

   /**

    * @return mixed

    */

   public function gateway()

   {

       $gateway = Omnipay::create('PayPal_Express');

       $gateway->setUsername("sb-6lee625047003@personal.example.com");
       $gateway->setPassword("zM,_ayk1");
       $gateway->setSignature("ELr8KV93-k1cQ-uol4b5CgzYMtyrIcWAHoLHAcYOv0PwrTbxqLzN8J-mJGep9sOMFPG8TsNcuL-r_Y6C");
       $gateway->setTestMode(true);
       return $gateway;

   }

   /**

    * @param array $parameters

    * @return mixed

    */

   public function purchase(array $parameters)

   {

       $response = $this->gateway()
           ->purchase($parameters)
           ->send();

       return $response;

   }

   /**

    * @param array $parameters

    */

   public function complete(array $parameters)

   {

       $response = $this->gateway()
           ->completePurchase($parameters)
           ->send();

       return $response;
   }

   /**

    * @param $amount

    */

   public function formatAmount($amount)

   {
       return number_format($amount, 2, '.', '');
   }

   /**

    * @param $order

    */

   public function getCancelUrl($order = "")

   {
       return $this->route('http://phpstack-275615-1077014.cloudwaysapps.com/cancel.php', $order);
   }

   /**

    * @param $order

    */

   public function getReturnUrl($order = "")

   {

       return $this->route('http://phpstack-275615-1077014.cloudwaysapps.com/return.php', $order);
   }

   public function route($name, $params)

   {
       return $name; // ya change hua hai
   }
}