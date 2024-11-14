<?php
class EmployeeModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	public function UsersRegister($data)
	{
		$this->db->insert('tbl_alumni',
							array('firstname' => $data['firstname'],
								'lastname' => $data['lastname']
								)
						);	
		$maxid = 0;
		$row = $this->db->query('SELECT MAX(alumni_id) AS `maxid` FROM `tbl_alumni`')->row();
		if ($row) {
			$maxid = $row->maxid; 
		}
		
		$this->db->insert('tbl_accounts',
							array('username' => $data['username'],
								'password' => $data['password'],
								'status' => $data['status'],
								'acct_type' => $data['acct_type'],
								'alumni_id' => $maxid
								)
						);

		return $this->db->affected_rows();						
	}

	public function save_logs ($logdata)
	{
		$this->db->insert('tbl_logs',
							array('acct_id' => $logdata['acct_id'],
								'text' => $logdata['text'],
								'datetime' => date('Y-m-d H:i:s')
								)
						);

		return $this->db->affected_rows();						
	}



	public function getUsers()
	{
		
		$query = $this->db->get('tbl_accounts');
		return $query->result();
	}

	public function joinUserData()
	{
		$this->db->select('*');
        $this->db->from('tbl_accounts');
        $this->db->join('tbl_alumni', 'tbl_accounts.alumni_id = tbl_alumni.alumni_id');
		$query = $this->db->get();
		return $query->result();
	}

	public function joinAttendance()
	{
		$this->db->select('*');
        $this->db->from('tbl_attendance');
        $this->db->join('tbl_alumni', 'tbl_attendance.alumni_id = tbl_alumni.alumni_id');
        $this->db->join('tbl_events', 'tbl_attendance.event_id = tbl_events.event_id');
		$query = $this->db->get();
		return $query->result();
	}


	public function EmployeeRegister($data)
	{
		$this->db->insert('tbl_alumni',$data);
		return true;
	}

	public function getEmployee()
	{
		$this->db->where('etty_show',1);
		$query = $this->db->get('tbl_alumni');
		return $query->result();
	}

	
	function delete_user($acct_id) {
		$this->db->where('acct_id', $acct_id);
		$this->db->delete('tbl_accounts');

	}

	function delete_alumni($alumni_id) {
		$this->db->where('alumni_id', $alumni_id);
		$this->db->delete('tbl_alumni');
	}

	function delete_events($event_id) {
		$this->db->where('event_id', $event_id);
		$this->db->delete('tbl_events');
	}

	function delete_attendance($attend_id) {
		$this->db->where('attend_id', $attend_id);
		$this->db->delete('tbl_attendance');
	}

		public function getLogs()
	{

		$query = $this->db->get('tbl_logs');
		return $query->result();
	}
	
	public function EventsRegister($data)
	{
		$this->db->insert('tbl_events',$data);
		return true;
	}
		public function getEvents()
	{
		$this->db->select('*');
        $this->db->from('tbl_events');
			$query = $this->db->get();
		return $query->result();
	}

	public function getAttendance()
	{
	
		$query = $this->db->get('tbl_attendance');
		return $query->result();
	}

		public function AlumniRegister($data)
	{
		$this->db->insert('tbl_alumni',$data);
		return true;
	}

		public function AttendanceRegister($data)
	{
		$this->db->insert('tbl_attendance',$data);
		return true;
	}





}
