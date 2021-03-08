<?php
class mainmodel extends CI_model
{
  public function selectpass2($email,$pass)
{
$this->db->select('password');
$this->db->from("login");
$this->db->where("email","$email");
$query=$this->db->get()->row('password');
return $query;
}

public function getuserid2($email)
{
$this->db->select('id');
$this->db->from("login");
$this->db->where("email",$email);
return $this->db->get()->row('id');

}
public function getuser2($id)
{
$this->db->select('*');
$this->db->from("login");
$this->db->where("id",$id);
return $this ->db->get()->row();

}
/****
*@Add batch details function start
*@Arsha
*@date
*@04/03/2021
****/
public function batchmodel($a)
{
$this->db->insert("batch",$a);
}
/****
*@view batch details function start
*@Arsha
*@date
*@04/03/2021
****/
public function batchdetail()
{

$this->db->select('*');
$qry=$this->db->get("batch");
return $qry;

}
/****
*@Delete batch details function start
*@Arsha
*@date
*@04/03/2021
****/
public function deletebatch($id)
{
$this->db->select('*');
$this->db->where('id',$id);
$this->db->delete("batch");
}
/****
*@Update batch details function start
*@Arsha
*@date
*@04/03/2021
****/
public function batchupdateview($id)

{
$this->db->select('*');
$this->db->where("id",$id);
$qry=$this->db->get("batch");
return $qry;
}
public function batchupdate1 ($a,$id)
{
        $this->db->select('*');
        $this->db->where("id",$id);
        $qry=$this->db->update("batch",$a);
        return $qry;


}
/****
*@view batch details by trainer function start
*@Arsha
*@date
*@04/03/2021
****/
public function batchdetail2()
{

$this->db->select('*');
$qry=$this->db->get("batch");
return $qry;

}
/****
*@view batch details by student function start
*@Arsha
*@date
*@04/03/2021
****/
public function studbatch($id)
{
$this->db->select('*');
$this->db->from("login");
$this->db->where("id",$id);
$qry=$this->db->get()->row('usertype');
if($qry==2)
{
$this->db->select('*');
$this->db->where("id",'2');
$qry=$this->db->get("batch");
return $qry;


}
elseif($qry==3)
{
$this->db->select('*');
$this->db->where("id",'1');
$qry=$this->db->get("batch");
return $qry;


}
else{
echo "no data found";
}


}
public function addevent($a)
{
$this->db->insert("event",$a);
}
public function register($a)
{

$this->db->insert("exam",$a);

}
public function  exam_view()
{
$this->db->select('*');
$this->db->join('batch','batch.id=exam.b_id','inner');
$qry=$this->db->get("exam");
return $qry;

}

public function exam_delete($id)
{
$this->db->where("eid",$id);
$this->db->delete("exam");

}



public function exam_single_data($id)
{
$this->db->select('*');
$this->db->where("eid",$id);
$qry=$this->db->get("exam");
return $qry;

}
public function update_exam($a,$id)
{
$this->db->select('*');
$qry=$this->db->where("eid",$id);
$qry=$this->db->update("exam",$a);
return $qry;
}



public function batchname()
{
$this->db->select('*');
$qry=$this->db->get("batch");
return $qry;

}
// notification

public function notifymodel($n)
{
$this->db->insert("notification",$n);

}
public function  admin_notify()
{
$this->db->select('*');
$this->db->join('batch','batch.id=notification.b_id','inner');
$qry=$this->db->get("notification");
return $qry;

}

//admin delete:notification
public function admin_delete($id)
{
$this->db->where("nid",$id);
$this->db->delete("notification");

}

//admin update:notification

public function singledata($id)
{
$this->db->select('*');
$this->db->where("nid",$id);
$qry=$this->db->get("notification");
return $qry;

}
public function singleselect()
{
$qry=$this->db->get("notification");
return $qry;
}

public function updatedetails($a,$id)
{
$this->db->select('*');
$qry=$this->db->where("nid",$id);
$qry=$this->db->update("notification",$a);
return $qry;
}



public function notidelete($date)
{
$this->db->where('date<',$date);
$this->db->delete("notification");

}
//user view of notification//
public function  user_notify()
{
$this->db->select('*');
$this->db->join('flight','flight.id=notification.f_id','inner');
$qry=$this->db->get("notification");
return $qry;

}

/****
*@view event details function start
*@Arsha
*@date
*@05/03/2021
****/
public function eventdetail()
{

$this->db->select('*');
$qry=$this->db->get("event");
return $qry;

}
/****
*@Delete event details function start
*@Arsha
*@date
*@05/03/2021
****/
public function deleteevent($id)
{
$this->db->select('*');
$this->db->where('id',$id);
$this->db->delete("event");
}

/****
*@view event details by student function start
*@Arsha
*@date
*@05/03/2021
****/
public function eventdetail2()
{

$this->db->select('*');
$qry=$this->db->get("event");
return $qry;

}
/****
*@view event details by admin function start
*@Arsha
*@date
*@05/03/2021
****/
public function eventdetail3()
{

$this->db->select('*');
$qry=$this->db->get("event");
return $qry;

}
  
