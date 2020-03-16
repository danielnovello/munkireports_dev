<?php 

/**
 * google_chrome class
 *
 * @package munkireport
 * @author 
 **/
class google_chrome_controller extends Module_controller
{
	
    /*** Protect methods with auth! ****/
    function __construct()
    {
        // Store module path
        $this->module_path = dirname(__FILE__);
    }
	
    /**
     * Get google_chrome information for serial_number
     *
     * @param string $serial serial number
     **/
    public function get_data($serial_number = '')
    {
        $obj = new View();

        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
        }
        $columns = [
            'item1',
        ];

        $out = google_chrome_model::select($columns)
            ->whereSerialNumber($serial_number)
            ->filter()
            ->limit(1)
            ->first()
            ->toArray();

        $obj->view('json', array('msg' => $out));
    }

    public function get_list()
    {
        $obj = new View();
        $out = google_chrome_model::selectRaw('item1, count(*) AS count')
            ->filter()
            ->groupBy('item1')
            ->orderBy('count', 'desc')
            ->get()
            ->toArray();

        $obj->view('json', array('msg' => $out));
}

} // END class google_chrome_controller
