<?php
class ControllerCommonNewsletterTemplate extends Controller {
	public function index() {

    $this->load->language('common/newsletter');

		$data['title'] = $this->language->get('newsletter_h1');
    $data['talk'] = $this->language->get('talk');
    $data['firstname'] = $this->language->get('firstname');
    $data['lastname'] = $this->language->get('lastname');
    $data['email'] = $this->language->get('email');
    $data['firstname_input'] = $this->language->get('firstname_input');
    $data['lastname_input'] = $this->language->get('lastname_input');
    $data['email_input'] = $this->language->get('email_input');
    $data['subscribe'] = $this->language->get('subscribe');
    $data['no_thanks'] = $this->language->get('no_thanks');

		echo $this->load->view('common/newsletter_template', $data);
	}
}
