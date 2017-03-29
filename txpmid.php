<?php
extract ($_POST);
error_reporting(0);
$cp="prod";              //values are "cert" or "prod"
$PaymentType = "CC";   //uncomment to limit to credit cards.
$Gateway_ID = "9079024815";
$HostedKey = "e6e8a545-928f-4d5e-a7ab-f15ec4a16217";
$RURL = "http://www.oceaneditors.com/response.php";  //Replace this with your response page
$CURL = "http://www.oceaneditors.com/cancel.php";    //Replace this with your cancel page

$IndustryCode = "2";       //values  "2" = eCommerce
$AVSRequired = "Y";        //values "Y" or "N"
$CVV2Required = "Y";       //values "Y" or "N"
$EmailRequired = "Y";      //values "Y" or "N"
$PostRspMsg = "Y";         //values "Y" or "N"
//$Amount = "50.00";         //uncomment if you want a set dollar amount passed

if ($Amount === "0.00") {}else{
if ($RecurringType == "A") {$Amount = "NA";}
if ($RecurringType == "A" && $PaymentFrequency == "90")
  {$RecurringType = "N";$Amount = $RecurringAmount;}
if ($RecurringType == "N" && $Amount == "" && $RecurringAmount > 0){$Amount = $RecurringAmount;}}  
if ($CustRefID1){$CustRefID = $CustRefID . "," . $CustRefID1;}
$PhoneNumber = preg_replace("/[^\d]/","", $PhoneNumber);
if(strlen($PhoneNumber) == 10) {
	$PhoneNumber = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $PhoneNumber);
}  else {$PhoneNumber = "";}
$CustRefID = substr($CustRefID,0,50);
if ($Amount<>"NA" && $Amount > 0) {$Amount = number_format($Amount,2,".","");}
if ($RecurringAmount > 0) {$RecurringAmount = number_format($RecurringAmount,2,".","");}

//===============================================================
switch ($cp) {
	case "cert":
		$URL = "https://hosted.cert.transactionexpress.com";
		break;
	case "prod":
		$URL = "https://hosted.transactionexpress.com";
		break;}  
$x ='<html><body onload="document.frmReturn.submit()">';
$x .='<form action="' . $URL . '" method="post" name="frmReturn" id="frmReturn">';
$x .= '<input type="hidden" name="Gateway_ID"	value="' . $Gateway_ID . '">';
$x .= '<input type="hidden" name="HostedKey"	value="' . $HostedKey . '">';
$x .= '<input type="hidden" name="RURL"	        value="' . $RURL . '">';
$x .= '<input type="hidden" name="CURL" 	value="' . $CURL . '">';
$x .= '<input type="hidden" name="RecurringType" value="' . $RecurringType . '">';
$x .= '<input type="hidden" name="PaymentType"	value="' . $PaymentType . '">';
$x .= '<input type="hidden" name="AVSRequired"	value="' . $AVSRequired . '">';
$x .= '<input type="hidden" name="CVV2Required"	value="' . $CVV2Required . '">';
$x .= '<input type="hidden" name="EmailRequired" value="' . $EmailRequired . '">';
$x .= '<input type="hidden" name="PostRspMsg"   value="' . $PostRspMsg . '">';
$x .= '<input type="hidden" name="Amount"	value="' . $Amount . '">';
$x .= '<input type="hidden" name="CustRefID"	value="' . $CustRefID . '">';
$x .= '<input type="hidden" name="TaxIndicator"	value="' . $TaxIndicator . '">';
$x .= '<input type="hidden" name="TaxAmount"	value="' . $TaxAmount . '">';
$x .= '<input type="hidden" name="PONumber"	value="' . $PONumber . '">';
$x .= '<input type="hidden" name="ShipToZip"	value="' . $ShipToZip . '">';
$x .= '<input type="hidden" name="FullName"	value="' . $FullName . '">';
$x .= '<input type="hidden" name="Address1"	value="' . $Address1 . '">';
$x .= '<input type="hidden" name="Address2"	value="' . $Address2 . '">';
$x .= '<input type="hidden" name="City"	        value="' . $City . '">';
$x .= '<input type="hidden" name="State"	value="' . $State . '">';
$x .= '<input type="hidden" name="Zip"	        value="' . $Zip . '">';
$x .= '<input type="hidden" name="PhoneNumber"	value="' . $PhoneNumber . '">';
$x .= '<input type="hidden" name="Email"	value="' . $Email . '">';
$x .= '<input type="hidden" name="Descriptor"	value="' . $Descriptor . '">';
$x .= '<input type="hidden" name="SECCode"	value="' . $SECCode . '">';
$x .= '<input type="hidden" name="IndustryCode"	value="' . $IndustryCode . '">';
$x .= '<input type="hidden" name="WalletDescription"	value="' . $WalletDescription . '">';
$x .= '<input type="hidden" name="PaymentFrequency"	value="' . $PaymentFrequency . '">';
$x .= '<input type="hidden" name="NumberOfPayments"	value="' . $NumberOfPayments . '">';
$x .= '<input type="hidden" name="StartDate"	value="' . $StartDate . '">';
$x .= '<input type="hidden" name="RecurringAmount"	value="' . $RecurringAmount . '">';
$x .=  "</form></body></html>";echo $x;
