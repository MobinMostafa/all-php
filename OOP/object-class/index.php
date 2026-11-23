<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>php class and object practice</h1>


    <?php

     class BankAccount 
     {
        public $accountNumber;
        public $balance;
        public $amount;

        public function deposit($amount)
        {
            if($amount > 0){
               return $this->balance += $amount;
                
            }
        }
        public function withdraw($amount) 
        {
             echo $amount;
            if($amount <= $this->balance){
             
             return $this->balance -= $amount;
             
            }
           
        }
     }
     
     $account = new BankAccount();
     $account->accountNumber = 1;
     $user_balance =  $account->balance = 100;
     $user_deposit = $account->deposit(100);
     $user_withdraw = $account->withdraw(150);
    //  echo $user_withdraw->amount

    //  echo $user_balance . "<br>";
    //  echo $user_deposit;

    ?>

    <h2>Your old balance is : <?php echo $user_balance; ?> </h2>
    <h2>Your new balance is : <?php echo $user_deposit; ?> </h2>
    <!-- <h2>Your withdraw balance is :  </h2> -->
    <h2>After withdraw your new balance is : <?php echo $user_withdraw; ?> </h2>

</body>
</html>