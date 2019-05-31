<?
class apiModel{

    public function __construct($parent){
        $this->db = $parent->db;
    }

    public function googleDrive($term=''){

        $client = new Google_client();
        $client->setApplicationName("SSL");
        $client->setDeveloperKey("AIzaSyAxeGU1hI6XZ1Lo4EtlDUCacLVpepw2RhE");

        $service = new Google_Service_Drive($client);
        $result = $service->files->get($term);
        return $result;



    }
}


?>