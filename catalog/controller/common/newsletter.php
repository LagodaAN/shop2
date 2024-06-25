<?php
class ControllerCommonNewsletter extends Controller {
	public function index() {

    if(
      isset($this->request->post['firstname']) && strlen($this->request->post['firstname']) &&
      isset($this->request->post['lastname']) && strlen($this->request->post['lastname']) &&
      isset($this->request->post['email']) && strlen($this->request->post['email'])
    )
    {
      $error = 0;

      if(!filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
        $error = 1;
      }

      $this->load->model('catalog/newsletter');
      $email_exists = $this->model_catalog_newsletter->emailExists($this->request->post['email']);

      if($email_exists) {
        $error = 2;
      }

      if($error)
      {
        echo $error;

      } else {

        $this->model_catalog_newsletter->addCustomer($this->request->post['firstname'], $this->request->post['lastname'], $this->request->post['email']);

        echo 10;


      }


    }

	}

}
