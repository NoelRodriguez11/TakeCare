<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscador extends CI_Controller {
    
    function index()
    {
        $this->load->view('profesional/r');
    }
    
    function fetch()
    {
        $output = '';
        $query = '';
        $this->load->model('ajaxsearch_model');
        if($this->input->post('query'))
        {
            $query = $this->input->post('query');
        }
        $data = $this->ajaxsearch_model->fetch_data($query);
        $output .= '
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                   <th>Nombre Profesional</th>
                   <th>Especialidad</th>
                   <th>Provincia</th>
                </tr>
  ';
        if($data->num_rows() > 0)
        {
            foreach($data->result() as $row)
            {
                $output .= '
                              <tr>
                                   <td>'.$row->nombre.'</td>
                                   <td>'.$row->especialidad->nombre.'</td>
                                   <td>'.$row->provincia.'</td>
                              </tr>
                            ';
            }
        }
        else
        {
            $output .= '
                            <tr>
                                <td colspan="5">No Data Found</td>
                            </tr>';
        }
        $output .= '</table>';
        echo $output;
    }
    
}
