<?php


// 10. Class: Account
echo "\n\t 10. Class: Account \n";// new line

class Account{
    public $accountNumber;
    public $balance;
    public $owner;

    //Constructor to initialize the properties
    public function __construct($accountNumber, $balance, $owner){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        $this->owner = $owner;
    }

    public function deposit($amount){
        if ($amount > 0){
            $this->balance += $amount;
            return "$". $amount ." Deposit Successful! \n";
        } 
        else 
            return "Invalid amount! \n";
    }

    public function withdraw($amount){
        if ($amount > 0 && $amount <= $this->balance){
            $this->balance -= $amount;
            return "$".$amount ." Withdrawal Successful! \n";
        } 
        else 
            return "Invalid amount or insuffient funds! \n";
    }

    public function getBalance(){
        return $this->owner . ", Account No. " . $this->accountNumber .", Balance: $" . $this->balance .  "\n";
    }
}

// creating object

$myAccount = new Account("CB6001", 5000, "Mobarak Ali");
echo $myAccount->getBalance();
echo $myAccount->deposit(500);
echo $myAccount->withdraw(1530);
echo $myAccount->getBalance();


//end