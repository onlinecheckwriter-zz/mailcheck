<?php
require_once __DIR__ . '/vendor/autoload.php';
use onlinecheckwriter\MailCheck\Index;

$ocw = (new Index())->setToken("G5LoP94QISpOvk6i072yXDFBPwSjRS01foqlYPdVdYJ7li2NRkvzuHvYIzif")
    ->setEnviorment("SANDBOX");
$bank_account = $this
    ->ocw
    ->getBankAccountId(array(
    "account_number" => 99999,
    "routing_number" => "111111111"
));
$to = $this
    ->ocw
    ->createPayee(array(
    "name" => "Alison Gambala1",
    "address_line_1" => "95113 mark street rod",
    "address_line_2" => "",
    "address_city" => "Sanjose",
    "address_state" => "CA",
    "address_zip" => "95113",
    "email" => "email@test.com",
    "phone" => "900244400"
));
$check = $this
    ->ocw
    ->createCheck(array(
    "amount" => 100,
    "memo" => "First, Test check using API",
    "note" => "",
    "bank_account" => $bank_account['id'],
    "to" => $payee['id']
));
$mail = $this
    ->ocw
    ->sentMail(array(
    "id" => $check['id'],
    "mail_type" => 3
));
if ($mail["completed"] == 1)
{
    print ("Succesfully Mail Request Sent");
}
else
{
    print_r($mail);
}