 /************

*@exam notification view by student
*@Radhika Jaladharan
*@date : 05/03/2021

**************/

public function viewexam($id)
{
$this->db->select('*');
$this->db->from("login");
$this->db->where("id",$id);
$qry=$this->db->get()->row('usertype');
if($qry==2)
{
$this->db->select('*');
$this->db->where("b_id",'2');
$qry=$this->db->get("exam");
return $qry;


}
elseif($qry==3)
{
$this->db->select('*');
$this->db->where("b_id",'1');
$qry=$this->db->get("exam");
return $qry;


}
else{
echo "no data found";
}


}

/************

*@Exam Notification view by admin
*@Radhika Jaladharan
*@date : 05/03/2021

**************/
public function examnotifications()
{
$this->db->select('*');

$this->db->join('batch','batch.id=exam.b_id','inner');
$qry=$this->db->get("exam");
return $qry;

}
 /************

*@Notification view by admin
*@Radhika Jaladharan
*@date : 05/03/2021

**************/  

public function notifications()
{
$this->db->select('*');

$this->db->join('batch','batch.id=notification.b_id','inner');
$qry=$this->db->get("notification");
return $qry;

}

/************

*@Notification view by student
*@Radhika Jaladharan
*@date : 05/03/2021

**************/

public function notificationviewstudent($id)
{
$this->db->select('*');
$this->db->from("login");
$this->db->where("id",$id);
$qry=$this->db->get()->row('usertype');
if($qry==2)
{
$this->db->select('*');
$this->db->where("b_id",'2');
$qry=$this->db->get("notification");
return $qry;


}
elseif($qry==3)
{
$this->db->select('*');
$this->db->where("b_id",'1');
$qry=$this->db->get("notification");
return $qry;


}
else{
echo "no data found";
}


}



/************

*@Add Holidays by trainer
*@Radhika Jaladharan
*@date : 05/03/2021

**************/



public function holiday()
{
$this->db->select('*');
$qry=$this->db->get("batch");
return $qry;

}
public function add_holiday($n)
{
$this->db->select('totalday');
$this->db->from('batch');
$this->db->where('id',$n);
$qry=$this->db->get()->row('totalday');
return $qry;
}

public function set_totalday($days,$n)
{

$this->db->set('totalday',$days,FALSE);
$this->db->where('id',$n);
$qry=$this->db->update('batch');

}
/************

*@add timetable
*@Radhika Jaladharan
*@date : 05/03/2021

**************/

public function timetable($a)
{
$this->db->insert("timetable",$a);

}


/************

*@Timetable view by trainer
*@Radhika Jaladharan
*@date : 05/03/2021

**************/
public function timetabletrainer()
{

$this->db->select('*');
$this->db->join('batch','batch.id=timetable.b_id','inner');
$qry=$this->db->get("timetable");
return $qry;

}

public function timetabledelete($id)
{
$this->db->where("id",$id);
$this->db->delete("timetable");

}
public function batch1()
{
$this->db->select('*');
$qry=$this->db->get("batch");
return $qry;

}
/************

*@View performance chart by admin
*@Radhika Jaladharan
*@date : 06/03/2021

**************/

public function mark()
{
$this->db->select('*');
$qry=$this->db->get("marks");
return $qry;

}
/********
*@search calendar
*@sunu
*@date : 06/03/2021

**************/
public function viewdate()
{
$this->db->select('*');
$qry=$this->db->get("batch");
return $qry;
}

public function viewtimetable($date,$batch)
{
$this->db->select('*');
$qry=$this->db->join('batch','batch.id=timetable.b_id','inner');
$this->db->where("timetable.date",$date);
$this->db->where("timetable.b_id",$batch);
$qry=$this->db->get('timetable');
return $qry;
}


}
?>