Paystack Codeigniter was developed to show a sample way of implememting <a herf="http://paystack.com/">Paystack</a> API in Codeigniter PHP  framework

<h1>Usage</h1>

Edit the public and secret key in application/config/constant.php


<b> This demo contains both Paystack InLine And Standard Implementation . </b>
  
  It also make use of the Paystack Payment Verification Method to check and verify payment if its succesful or not .
  
  
  
 <h1> Here’s are some cards that work on our test environment.</h1>
<br/><br/>
No validation <br/>
Card Number: 408 408 408 408 408 1 <br/>
Expiry Date: any date in the future <br/>
CVV: 408 <br/>
<br/><br/>
<b>PIN+OTP validation</b>
<br/>(nonreusable)

Card Number: 5060 6666 6666 6666 666 (Verve)<br/>
Expiry Date: any date in the future<br/>
CVV: 123<br/>
PIN: 1234<br/>
OTP: 123456<br/>
<br/><br/>
<b>PIN only validation</b>
<br/>(reusable)
<br/><br/>
Card Number: 5078 5078 5078 5078 12 (Verve)<br/>
Expiry Date: any date in the future<br/>
CVV: 081<br/>
PIN: 1111<br/>

<br/><br/>
<b>PIN+PHONE+OTP validation</b><br/><br/>
Card Number: 5078 5078 5078 5078 4 (Verve)<br/>
Expiry Date: any date in the future<br/>
CVV: 884<br/>
PIN: 0000<br/>


Phone: If less than 10 numeric characters, Transaction will fail.
<br/> OTP: 123456

<br/><br/>

<b>Bank authorization Simulation</b><br/><br/>
Card Number: 408 408 0000000 409<br/>
Expiry Date: any date in the future<br/>
CVV: 000<br/>
  
 
