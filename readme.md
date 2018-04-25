<b>Paystack Codeigniter</b> was developed to show a sample way of implememting Paystack PHP API in Codeigniter PHP framework
<br/><br/>

<b>Usage</b>
<br/>
Edit the public and secret key in application/config/constant.php
<br/>
This demo contains both Paystack InLine And Standard Implementation .<br/><br/>

<br/><br/>
It also make use of the Paystack Payment Verification Method to check and verify payment if its succesful or not .
<br/>

<b>Here’s are some cards that work on our test environment.</b>
<br/><br/>

<b>No validation</b>
<br/>
Card Number: 408 408 408 408 408 1 
<br/>
Expiry Date: any date in the future 
<br/>
CVV: 408
<br/>
<b>PIN+OTP validation (nonreusable)</b>

<br/>
Card Number: 5060 6666 6666 6666 666 (Verve)
<br/>
Expiry Date: any date in the future 
<br/>
CVV: 123 
<br/>
PIN: 1234 
<br/>
OTP: 123456
<br/>

<b>PIN only validation (reusable)</b>
<br/>
Card Number: 5078 5078 5078 5078 12 (Verve) 
<br/>
Expiry Date: any date in the future 
<br/>
CVV: 081 
<br/>
PIN: 1111
<br/>

<b>PIN+PHONE+OTP validation</b>
<br/>
Card Number: 5078 5078 5078 5078 4 (Verve) 
<br/>
Expiry Date: any date in the future 
<br/>
CVV: 884 
<br/>
PIN: 0000
<br/>
Phone: If less than 10 numeric characters, Transaction will fail.
<br/>
OTP: 123456
<br/>
<b>Bank authorization Simulation</b>
<br/>
Card Number: 408 408 0000000 409 
<br/>
Expiry Date: any date in the future 
<br/>
CVV: 000
