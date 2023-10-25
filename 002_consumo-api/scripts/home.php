<?php
defined('CONTROL') or die('Acesso Negado!');

// Get all countries data
$api = new ApiConsumer();

// $countries = $api->get_all_countries();

// Get a specific country data
$country = $api->get_country('brazil');

?>

<!-- <div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h3>Vamos Consumir uma API com PHP Puro!</h3>
        </div>
    </div>
</div> -->


<pre>
    <?php // print_r($countries); ?>    
    <?php print_r($country); ?>
</pre>