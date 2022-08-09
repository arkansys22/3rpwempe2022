<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Material extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
	{
    if ($this->session->level=='1'){
      cek_session_akses('material',$this->session->id_session);
      $proses = $this->Crud_m->view_where('material_list', array('material_list_no' => $this->input->post('material_list_no')))->row_array();
      $proses2 = $this->Crud_m->view_where('category_list', array('category_list_code' => $this->input->post('material_list_no')))->row_array();
    }elseif ($this->session->level=='2'){
      cek_session_akses_admin('material',$this->session->id_session);
      $proses = $this->Crud_m->view_where('material_list', array('material_list_no' => $this->input->post('material_list_no')))->row_array();
      $proses2 = $this->Crud_m->view_where('category_list', array('category_list_code' => $this->input->post('material_list_no')))->row_array();
    }elseif ($this->session->level=='3') {
      cek_session_akses_staff('material',$this->session->id_session);
      $proses = $this->Crud_m->view_where('material_list', array('material_list_no' => $this->input->post('material_list_no')))->row_array();
    }elseif ($this->session->level=='4') {
      cek_session_akses_manager('material',$this->session->id_session);
      $proses = $this->Crud_m->view_where('material_list', array('material_list_no' => $this->input->post('material_list_no')))->row_array();
    }elseif ($this->session->level=='5') {
      cek_session_akses_bod('material',$this->session->id_session);
      $proses = $this->Crud_m->view_where('material_list', array('material_list_no' => $this->input->post('material_list_no')))->row_array();
    }else{
      redirect(base_url());
    }
    $data = array('rows' => $proses , 'rowd' => $proses2);
    $this->load->view('backend/data_material/v_daftar', $data);
	}
  public function storage_bin()
  {
    $data['karyawan_menu_open']   = 'menu-open';
    if ($this->session->level=='1'){
      cek_session_akses('company',$this->session->id_session);
      $data['record'] = $this->Crud_m->view_join_where_ordering_field2('material_list','material_list_level','material_list_kategori','material_list_level_id',array('material_list_status'=>'0'),'material_list_id','ASC');
      }else if ($this->session->level=='2'){
        $data['record'] = $this->Crud_m->view_join_where_ordering_field2('material_list','material_list_level','material_list_kategori','material_list_level_id',array('material_list_status'=>'0'),'material_list_id','ASC');
      } else{

      }
        $this->load->view('backend/data_material/v_daftar_hapus', $data);
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
    $id = $this->uri->segment(3);
    if (isset($_POST['submit'])){
                    $data = array(
                            'material_list_post_oleh'=>$this->session->id_user,
                            'material_list_no'=>$this->input->post('material_list_no'),
                            'material_list_bizacc'=>$this->input->post('material_list_bizacc'),
                            'material_list_deskripsi'=>$this->input->post('material_list_deskripsi'),
                            'material_list_unit'=>$this->input->post('material_list_unit'),
                            'material_list_session'=>md5('material'.$this->input->post('material_list_bizacc') .hari_ini(date('w')) .date('Y-m-d') .date('H:i:s') ),
                            'material_list_block'=>'Yes',
                            'material_list_status'=>'21',
                            'material_list_post_hari'=>hari_ini(date('w')),
                            'material_list_post_tanggal'=>date('Y-m-d'),
                            'material_list_post_jam'=>date('H:i:s'));

                            $this->db->insert('material_list',$data,$where);

                            $data_history_addcompany = array (
                              'log_activity_user_id'=>$this->session->id_user,
                              'log_activity_modul' => 'Material',
                              'log_activity_bizacc' => $this->input->post('material_list_bizacc'),
                              'log_activity_document_no' => $this->input->post('material_list_no'),
                              'log_activity_status' => 'Verifiying ',
                              'log_activity_platform'=> $agent,
                              'log_activity_ip'=> $this->input->ip_address()
                            );
                            $this->db->insert('log_activity', $data_history_addcompany);
                            redirect('material');

        }else{

            if ($this->session->level=='1'){
              cek_session_akses('material',$this->session->id_session);
              $data['posts'] = $this->Crud_m->view_ordering('units','units_id','asc');
              $this->load->view('backend/data_material/v_tambahkan', $data);
            }elseif ($this->session->level=='2'){
              cek_session_akses_admin('material',$this->session->id_session);
              $proses2 = $this->Crud_m->view_ordering('units','units_id','asc');
              $proses = $this->Crud_m->view_where('category_list', array('category_list_code' => $id))->row_array();
              $data = array('rows' => $proses,'posts' => $proses2);
              $this->load->view('backend/data_material/v_tambahkan', $data);
            }elseif ($this->session->level=='3') {
              cek_session_akses_direktur('material',$this->session->id_session);
              $data['posts'] = $this->Crud_m->view_ordering('units','units_id','asc');
              $this->load->view('backend/data_material/v_tambahkan', $data);
            }elseif ($this->session->level=='4') {
              cek_session_akses_general_manager('material',$this->session->id_session);
              $data['posts'] = $this->Crud_m->view_ordering('units','units_id','asc');
              $this->load->view('backend/data_material/v_tambahkan', $data);
            }elseif ($this->session->level=='5') {
              cek_session_akses_manager('material',$this->session->id_session);
              $data['posts'] = $this->Crud_m->view_ordering('units','units_id','asc');
              $this->load->view('backend/data_material/v_tambahkan', $data);
            }else{
              redirect('material');
            }
        }
  }
  public function update()
  {
    $id = $this->uri->segment(3);
    if (isset($_POST['submit'])){
                  $data = array(

                          'material_list_bizacc'=>$this->input->post('material_list_bizacc'),
                          'material_list_deskripsi'=>$this->input->post('material_list_deskripsi'),
                          'material_list_currency'=>$this->input->post('material_list_currency'),
                          'material_list_nik'=>$this->input->post('material_list_nik'),
                          'material_list_nama'=>$this->input->post('material_list_nama'),

                          'material_list_status'=>'21',
                          'material_list_post_hari'=>hari_ini(date('w')),
                          'material_list_post_tanggal'=>date('Y-m-d'),
                          'material_list_post_jam'=>date('H:i:s'));

                          $where = array('material_list_session' => $this->input->post('material_list_session'));
                          $this->db->update('material_list', $data, $where);


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
                        'log_activity_modul' => 'material',
                        'log_activity_bizacc' => $this->input->post('material_list_bizacc'),
                        'log_activity_document_no' => $this->input->post('material_list_no'),
                        'log_activity_status' => 'Modified ',
                        'log_activity_platform'=> $agent,
                        'log_activity_ip'=> $this->input->ip_address()
                      );
                      $this->db->insert('log_activity', $data_history_addcompany);

            redirect('material');
    }else{


      if ($this->session->level=='1'){
        cek_session_akses('material',$this->session->id_session);
        $proses = $this->As_m->edit('material_list', array('material_list_session' => $id))->row_array();
      }elseif ($this->session->level=='2'){
        cek_session_akses_admin('material',$this->session->id_session);
        $proses = $this->As_m->edit('material_list', array('material_list_session' => $id))->row_array();
      }elseif ($this->session->level=='3') {
        cek_session_akses_staff('material',$this->session->id_session);
        $proses = $this->As_m->edit('material_list', array('material_list_session' => $id))->row_array();
      }elseif ($this->session->level=='4') {
        cek_session_akses_manager('material',$this->session->id_session);
        $proses = $this->As_m->edit('material_list', array('material_list_session' => $id))->row_array();
      }elseif ($this->session->level=='5') {
        cek_session_akses_bod('material',$this->session->id_session);
        $proses = $this->As_m->edit('material_list', array('material_list_session' => $id))->row_array();
      }else{
        redirect(base_url());
      }
      $data = array('rows' => $proses);

      $data['currency'] = $this->Crud_m->view_ordering('currency','id','DESC');
      $this->load->view('backend/data_material/v_update', $data);
    }
  }
  public function acc()
  {
  		$data['home_stat']   = '';
  		if ($this->session->level == '1') {
  			cek_session_akses('material', $this->session->id_session);

  		} elseif ($this->session->level == '2') {
  			cek_session_akses_admin('material', $this->session->id_session);

  		} elseif ($this->session->level == '3') {
  			cek_session_akses_direktur('material', $this->session->id_session);

  		} elseif ($this->session->level == '4') {
  			cek_session_akses_general_manager('material', $this->session->id_session);

  		}elseif ($this->session->level == '5') {
  			cek_session_akses_manager('material', $this->session->id_session);

  		}elseif ($this->session->level == '6') {
  			cek_session_akses_supervisor('material', $this->session->id_session);

  		}elseif ($this->session->level == '7') {
  			cek_session_akses_staff('material', $this->session->id_session);

  		}else {
  			redirect('aspanel/home');
  		}
  		$this->load->view('backend/data_material/v_daftar_acc', $data);
  	}
  public function update_acc()
  {
      $id = $this->uri->segment(3);
      if (isset($_POST['submit'])){
                    $data = array(

                            'material_list_bizacc'=>$this->input->post('material_list_bizacc'),
                            'material_list_deskripsi'=>$this->input->post('material_list_deskripsi'),
                            'material_list_currency'=>$this->input->post('material_list_currency'),
                            'material_list_nik'=>$this->input->post('material_list_nik'),
                            'material_list_nama'=>$this->input->post('material_list_nama'),

                            'material_list_status'=>'21',
                            'material_list_post_hari'=>hari_ini(date('w')),
                            'material_list_post_tanggal'=>date('Y-m-d'),
                            'material_list_post_jam'=>date('H:i:s'));

                            $where = array('material_list_session' => $this->input->post('material_list_session'));
                            $this->db->update('material_list', $data, $where);


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
                          'log_activity_modul' => 'material',
                          'log_activity_bizacc' => $this->input->post('material_list_bizacc'),
                          'log_activity_document_no' => $this->input->post('material_list_no'),
                          'log_activity_status' => 'Modified ',
                          'log_activity_platform'=> $agent,
                          'log_activity_ip'=> $this->input->ip_address()
                        );
                        $this->db->insert('log_activity', $data_history_addcompany);

              redirect('cash/acc');
      }else{


        if ($this->session->level=='1'){
          cek_session_akses('material',$this->session->id_session);
          $proses = $this->As_m->edit('material_list', array('material_list_session' => $id))->row_array();
        }elseif ($this->session->level=='2'){
          cek_session_akses_admin('material',$this->session->id_session);
          $proses = $this->As_m->edit('material_list', array('material_list_session' => $id))->row_array();
        }elseif ($this->session->level=='3') {
          cek_session_akses_staff('material',$this->session->id_session);
          $proses = $this->As_m->edit('material_list', array('material_list_session' => $id))->row_array();
        }elseif ($this->session->level=='4') {
          cek_session_akses_manager('material',$this->session->id_session);
          $proses = $this->As_m->edit('material_list', array('material_list_session' => $id))->row_array();
        }elseif ($this->session->level=='5') {
          cek_session_akses_bod('material',$this->session->id_session);
          $proses = $this->As_m->edit('material_list', array('material_list_session' => $id))->row_array();
        }else{
          redirect(base_url());
        }
        $data = array('rows' => $proses);

        $data['currency'] = $this->Crud_m->view_ordering('currency','id','DESC');
        $this->load->view('backend/data_material/v_update_acc', $data);
      }
    }



}
