<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	var $table = 'profiles';
	var $id = 'id';
	var $tableJoin = '';
	var $column_order = ['id','fname','lname'];
	var $column_search = ['address','fname'];

   public function __construct()
	{
		parent::__construct();
		$this->load->model('my_model', 'my');
   }

	public function ajax_list()
   {
      $list = $this->my->get_datatables();
      $data = [];
      $no = 1;

      foreach($list as $li){
        $row = [];
        $row[] = $no++;
		$row[] = $li->fname;
		$row[] = $li->lname;
		$row[] = $li->address;
        $data[] = $row;
      }

      $output = [
         'draw'            => $_POST['draw'],
         'recordsTotal'    => $this->my->count_all(),
         'recordsFiltered' => $this->my->count_filtered(),
         'data'            => $data
      ];

      echo json_encode($output);
	}

	public function get_data()
   {
      $data = $this->my->get_by_id($this->input->post('id', true));
    //   $data = $this->my->get_by_id("1");
      echo json_encode($data);
	}

	public function action()
	{
		$this->form_validation->set_rules('category_name','Category','trim|required');

		if($this->form_validation->run() != false){
			$data = [
				'category_name' 	=> $this->input->post('category_name', true),
				'slug'				=> slugify($this->input->post('category_name', true)),
				'is_active'			=> $this->input->post('is_active', true)
			];

			$id = $this->input->post('id', true);

			// For Update
			if(!empty($id)){
				$this->my->update(['id' => $id], $data);
				$status = true;
			}
			// For Insert
			else{
				$this->my->save($data);
				$status = true;
			}

			echo json_encode(["status" => $status]);
		}
	}

	public function delete(){
		$this->my->delete($this->input->post('id', true));
		echo json_encode(["status" => TRUE]);
	}
    public function ajax_test()
    {
       $list = $this->my->get_datatables();
       var_dump($list);
       die;
     }

}

/* End of file Category.php */
