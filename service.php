<?php
$service = new SoapClient('http://www.learnwebservices.com/services/hello?WSDL');
$result = $service->SayHello(array(
    'HelloRequest'=>array(
        'Name'=>$_GET['name']
    )
));
echo $result->HelloResponse->Message;