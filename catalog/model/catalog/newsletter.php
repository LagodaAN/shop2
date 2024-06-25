<?php
class ModelCatalogNewsletter extends Model {


	public function emailExists($email) {


			$sql = "SELECT count(customer_id) as c FROM ". DB_PREFIX ."customer WHERE email = '" . $email ."'";

			$query = $this->db->query($sql);

      return (int)$query->row['c'];

	}

  public function addCustomer($firstname, $lastname, $email) {

			$this->db->query("INSERT INTO " . DB_PREFIX . "customer SET customer_group_id = 1, store_id = '" . (int)$this->config->get('config_store_id') . "', language_id = '" . (int)$this->config->get('config_language_id') . "', firstname = '" . $firstname . "', lastname = '" . $lastname . "', email = '" . $email . "', telephone = '', custom_field = '', salt = '" . $this->db->escape($salt = token(9)) . "', password = '" . $this->db->escape(sha1($salt . sha1($salt . sha1('subscriber')))) . "', newsletter = 1, ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "', status = 1, date_added = NOW()");


	}

}
