<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
class Map extends CI_controller{
    public function show_map()
    {
        $this->load->view("Map");
    }
}
?>