<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayarancs extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('product_modelcs');
    }

    function index()
    {
        $data['data'] = $this->product_model->get_all_product();
        $this->load->view('templates1/header');
        $this->load->view('templates1/sidebar2');
        // $this->load->view('templates/topbar');
        $this->load->view('costumer/pembayaran', $data);
        $this->load->view('templates1/footer');
    }

    function add_to_cart()
    {
        $data = array(
            'id' => $this->input->post('id_item'),
            'name' => $this->input->post('nama_item'),
            'price' => $this->input->post('harga'),
            'qty' => $this->input->post('quantity'),
        );
        $this->cart->insert($data);
        echo $this->show_cart();
    }

    function show_cart()
    {
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .= '
				<tr>
					<td>' . $items['name'] . '</td>
					<td>' . number_format($items['price']) . '</td>
					<td>' . $items['qty'] . '</td>
					<td>' . number_format($items['subtotal']) . '</td>
					<td><button type="button" id="' . $items['rowid'] . '" class="romove_cart btn btn-danger btn-sm">Cancel</button></td>
				</tr>
			';
        }
        $output .= '
			<tr>
				<th colspan="3">Total</th>
				<th colspan="2">' . 'Rp ' . number_format($this->cart->total()) . '</th>
             
		';
        $output .= '
        <tr>
         
         <th>
            <button type="button" id="' . number_format($this->cart->total()) . '" class="chekout_cart btn btn-primary btn-sm">chekout</button></th>
        </tr>
    ';

        return $output;
    }

    function load_cart()
    {
        echo $this->show_cart();
    }

    function delete_cart()
    {
        $data = array(
            'rowid' => $this->input->post('row_id'),
            'qty' => 0,
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }
}
