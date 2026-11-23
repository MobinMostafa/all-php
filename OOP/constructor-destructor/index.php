<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constructor and destructor practice</title>
</head>
<body>
    <h1>constructor and destructor practice</h1>

    <?php
     class BankAccount 
     {
        public $accountNumber; 
        public $balance;

        public function __construct($accountNumber, $balance) 
        {
            $this->accountNumber = $accountNumber;
		    $this->balance = $balance;
      
        }
        // function userAccount(){
        //     return $this->balance;
        // }
     }

     $account  = new BankAccount(1,100);
     echo $account->balance

    
    ?>
</body>
</html>