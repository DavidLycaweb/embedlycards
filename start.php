<?php
function embedlycards_init() {	
elgg_extend_view("page/default", "embedlycards/js");
}
elgg_register_event_handler('init','system','embedlycards_init'); 




