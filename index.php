<?php

include('Services/Twilio.php'); 


function a(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Hello, We have schedule your computer repair service appointment on Oct 20 2016 at 10 a.m. Our agent Rahul(+919884412345) will contact you before reaching your village(Adavad). Thanks!"); 
    echo $response;
} 


function a1(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Hello, We have schedule your Projector repair service appointment on Oct 21 2016 at 11 a.m. Our agent Anil(+919884412346) will contact you before reaching your village(Adavad). Thanks!"); 
    echo $response;
} 

function b(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Hello, We have schedule your computer repair service appointment on Oct 20 2016 at 8 a.m. Our agent Aakash(+919884412347) will contact you before reaching your village(Chahardi). Thanks!"); 
    echo $response;
} 


function b1(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Hello, We have schedule your Projector repair service appointment on Oct 21 2016 at 9 a.m. Our agent Ram(+919884412348) will contact you before reaching your village(Chahardi). Thanks!"); 
    echo $response;
} 

function c(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Hello, We have schedule your computer repair service appointment on Oct 20 2016 at 8 a.m. Our agent Parag(+919884412347) will contact you before reaching your village. Thanks!"); 
    echo $response;
} 


function c1(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Hello, We have schedule your Projector repair service appointment on Oct 21 2016 at 9 a.m. Our agent Nikhil(+919884412348) will contact you before reaching your village. Thanks!"); 
    echo $response;
} 

function d(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Hello, We have schedule your Repair service appointment on Oct 21 2016 at 9 a.m. Our agent Nikhil(+919884412348) will contact you before reaching your village. Thanks!"); 
    echo $response;
} 


$body = $_REQUEST['Body']; 
if(stripos($body, "REPAIR" )!== FALSE and stripos($body, "425303" )!== FALSE and stripos($body, "computer")!== FALSE)
{
 a();
}
 else if(stripos($body, "REPAIR" )!== FALSE and stripos($body, "425303" )!== FALSE and stripos($body, "projector")!== FALSE)
{
 a1();
}

 else if(stripos($body, "REPAIR" )!== FALSE and stripos($body, "425107" )!== FALSE and stripos($body, "computer")!== FALSE)
{
 b();
}
 else if(stripos($body, "REPAIR" )!== FALSE and stripos($body, "425107" )!== FALSE and stripos($body, "projector")!== FALSE)
{
 b1();
}

 else if(stripos($body, "REPAIR" )!== FALSE  and stripos($body, "computer")!== FALSE)
{
 v3();
}

 else if(stripos($body, "REPAIR" )!== FALSE  and stripos($body, "projector")!== FALSE)
{
 c();
}

 else if(stripos($body, "REPAIR" )!== FALSE)
{
 c1();
}

else
{ 
 $message = "There is some error. Please try again";
 echo $message;
}

