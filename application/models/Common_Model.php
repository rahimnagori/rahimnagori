<?php
class Common_Model extends CI_Model {
  function join_records($table, $joins, $where = false, $select = '*', $ob = false, $obc = 'DESC', $groupBy = false){
    /* https://github.com/rahimnagori/cheat-sheet/blob/master/ci_dynamic_join.php */
    $this->db->select($select);
    $this->db->from($table);
    foreach($joins as $join){
      $this->db->join($join[0], $join[1], $join[2]);
    }
    if($where) $this->db->where($where);
    if($groupBy) $this->db->group_by($groupBy);
    if($ob) $this->db->order_by($ob, $obc);
    $query = $this->db->get();
    return $query->result_array();
  }

  function fetch_records($table, $where = false, $select = false, $singleRecords = false, $orderBy = false, $orderDirection = 'DESC', $groupBy = false, $where_in_key = false, $where_in_value = false, $limit = false, $start = 0){
    if($where) $this->db->where($where);
    if($where_in_key) $this->db->where_in($where_in_key, $where_in_value);
    if($select) $this->db->select($select);
    if($groupBy) $this->db->group_by($groupBy);
    if($orderBy) $this->db->order_by($orderBy, $orderDirection);
    if($limit) $this->db->limit($limit, $start);
    $query = $this->db->get($table);
    return ($singleRecords) ? $query->row_array() : $query->result_array();
  }

  public function update($table, $where, $updateData){
    $this->db->where($where);
    return $this->db->update($table, $updateData) ? true : false;
  }

  public function insert($table, $data){
    return ($this->db->insert($table, $data)) ? $this->db->insert_id() : false;
  }

	public function delete($table, $where){
   $this->db->where($where);
    $delete = $this->db->delete($table);
    return $delete ? true : false;
  }

  public function success($message){
    return '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' .$message .'</div>';
  }

  public function error($message){
    return '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' .$message .'</div>';
  }

  public function send_mail($to, $subject, $body, $bcc = null, $attachment = false){
    /* use send_mail_new() this function now. */
    $PROJECT = $this->config->item('PROJECT');
    $fromEmail = 'info@bluediamond.com';
    $config = array();
    $config['mailtype'] = "html";
    $config['charset'] = "utf-8";
    $config['newline'] = "\r\n";
    $config['wordwrap'] = TRUE;
    $config['validate'] = FALSE;

    $this->load->library('email', $config);
    $this->email->initialize($config);

    $this->email->from($fromEmail, 'Admin');
    $this->email->to($to);
    $this->email->set_crlf("\r\n");
    $this->email->subject($subject);

    if($bcc){
      $this->email->bcc($bcc);
    }

    $msg = '<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" name="mjqemailid" content="B0WB7P9VV27ACYA96DTTHDGYXR1I0SUB">
      <tbody>
        <tr>
          <td align="center" valign="top">
            <table border="0" cellpadding="10" cellspacing="0" width="600" style="border:1px solid #ddd;margin:50px 0px 100px 0px;text-align:center;color:#363636;font-family:\'Montserrat\',Arial,Helvetica,sans-serif;background-color:white">
              <tbody>
                <tr>
                  <td align="center" valign="top" style="border-bottom:2px solid #fe8a0f;padding:0px;background:-moz-linear-gradient(top,#fff,#f6f6f6);background:-webkit-linear-gradient(top,#000000,#f6f6f6);">
                    <table border="0" cellpadding="0" cellspacing="10" width="100%">
                      <tbody>
                        <tr>
                          <td align="center" style="text-align: center;" valign="middle"><a style="font-family:\'Ubuntu\',sans-serif;color:#ff3000;font-weight:300;display:block;letter-spacing:-1.5px;text-decoration:none;margin-top:2px" href="'.site_url().'"><img src="'.site_url().'assets/site/images/logo.png" style="padding-top:0;display:inline-block;vertical-align:middle;margin-right:0px;height:55px" class="CToWUd"></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td align="center" valign="top">
                    <table border="0" cellpadding="0" cellspacing="10" width="100%">
                      <tbody>
                        <tr>
                          <td align="left" valign="top" style="color:#444;font-size:14px">
                            '.$body.'
                             <p style="margin:0;padding:10px 0px">Kind regards,<br>The '. $PROJECT .' Team</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td align="center" valign="top" style="background-color:#2b3133;color:white">
                    <table border="0" cellpadding="0" cellspacing="10" width="100%">
                      <tbody>
                        <tr>
                          <td align="left" valign="top" width="80%">
                            <div style="margin:0;padding:0;color:#fff;font-size:13px">Copyright © ' .date("Y") .' <a href="'.site_url().'" style="color:white;text-decoration:none">'. $PROJECT .'</a>. All rights reserved.</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>';

    if($attachment){
      $this->email->attach($attachment);
    }
    $this->email->message($msg);
    return ($this->email->send()) ? 1 : 0;

  }

  public function send_mail_new($to, $subject, $body, $bcc = null, $attachment = false){
    $PROJECT = $this->config->item('PROJECT');
    $fromEmail = 'info@bluediamond.com';
    $config = array();
    $config['mailtype'] = "html";
    $config['charset'] = "utf-8";
    $config['newline'] = "\r\n";
    $config['wordwrap'] = TRUE;
    $config['validate'] = FALSE;

    $this->load->library('email', $config);
    $this->email->initialize($config);

    $this->email->from($fromEmail, 'Admin');
    $this->email->to($to);
    $this->email->set_crlf("\r\n");
    $this->email->subject($subject);

    if($bcc){
      $this->email->bcc($bcc);
    }

    $pageData['body'] = $body;
    $pageData['PROJECT'] = $PROJECT;
    $msg = $this->load->view('site/include/email_template', $pageData, true);
    // $this->load->view('site/include/email_template', $pageData); /* Debug */

    if($attachment){
      $this->email->attach($attachment);
    }
    $this->email->message($msg);
    return ($this->email->send()) ? 1 : 0;

  }

}
?>