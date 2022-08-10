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
      $data['record'] = $this->Crud_m->view_join_where_ordering_field2('finance_cash','finance_cash_level','finance_cash_kategori','finance_cash_level_id',array('finance_cash_status'=>'0'),'finance_cash_id','ASC');
      }else if ($this->session->level=='2'){
        $data['record'] = $this->Crud_m->view_join_where_ordering_field2('finance_cash','finance_cash_level','finance_cash_kategori','finance_cash_level_id',array('finance_cash_status'=>'0'),'finance_cash_id','ASC');
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
                            'finance_cash_post_oleh'=>$this->session->id_user,
                            'finance_cash_no'=>$this->input->post('finance_cash_no'),
                            'finance_cash_bizacc'=>$this->input->post('finance_cash_bizacc'),
                            'finance_cash_deskripsi'=>$this->input->post('finance_cash_deskripsi'),
                            'finance_cash_currency'=>$this->input->post('finance_cash_currency'),
                            'finance_cash_nik'=>$this->input->post('finance_cash_nik'),
                            'finance_cash_nama'=>$this->input->post('finance_cash_nama'),
                            'finance_cash_session'=>md5('wmpsupplier'.$this->input->post('finance_cash_bizacc') .hari_ini(date('w')) .date('Y-m-d') .date('H:i:s') ),
                            'finance_cash_block'=>'Yes',
                            'finance_cash_status'=>'21',
                            'finance_cash_post_hari'=>hari_ini(date('w')),
                            'finance_cash_post_tanggal'=>date('Y-m-d'),
                            'finance_cash_post_jam'=>date('H:i:s'));

                            $this->db->insert('finance_cash',$data,$where);

                            $data_history_addcompany = array (
                              'log_activity_user_id'=>$this->session->id_user,
                              'log_activity_modul' => 'wmpsupplier',
                              'log_activity_bizacc' => $this->input->post('finance_cash_bizacc'),
                              'log_activity_document_no' => $this->input->post('finance_cash_no'),
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

                          'finance_cash_bizacc'=>$this->input->post('finance_cash_bizacc'),
                          'finance_cash_deskripsi'=>$this->input->post('finance_cash_deskripsi'),
                          'finance_cash_currency'=>$this->input->post('finance_cash_currency'),
                          'finance_cash_nik'=>$this->input->post('finance_cash_nik'),
                          'finance_cash_nama'=>$this->input->post('finance_cash_nama'),

                          'finance_cash_status'=>'21',
                          'finance_cash_post_hari'=>hari_ini(date('w')),
                          'finance_cash_post_tanggal'=>date('Y-m-d'),
                          'finance_cash_post_jam'=>date('H:i:s'));

                          $where = array('finance_cash_session' => $this->input->post('finance_cash_session'));
                          $this->db->update('finance_cash', $data, $where);


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
                        'log_activity_bizacc' => $this->input->post('finance_cash_bizacc'),
                        'log_activity_document_no' => $this->input->post('finance_cash_no'),
                        'log_activity_status' => 'Modified ',
                        'log_activity_platform'=> $agent,
                        'log_activity_ip'=> $this->input->ip_address()
                      );
                      $this->db->insert('log_activity', $data_history_addcompany);

            redirect('wmpsupplier');
    }else{


      if ($this->session->level=='1'){
        cek_session_akses('wmpsupplier',$this->session->id_session);
        $proses = $this->As_m->edit('finance_cash', array('finance_cash_session' => $id))->row_array();
      }elseif ($this->session->level=='2'){
        cek_session_akses_admin('wmpsupplier',$this->session->id_session);
        $proses = $this->As_m->edit('finance_cash', array('finance_cash_session' => $id))->row_array();
      }elseif ($this->session->level=='3') {
        cek_session_akses_staff('wmpsupplier',$this->session->id_session);
        $proses = $this->As_m->edit('finance_cash', array('finance_cash_session' => $id))->row_array();
      }elseif ($this->session->level=='4') {
        cek_session_akses_manager('wmpsupplier',$this->session->id_session);
        $proses = $this->As_m->edit('finance_cash', array('finance_cash_session' => $id))->row_array();
      }elseif ($this->session->level=='5') {
        cek_session_akses_bod('wmpsupplier',$this->session->id_session);
        $proses = $this->As_m->edit('finance_cash', array('finance_cash_session' => $id))->row_array();
      }else{
        redirect(base_url());
      }
      $data = array('rows' => $proses);

      $data['currency'] = $this->Crud_m->view_ordering('currency','id','DESC');
      $this->load->view('backend/wmp_data_supplier/v_update', $data);
    }
  }


  public function acc()
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
  		$this->load->view('backend/wmp_data_supplier/v_daftar_acc', $data);
  	}
  public function update_acc()
  {
      $id = $this->uri->segment(3);
      if (isset($_POST['submit'])){
                    $data = array(

                            'finance_cash_bizacc'=>$this->input->post('finance_cash_bizacc'),
                            'finance_cash_deskripsi'=>$this->input->post('finance_cash_deskripsi'),
                            'finance_cash_currency'=>$this->input->post('finance_cash_currency'),
                            'finance_cash_nik'=>$this->input->post('finance_cash_nik'),
                            'finance_cash_nama'=>$this->input->post('finance_cash_nama'),

                            'finance_cash_status'=>'21',
                            'finance_cash_post_hari'=>hari_ini(date('w')),
                            'finance_cash_post_tanggal'=>date('Y-m-d'),
                            'finance_cash_post_jam'=>date('H:i:s'));

                            $where = array('finance_cash_session' => $this->input->post('finance_cash_session'));
                            $this->db->update('finance_cash', $data, $where);


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
                          'log_activity_bizacc' => $this->input->post('finance_cash_bizacc'),
                          'log_activity_document_no' => $this->input->post('finance_cash_no'),
                          'log_activity_status' => 'Modified ',
                          'log_activity_platform'=> $agent,
                          'log_activity_ip'=> $this->input->ip_address()
                        );
                        $this->db->insert('log_activity', $data_history_addcompany);

              redirect('cash/acc');
      }else{


        if ($this->session->level=='1'){
          cek_session_akses('wmpsupplier',$this->session->id_session);
          $proses = $this->As_m->edit('finance_cash', array('finance_cash_session' => $id))->row_array();
        }elseif ($this->session->level=='2'){
          cek_session_akses_admin('wmpsupplier',$this->session->id_session);
          $proses = $this->As_m->edit('finance_cash', array('finance_cash_session' => $id))->row_array();
        }elseif ($this->session->level=='3') {
          cek_session_akses_staff('wmpsupplier',$this->session->id_session);
          $proses = $this->As_m->edit('finance_cash', array('finance_cash_session' => $id))->row_array();
        }elseif ($this->session->level=='4') {
          cek_session_akses_manager('wmpsupplier',$this->session->id_session);
          $proses = $this->As_m->edit('finance_cash', array('finance_cash_session' => $id))->row_array();
        }elseif ($this->session->level=='5') {
          cek_session_akses_bod('wmpsupplier',$this->session->id_session);
          $proses = $this->As_m->edit('finance_cash', array('finance_cash_session' => $id))->row_array();
        }else{
          redirect(base_url());
        }
        $data = array('rows' => $proses);

        $data['currency'] = $this->Crud_m->view_ordering('currency','id','DESC');
        $this->load->view('backend/wmp_data_supplier/v_update_acc', $data);
      }
    }



}
