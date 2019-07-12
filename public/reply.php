<?php
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>


<?php

    $people  = array(

        '+254729545572' => 'Brian Kigo',
        '+254791547833' => 'Kwangwaru1',
        '+25440448427' => 'Kwangwaru2',
        


);


    if(!$name = $people[$_REQUEST['From']]){


        $name = "nobody";


    }


?>



<Response>


    <Sms><?php echo "Niaje ". $name . " ati sasa hii ni auto reply message" ?> </Sms>


</Response>

