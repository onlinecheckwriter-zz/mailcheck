<?php
require_once __DIR__.'/vendor/autoload.php';

use onlinecheckwriter\MailCheck\Index;

$ocw = new Index();
$ocw->setToken("G5LoP94QISpOvk6i072yXDFBPwSjRS01foqlYPdVdYJ7li2NRkvzuHvYIzif");
$ocw->setEnviorment("SANDBOX");

$bank_account = $ocw->getBankAccountId(array(
        "account_number" => 99999,
        "routing_number" => "111111111"
    )
);
$to = $ocw->createPayee(array(
        "name" => "Alison Gambala1",
        "address_line_1" => "95113 mark street rod",
        "address_line_2" => "",
        "address_city" => "Sanjose",
        "address_state" => "CA",
        "address_zip" => "95113",
        "email" => "email@test.com",
        "phone" => "900244400"
    )
);
$check = $ocw->createCheck(array(
        "amount" => 255,
        "memo" => "First, Test check using API",
        "note" => "",
        "bank_account" => $bank_account['id'],
        "to" => $to['id']
    )
);
$mail = $ocw->sentMail(array(
        "id" => $check['id'],
        "mail_type" => 3
    )
);

if ($mail["completed"] == 1) {
    print ("Successfully Mail Request Sent");
} else {
    print_r($mail);
}
