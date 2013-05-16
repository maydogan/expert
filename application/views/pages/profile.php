<style>
    #about-content 
    {
	  float:left;
	  margin-right:50px;
	  width:300px;
	}
</style>
<html>

<?php

echo "<pre>";

print_r ($this->session->all_userdata());
print_r ($this->session->userdata('user_type'));
print_r ($this->session->userdata('user_id'));


echo "</pre>";

?>


</html>
