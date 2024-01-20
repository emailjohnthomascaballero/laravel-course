<!-- Encapsulation:

-Bundling data (properties) and the code that operates on that data (methods) within a single unit (class).
-Controls access to data and methods using visibility modifiers:
  public: accessible from anywhere.
  private: accessible only within the class.
  protected: accessible within the class and its subclasses. -->

<?php
class BankAccount {
  // Private property: Only accessible within the class
  private $balance = 0;

  // Public methods: Provide controlled access to the balance
  public function deposit($amount) {
    $this->balance += $amount;
    echo "Deposited $amount. New Balance: $this->balance <br>";
  }

  public function withdraw($amount) {
    if ($this->balance >= $amount) {
      $this->balance -= $amount;
      echo "You withdraw $amount. Your remaining balance is: $this->balance";
      return true;
    } else {
      echo "You can't withdraw $amount. Insufficient funds!. Your current balance is: $this->balance";
      return false;
    }
  }
}

$myBank = new BankAccount();
$myBank->deposit(5_000);
$myBank->withdraw(6_000);
?>

<!-- Explanation:

-The balance property is private, like a secret diary page. It can only be accessed within the BankAccount class methods.
-The deposit and withdraw methods act as the key, allowing controlled access to check and change the balance. -->