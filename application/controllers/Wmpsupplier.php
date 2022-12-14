<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Wmpsupplier extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
	{
		$data['home_stat']   = '';
		if ($this->session->level == '1') {
			cek_session_akses('wmpsupplier', $this->session->id_session);

		} elseif ($this->session->level == '2') {
			cek_session_akses_admin('wmpsupplier', $this->session->id_session);

		} elseif ($this->session->level == '3') {
			cek_session_akses_direktur('wmpsupplier', $this->session->id_session);

		} elseif ($this->session->level == '4') {
			cek_session_akses_general_manager('wmpsupplier', $this->session->id_session);

		}elseif ($this->session->level == '5') {
			cek_session_akses_manager('wmpsupplier', $this->session->id_session);

		}elseif ($this->session->level == '6') {
			cek_session_akses_supervisor('wmpsupplier', $this->session->id_session);

		}elseif ($this->session->level == '7') {
			cek_session_akses_staff('wmpsupplier', $this->session->id_session);

		}else {
			redirect('aspanel/home');
		}
		$this->load->view('backend/wmp_data_supplier/v_daftar', $data);
	}
  public function storage_bin()
  {
    $data['karyawan_menu_open']   = 'menu-open';
    if ($this->session->level=='1'){
      cek_session_akses('company',$this->session->id_session);
      $data['record'] = $this->Crud_m->view_join_where_ordering_field2('wmp_supplier','wmp_supplier_level','wmp_supplier_kategori','wmp_supplier_level_id',array('wmp_supplier_status'=>'0'),'wmp_supplier_id','ASC');
      }else if ($this->session->level=='2'){
        $data['record'] = $this->Crud_m->view_join_where_ordering_field2('wmp_supplier','wmp_supplier_level','wmp_supplier_kategori','wmp_supplier_level_id',array('wmp_supplier_status'=>'0'),'wmp_supplier_id','ASC');
      } else{

      }
        $this->load->view('backend/wmp_data_supplier/v_daftar_hapus', $data);
  }
  public function add()
  {
    if ($this->agent->is_browser())
        {
              $agent = 'Desktop ' .$this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
              $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
              $agent = 'Mobile' .$this->agent->mobile().''.$this->agent->version();
        }
        else
        {
              $agent = 'Unidentified User Agent';
        }

    if (isset($_POST['submit'])){
                    $data = array(
                            'wmp_supplier_post_oleh'=>$this->session->id_user,
                            'wmp_supplier_acc_no'=>$this->input->post('wmp_supplier_acc_no'),
                            'wmp_supplier_bizacc'=>$this->input->post('wmp_supplier_bizacc'),
                            'wmp_supplier_nama'=>$this->input->post('wmp_supplier_nama'),
                            'wmp_supplier_npwp'=>$this->input->post('wmp_supplier_npwp'),
                            'wmp_supplier_alamat'=>$this->input->post('wmp_supplier_alamat'),
                            'wmp_supplier_kota'=>$this->input->post('wmp_supplier_kota'),
                            'wmp_supplier_cp'=>$this->input->post('wmp_supplier_cp'),
                            'wmp_supplier_telp'=>$this->input->post('wmp_supplier_telp'),
                            'wmp_supplier_hp'=>$this->input->post('wmp_supplier_hp'),
                            'wmp_supplier_fax'=>$this->input->post('wmp_supplier_fax'),
                            'wmp_supplier_email'=>$this->input->post('wmp_supplier_email'),
                            'wmp_supplier_ppn'=>$this->input->post('wmp_supplier_ppn'),
                            'wmp_supplier_pph23'=>$this->input->post('wmp_supplier_pph23'),
                            'wmp_supplier_paymethod'=>$this->input->post('wmp_supplier_paymethod'),
                            'wmp_supplier_top'=>$this->input->post('wmp_supplier_top'),
                            'wmp_supplier_starttop'=>$this->input->post('wmp_supplier_starttop'),
                            'wmp_supplier_note'=>$this->input->post('wmp_supplier_note'),

                            'wmp_supplier_session'=>md5('wmpsupplier'.$this->input->post('wmp_supplier_bizacc') .hari_ini(date('w')) .date('Y-m-d') .date('H:i:s') ),
                            'wmp_supplier_block'=>'Yes',
                            'wmp_supplier_status'=>'21',
                            'wmp_supplier_post_hari'=>hari_ini(date('w')),
                            'wmp_supplier_post_tanggal'=>date('Y-m-d'),
                            'wmp_supplier_post_jam'=>date('H:i:s'));

                            $this->db->insert('wmp_supplier',$data);

                            $data_history_addcompany = array (
                              'log_activity_user_id'=>$this->session->id_user,
                              'log_activity_modul' => 'wmpsupplier',
                              'log_activity_bizacc' => $this->input->post('wmp_supplier_bizacc'),
                              'log_activity_document_no' => $this->input->post('wmp_supplier_acc_no'),
                              'log_activity_status' => 'Verifiying ',
                              'log_activity_platform'=> $agent,
                              'log_activity_ip'=> $this->input->ip_address()
                            );
                            $this->db->insert('log_activity', $data_history_addcompany);
                            redirect('wmpsupplier');

        }else{

            if ($this->session->level=='1'){
              cek_session_akses('wmpsupplier',$this->session->id_session);
              $data['currency'] = $this->Crud_m->view_ordering('currency','id','asc');
              $this->load->view('backend/wmp_data_supplier/v_tambahkan', $data);
            }elseif ($this->session->level=='2'){
              cek_session_akses_admin('wmpsupplier',$this->session->id_session);
              $data['currency'] = $this->Crud_m->view_ordering('currency','id','asc');
              $this->load->view('backend/wmp_data_supplier/v_tambahkan', $data);
            }elseif ($this->session->level=='3') {
              cek_session_akses_direktur('wmpsupplier',$this->session->id_session);
              $data['currency'] = $this->Crud_m->view_ordering('currency','id','asc');
              $this->load->view('backend/wmp_data_supplier/v_tambahkan', $data);
            }elseif ($this->session->level=='4') {
              cek_session_akses_general_manager('wmpsupplier',$this->session->id_session);
              $data['currency'] = $this->Crud_m->view_ordering('currency','id','asc');
              $this->load->view('backend/wmp_data_supplier/v_tambahkan', $data);
            }elseif ($this->session->level=='5') {
              cek_session_akses_manager('wmpsupplier',$this->session->id_session);
              $data['currency'] = $this->Crud_m->view_ordering('currency','id','asc');

              $this->load->view('backend/wmp_data_supplier/v_tambahkan', $data);
            }else{
              redirect('wmpsupplier');
            }
        }
  }
  public function update()
  {
    $id = $this->uri->segment(3);
    if (isset($_POST['submit'])){
                  $data = array(

                    'wmp_supplier_acc_no'=>$this->input->post('wmp_supplier_acc_no'),
                    'wmp_supplier_bizacc'=>$this->input->post('wmp_supplier_bizacc'),
                    'wmp_supplier_nama'=>$this->input->post('wmp_supplier_nama'),
                    'wmp_supplier_npwp'=>$this->input->post('wmp_supplier_npwp'),
                    'wmp_supplier_alamat'=>$this->input->post('wmp_supplier_alamat'),
                    'wmp_supplier_kota'=>$this->input->post('wmp_supplier_kota'),
                    'wmp_supplier_cp'=>$this->input->post('wmp_supplier_cp'),
                    'wmp_supplier_telp'=>$this->input->post('wmp_supplier_telp'),
                    'wmp_supplier_hp'=>$this->input->post('wmp_supplier_hp'),
                    'wmp_supplier_fax'=>$this->input->post('wmp_supplier_fax'),
                    'wmp_supplier_email'=>$this->input->post('wmp_supplier_email'),
                    'wmp_supplier_ppn'=>$this->input->post('wmp_supplier_ppn'),
                    'wmp_supplier_pph23'=>$this->input->post('wmp_supplier_pph23'),
                    'wmp_supplier_paymethod'=>$this->input->post('wmp_supplier_paymethod'),
                    'wmp_supplier_top'=>$this->input->post('wmp_supplier_top'),
                    'wmp_supplier_starttop'=>$this->input->post('wmp_supplier_starttop'),
                    'wmp_supplier_note'=>$this->input->post('wmp_supplier_note'),

                          'wmp_supplier_status'=>'21',
                          'wmp_supplier_post_hari'=>hari_ini(date('w')),
                          'wmp_supplier_post_tanggal'=>date('Y-m-d'),
                          'wmp_supplier_post_jam'=>date('H:i:s'));

                          $where = array('wmp_supplier_session' => $this->input->post('wmp_supplier_session'));
                          $this->db->update('wmp_supplier', $data, $where);


                          if ($this->agent->is_browser())
                              {
                                    $agent = 'Desktop ' .$this->agent->browser().' '.$this->agent->version();
                              }
                              elseif ($this->agent->is_robot())
                              {
                                    $agent = $this->agent->robot();
                              }
                              elseif ($this->agent->is_mobile())
                              {
                                    $agent = 'Mobile' .$this->agent->mobile().''.$this->agent->version();
                              }
                              else
                              {
                                    $agent = 'Unidentified User Agent';
                              }

                      $data_history_addcompany = array (
                        'log_activity_user_id'=>$this->session->id_user,
                        'log_activity_modul' => 'wmpsupplier',
                        'log_activity_bizacc' => $this->input->post('wmp_supplier_bizacc'),
                        'log_activity_document_no' => $this->input->post('wmp_supplier_no'),
                        'log_activity_status' => 'Modified ',
                        'log_activity_platform'=> $agent,
                        'log_activity_ip'=> $this->input->ip_address()
                      );
                      $this->db->insert('log_activity', $data_history_addcompany);

            redirect('wmpsupplier');
    }else{


      if ($this->session->level=='1'){
        cek_session_akses('wmpsupplier',$this->session->id_session);
        $proses = $this->As_m->edit('wmp_supplier', array('wmp_supplier_session' => $id))->row_array();
      }elseif ($this->session->level=='2'){
        cek_session_akses_admin('wmpsupplier',$this->session->id_session);
        $proses = $this->As_m->edit('wmp_supplier', array('wmp_supplier_session' => $id))->row_array();
      }elseif ($this->session->level=='3') {
        cek_session_akses_staff('wmpsupplier',$this->session->id_session);
        $proses = $this->As_m->edit('wmp_supplier', array('wmp_supplier_session' => $id))->row_array();
      }elseif ($this->session->level=='4') {
        cek_session_akses_manager('wmpsupplier',$this->session->id_session);
        $proses = $this->As_m->edit('wmp_supplier', array('wmp_supplier_session' => $id))->row_array();
      }elseif ($this->session->level=='5') {
        cek_session_akses_bod('wmpsupplier',$this->session->id_session);
        $proses = $this->As_m->edit('wmp_supplier', array('wmp_supplier_session' => $id))->row_array();
      }else{
        redirect(base_url());
      }
      $data = array('rows' => $proses);

      $data['currency'] = $this->Crud_m->view_ordering('currency','id','DESC');
      $this->load->view('backend/wmp_data_supplier/v_update', $data);
    }
  }

}
