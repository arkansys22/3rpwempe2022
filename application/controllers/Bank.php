<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bank extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	/*	Bagian untuk Data Bank - Pembuka	*/
	public function index()
	{
		$data['home_stat']   = '';
		if ($this->session->level == '1') {
			cek_session_akses('data_bank', $this->session->id_session);
			$data['record'] = $this->Bank_model->bank_view(array('blocked' => 'No'), 'id', 'ASC');
		} elseif ($this->session->level == '2') {
			cek_session_akses_admin('data_bank', $this->session->id_session);
			$data['record'] = $this->Bank_model->bank_view(array('blocked' => 'No'), 'id', 'ASC');
		} elseif ($this->session->level == '3') {
			cek_session_akses_admin('data_bank', $this->session->id_session);
			$data['record'] = $this->Bank_model->bank_view(array('blocked' => 'No'), 'id', 'ASC');
		} else {
			redirect('aspanel/home');
		}
		$this->load->view('backend/data_bank/v_daftar', $data);
	}
	public function data_bank_storage_bin()
	{
		$data['home_stat']   = '';

		if ($this->session->level == '1') {
			$data['record'] = $this->Crud_m->view_join_where2_ordering('user', 'user_level', 'level', 'user_level_id', array('user_stat' => 'delete'), 'id_user', 'DESC');
		} elseif ($this->session->level == '2') {
			$data['record'] = $this->Crud_m->view_join_where2_ordering('user', 'user_level', 'level', 'user_level_id', array('user_stat' => 'delete'), 'id_user', 'DESC');
		} else {
			redirect('aspanel/home');
		}
		cek_session_akses('data_bank', $this->session->id_session);
		$this->load->view('backend/data_bank/v_daftar_hapus', $data);
	}
	public function data_bank_tambahkan()
	{

		if (isset($_POST['submit'])) {
			$config['upload_path'] = 'bahan/foto_bank/';
			$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';

			$this->upload->initialize($config);
			$this->upload->do_upload('gambar');
			$hasil22 = $this->upload->data();
			// $config['image_library'] = 'gd2';
			// $config['source_image'] = './bahan/foto_bank/' . $hasil22['file_name'];
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['quality'] = '80%';
			$config['width'] = 800;
			$config['height'] = 800;
			// $config['new_image'] = './bahan/foto_bank/' . $hasil22['file_name'];
			// $this->load->library('image_lib', $config);
			// $this->image_lib->resize();

			$data = array(
				'id' => $this->input->post('id'),
				'description' => $this->input->post('description'),
				'currency' => $this->input->post('currency'),
				'account' => $this->input->post('account'),
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'status_id' => '2',
				'blocked' => 'No',
				'create_user' => $this->session->username,
				'create_date' => date('Y-m-d H:i:s')
			);

			$this->Bank_model->tambah_bank($data);
			if ($this->agent->is_browser()) {
				$agent = 'Desktop ' . $this->agent->browser() . ' ' . $this->agent->version();
			} elseif ($this->agent->is_robot()) {
				$agent = $this->agent->robot();
			} elseif ($this->agent->is_mobile()) {
				$agent = 'Mobile' . $this->agent->mobile() . '' . $this->agent->version();
			} else {
				$agent = 'Unidentified User Agent';
			}

			$data_history_bank = array(
				'module' => 'Bank',
				// 'document_no' => 'Bank',
				'activity' => 'Create',
				'user_id' => $this->session->username,
				'create_date' => date('Y-m-d H:i:s'),
				'ip_address' => $this->input->ip_address(),
				'plat_form' => $agent
			);
			$this->db->insert('pastes_log_activity', $data_history_bank);

			redirect('bank');
		} else {
			$data['bank_menu_open']   = 'menu-open';

			if ($this->session->level == '1') {
				cek_session_akses('data_bank', $this->session->id_session);
				$data['records_currency'] = $this->Crud_m->view_ordering('paste_accounting_currency', 'name', 'ASC');
			} elseif ($this->session->level == '2') {
				$data['records_currency'] = $this->Crud_m->view_ordering('currency', 'name', 'ASC');
			} else {
				redirect('aspanel/home');
			}

			$this->load->view('backend/data_bank/v_tambahkan', $data);
		}
	}

	public function data_bank_update()
	{

		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])) {

			$config['upload_path'] = 'bahan/foto_bank/';
			$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
			$this->upload->initialize($config);
			// $this->upload->do_upload('gambar');
			// $hasil22 = $this->upload->data();
			// $config['image_library'] = 'gd2';
			// $config['source_image'] = './bahan/foto_bank/' . $hasil22['file_name'];
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['quality'] = '80%';
			$config['width'] = 800;
			$config['height'] = 800;
			// $config['new_image'] = './bahan/foto_bank/' . $hasil22['file_name'];
			// $this->load->library('image_lib', $config);
			// $this->image_lib->resize();
			// $pass = sha1($this->input->post('password'));

			$data = array(
				'description' => $this->input->post('description'),
				'currency' => $this->input->post('currency'),
				'account' => $this->input->post('account'),
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'modified_user' => $this->session->username,
				'modified_date' => date('Y-m-d H:i:s')
			);

			$where = array('id' => $this->input->post('id'));
			// $_image = $this->db->get_where('user', $where)->row();
			$query = $this->db->update('paste_finance_bank', $data, $where);
			// if ($query) {
			// 	unlink("bahan/foto_bank/" . $_image->user_gambar);
			// }

			if ($this->agent->is_browser()) {
				$agent = 'Desktop ' . $this->agent->browser() . ' ' . $this->agent->version();
			} elseif ($this->agent->is_robot()) {
				$agent = $this->agent->robot();
			} elseif ($this->agent->is_mobile()) {
				$agent = 'Mobile' . $this->agent->mobile() . '' . $this->agent->version();
			} else {
				$agent = 'Unidentified User Agent';
			}

			$data_history_bank = array(
				'module' => 'Bank',
				// 'document_no' => 'Bank',
				'activity' => 'Modified',
				'user_id' => $this->session->username,
				'create_date' => date('Y-m-d H:i:s'),
				'ip_address' => $this->input->ip_address(),
				'plat_form' => $agent
			);
			$this->db->insert('pastes_log_activity', $data_history_bank);

			redirect('bank');
		} else {
			$proses = $this->Bank_model->edit('paste_finance_bank', array('id' => $id))->row_array();

			if ($this->session->level == '1') {
				cek_session_akses('data_bank', $this->session->id_session);
				$data = array('rows' => $proses);
				$data['records_currency'] = $this->Crud_m->view_ordering('currency', 'name', 'ASC');
			} elseif ($this->session->level == '2') {
				$data = array('rows' => $proses);
				$data['records_currency'] = $this->Crud_m->view_ordering('currency', 'name', 'ASC');
			} else {
			}
			$this->load->view('backend/data_bank/v_update', $data);
		}
	}
	function data_bank_delete_temp()
	{
		cek_session_akses('data_bank', $this->session->id_session);
		$data = array('user_stat' => 'delete');
		$where = array('id_user' => $this->uri->segment(3));
		$this->db->update('user', $data, $where);
		redirect('aspanel/data_bank');
	}
	function data_bank_restore()
	{
		cek_session_akses('data_bank', $this->session->id_session);
		$data = array('user_stat' => 'Publish');
		$where = array('id_user' => $this->uri->segment(3));
		$this->db->update('user', $data, $where);
		redirect('aspanel/data_bank_storage_bin');
	}
	public function data_bank_delete()
	{
		cek_session_akses('data_bank', $this->session->id_session);
		$id = $this->uri->segment(3);
		$_id = $this->db->get_where('user', ['id_user' => $id])->row();
		$query = $this->db->delete('user', ['id_user' => $id]);
		$_id2 = $this->db->get_where('user_detail', ['id_user' => $id])->row();
		$query2 = $this->db->delete('user_detail', ['id_user' => $id]);
		if ($query) {
			unlink("./bahan/foto_bank/" . $_id->user_gambar);
		}
		redirect('aspanel/data_bank_storage_bin');
	}
	public function logbank()
	{
		if ($this->session->level == '1') {
			cek_session_akses('activities', $this->session->id_session);
			$data['record'] = $this->Crud_m->view_join_ordering2('log_activity', 'user', 'log_activity_user_id', 'id_user', 'log_activity_id', 'DESC');
		} elseif ($this->session->level == '2') {
			cek_session_akses_admin('activities', $this->session->id_session);
			$data['record'] = $this->Crud_m->view_join_ordering2('log_activity', 'user', 'log_activity_user_id', 'id_user', 'log_activity_id', 'DESC');
		} else {
			cek_session_akses_staff('activities', $this->session->id_session);
			redirect('aspanel/profil');
		}
		$this->load->view('backend/data_bank/v_logbank', $data);
	}
	/*	Bagian untuk Data Bank - Penutup	*/
}
