Paystack Codeigniter was developed to show a sample way of implememting Paystack PHP API in Codeigniter PHP  framework

Usage

Edit the public and secret key in application/config/constant.php


 This demo contains both Paystack InLine And Standard Implementation .
  
  It also make use of the Paystack Payment Verification Method to check and verify payment if its succesful or not .
  
  
  
  Here’s are some cards that work on our test environment.

No validation 
Card Number: 408 408 408 408 408 1 
Expiry Date: any date in the future 
CVV: 408 

PIN+OTP validation
(nonreusable)

Card Number: 5060 6666 6666 6666 666 (Verve)
Expiry Date: any date in the future
CVV: 123
PIN: 1234
OTP: 123456

PIN only validation
(reusable)

Card Number: 5078 5078 5078 5078 12 (Verve)
Expiry Date: any date in the future
CVV: 081
PIN: 1111


PIN+PHONE+OTP validation
Card Number: 5078 5078 5078 5078 4 (Verve)
Expiry Date: any date in the future
CVV: 884
PIN: 0000


Phone: If less than 10 numeric characters, Transaction will fail.
 OTP: 123456



Bank authorization Simulation
Card Number: 408 408 0000000 409
Expiry Date: any date in the future
CVV: 000
  
  
  

