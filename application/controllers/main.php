<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller
 {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
		
	// 	$this->load->view("admindashboard");

	// }
   /****
*@Admin Dashboard view
*@Athulya
*@date
*@06/03/2021
****/
  public function admin()
  {
    if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
    
    $this->load->view("admindashboard");
  }
    else
        {
             redirect(base_url().'main/log');
        }

  }
   /****
*@Student Dashboard view
*@Athulya
*@date
*@06/03/2021
****/

  public function student()
  {
     if($_SESSION['logged_in']==true && $_SESSION['usertype']=='2')
        {
    
    $this->load->view("studentdashboard");
    }
    else
        {
             redirect(base_url().'main/log');
        }

  }
  /****
*@Trainer Dashboard view
*@Athulya
*@date
*@06/03/2021
****/
  public function trainer()
  {
    if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
    
    
    $this->load->view("trainerdashboard");
     }
    else
        {
             redirect(base_url().'main/log');
        }


  }
  
    
  /****
*@Login function start
*@Arsha
*@date
*@04/03/2021
****/
public function log()
{

$this->load->view('login');

}
public function academiclogin()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("email","email",'required');
$this->form_validation->set_rules("password","password",'required');
if($this->form_validation->run())
{
$this->load->model('mainmodel');
$pass=$this->input->post("password");
$email=$this->input->post("email");
$rslt=$this->mainmodel->selectpass2($email,$pass);
if($rslt)
{
$id=$this->mainmodel->getuserid2($email);
$user=$this->mainmodel->getuser2($id);
$this->load->library(array('session'));
$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status,'usertype'=>$user->usertype,'logged_in'=>(bool)true));
if($_SESSION['status']=='1'&&$_SESSION['usertype']=='0'&&$_SESSION['logged_in']==true)
{
redirect(base_url().'main/admin');
}
else if($_SESSION['status']=='1'&&$_SESSION['usertype']=='1'&&$_SESSION['logged_in']==true)
{
redirect(base_url().'main/trainer');
}
else if($_SESSION['status']=='1'&&$_SESSION['usertype']=='2'&&$_SESSION['logged_in']==true)
{
redirect(base_url().'main/student');
}
else if($_SESSION['status']=='1'&&$_SESSION['usertype']=='3'&&$_SESSION['logged_in']==true)
{
redirect(base_url().'main/student');
}
else
{
echo "waiting for approval";
}
}
else
{
echo "invalid user";
}
}
else{
redirect('main/log','refresh');
}
}

/****
*@Add batch details function start
*@Arsha
*@date
*@04/03/2021
****/
public function batch()
  {
    $this->load->view("batch");
  }
public function batchinsert()
{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
$this->load->library('form_validation');
$this->form_validation->set_rules("bname","Name",'required');
$this->form_validation->set_rules("startdate","sdate",'required');
$this->form_validation->set_rules("enddate","edate",'required');
$this->form_validation->set_rules("totalday","totalday",'required');
$this->form_validation->set_rules("totalhr","totalhr",'required');
if($this->form_validation->run())
{
$this->load->model('mainmodel');
$a=array("bname"=>$this->input->post("bname"),"startdate"=>$this->input->post("startdate"),"enddate"=>$this->input->post("enddate"),"totalday"=>$this->input->post("totalday"),"totalhr"=>$this->input->post("totalhr"));

$this->mainmodel->batchmodel($a);
redirect(base_url().'main/batch');

   }
    }
        else
        {
             redirect(base_url().'main/log');
        }

}
/****
*@View batch details function start
*@Arsha
*@date
*@04/03/2021
****/
public function batchdetail()
    {
         if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
       
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->batchdetail();
        $this->load->view('viewbatch',$data);


        }
        else
        {
             redirect(base_url().'main/log');
        }


    }
    /****
*@Delete batch details function start
*@Arsha
*@date
*@04/03/2021
****/
    public function deletebatch()
    {  
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
       
       
            $this->load->model('mainmodel');
            $id=$this->uri->segment(3);
            $this->mainmodel->deletebatch($id);
            redirect('main/batchdetail','refresh');
        }
        else
        {
             redirect(base_url().'main/log');
        }
}
/****
*@update batch details function start
*@Arsha
*@date
*@04/03/2021
****/
public function batchupdateview()
    {
       
        $this->load->model('mainmodel');
        $id=$this->uri->segment(3);
        //$id=$this->session->id;
        $data['user_data']=$this->mainmodel->batchupdateview($id);
        $this->load->view('batchupdate',$data);
       
       

    }
    public function batchupdate1()
    {
       
        $this->load->model('mainmodel');
        $a=array("bname"=>$this->input->post("bname"),
            "startdate"=>$this->input->post("startdate"),
            "enddate"=>$this->input->post("enddate"),
            "totalday"=>$this->input->post("totalday"),
            "totalhr"=>$this->input->post("totalhr"));
       
       
        if($this->input->post("update"))
        {
           // $id=$this->session->id;
            //$id=$this->uri->segment(3);
            $id=$this->input->post("id");
            $this->mainmodel->batchupdate1($a,$id);
            redirect('main/batchdetail','refresh');
        }
   

    }
    /****
*@view batch details by trainer function start
*@Arsha
*@date
*@04/03/2021
****/
    public function batchdetail2()
    {
         if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
       
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->batchdetail2();
        $this->load->view('viewbatch2',$data);


        }
        else
        {
             redirect(base_url().'main/log');
        }


    }
    /****
*@view batch details by student function start
*@Arsha
*@date
*@04/03/2021
****/
    public function studbatch()
    {
       
        $this->load->model('mainmodel');
        //$id=$this->uri->segment(3);
        $id=$this->session->id;
        $data['user_data']=$this->mainmodel->studbatch($id);
        $this->load->view('studbatch',$data);
       



}
/****
*@Add event details function start
*@Arsha
*@date
*@04/03/2021
****/
public function events()
  {
    $this->load->view("events");
  }
public function addevent()
{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$this->load->library('form_validation');
$this->form_validation->set_rules("eventname","ename",'required');
$this->form_validation->set_rules("date","date",'required');
$this->form_validation->set_rules("time","time",'required');
$this->form_validation->set_rules("duration","duration",'required');
if($this->form_validation->run())
{
$this->load->model('mainmodel');
$a=array("eventname"=>$this->input->post("eventname"),"date"=>$this->input->post("date"),"time"=>$this->input->post("time"),"duration"=>$this->input->post("duration"));

$this->mainmodel->addevent($a);
redirect(base_url().'main/events');

   }
    }
        else
        {
             redirect(base_url().'main/log');
        }

}
/****
*@Add exam details function start
*@RadhikaJaladharan
*@date
*@04/03/2021
****/

public function exam()
{
  if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->batchname();
$this->load->view('examdetails',$data);

    }
        else
        {
             redirect(base_url().'main/log');
        }

}


public function examdetails()
{

$this->load->library('form_validation');
$this->form_validation->set_rules("ename","ename",'required');
$this->form_validation->set_rules("edate","edate",'required');
$this->form_validation->set_rules("totalmark","totalmark",'required');
$this->form_validation->set_rules("subject","subject",'required');
$this->form_validation->set_rules("startingtime","time",'required');
$this->form_validation->set_rules("endingtime","time",'required');



if($this->form_validation->run())
{
$this->load->model('mainmodel');
$a=array("ename"=>$this->input->post("ename"),
"edate"=>$this->input->post("edate"),
"totalmark"=>$this->input->post("totalmark"),
"subject"=>$this->input->post("subject"),
"startingtime"=>$this->input->post("startingtime"),
"endingtime"=>$this->input->post("endingtime"),
"b_id"=>$this->input->post("batch"));
$this->mainmodel->register($a);
redirect(base_url().'main/exam');


   }

}

/****
*@View exam details function start
*@Radhika jaladharan
*@date
*@04/03/2021
****/
public function view_exam_details()
{
  if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->exam_view();
$this->load->view('exam_details_view',$data);

}
        else
        {
             redirect(base_url().'main/log');
        }
}


/****
*@Update exam details 
*@Radhika jaladharan
*@date
*@04/03/2021
****/

public function exam_update()
{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$this->load->model('mainmodel');
$id=$this->uri->segment(3);
$data['user_data']=$this->mainmodel->exam_single_data($id);
$this->load->view('examdetailupdate',$data);
}
else
        {
             redirect(base_url().'main/log');
        }
}



public function update_exam_details()
{

$a=array("ename"=>$this->input->post("ename"),
"edate"=>$this->input->post("edate"),
"totalmark"=>$this->input->post("totalmark"),
"subject"=>$this->input->post("subject"),
"startingtime"=>$this->input->post("startingtime"),
"endingtime"=>$this->input->post("endingtime"),
"b_id"=>$this->input->post("batch"));
$this->load->model('mainmodel');

if($this->input->post("update"))
{
$id=$this->input->post("id");

$this->mainmodel->update_exam($a,$id);
redirect('main/exam_update','refresh');
}
}

/****
*@Delete exam details 
*@Radhika jaladharan
*@date
*@04/03/2021
****/



public function exam_delete()
{

if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$id=$this->uri->segment(3);
$this->load->model('mainmodel');
$this->mainmodel->exam_delete($id);
redirect('main/view_exam_details','refresh');

}
else
        {
             redirect(base_url().'main/log');
        }
}


/****
*@Add Notification function 
*@Radhika jaladharan
*@date
*@04/03/2021
****/


public function notification()
{
  if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->batchname();
$this->load->view('notification',$data);
}
else
        {
             redirect(base_url().'main/log');
        }

}


public function notification_add()
{

$this->load->library('form_validation');
$this->form_validation->set_rules("notification","notification",'required');




if($this->form_validation->run())
{


$this->load->model('mainmodel');

$n=array("notification"=>$this->input->post("notification"),"b_id"=>$this->input->post("bname"),"date"=>date('y-m-d'));

$this->mainmodel->notifymodel($n);
redirect('main/notification','refresh');
}

}

/****
*@View Notification function 
*@Radhika jaladharan
*@date
*@04/03/2021
****/

public function notiadmin()
{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$this->load->model('mainmodel');
$date=date('y-m-d');
  $this->mainmodel->notidelete($date);
$data['n']=$this->mainmodel->admin_notify();
$this->load->view('admin_notify_view',$data);
}
else
        {
             redirect(base_url().'main/log');
        }

}
/****
*@Delete Notification by trainer 
*@Radhika jaladharan
*@date
*@04/03/2021
****/

public function notify_delete()
{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$id=$this->uri->segment(3);
$this->load->model('mainmodel');
$this->mainmodel->admin_delete($id);
redirect('main/notiadmin','refresh');
}
else
        {
             redirect(base_url().'main/log');
        }
}

/****
*@Update Notification by trainer 
*@Radhika jaladharan
*@date
*@04/03/2021
****/


public function admin_update()
{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$a=array("notification"=>$this->input->post("notification"));
$this->load->model('mainmodel');
$id=$this->uri->segment(3);
         
$data['user_data']=$this->mainmodel->singledata($id);
//print_r($data);
$this->mainmodel->singleselect();
$this->load->view('update_noti_view',$data);
if($this->input->post("update"))
{
$this->mainmodel->updatedetails($a,$this->input->post("id"));
redirect('main/notiadmin','refresh');
}

}
else
        {
             redirect(base_url().'main/log');
        }
}

/****
*@view event details function start
*@Arsha
*@date
*@05/03/2021
****/
public function eventdetail()
    {
         if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
       
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->eventdetail();
        $this->load->view('eventsview',$data);


        }
        else
        {
             redirect(base_url().'main/log');
        }


    }
    /****
*@Delete event details function start
*@Arsha
*@date
*@05/03/2021
****/
    public function deleteevent()
    {  
       
       
       
            $this->load->model('mainmodel');
            $id=$this->uri->segment(3);
            $this->mainmodel->deleteevent($id);
            redirect('main/eventdetail','refresh');
        }
         /****
*@view event details by students function start
*@Arsha
*@date
*@05/03/2021
****/
        public function eventdetail2()
    {
         if($_SESSION['logged_in']==true && $_SESSION['usertype']=='2')
        {
       
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->eventdetail2();
        $this->load->view('studevent',$data);


        }
        else
        {
             redirect(base_url().'main/log');
        }


    }
    /****
*@view event details by admin function start
*@Arsha
*@date
*@05/03/2021
****/
        public function eventdetail3()
    {
         if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
       
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->eventdetail3();
        $this->load->view('adminevent',$data);


        }
        else
        {
             redirect(base_url().'main/log');
        }


    }

    /************

*@view exam details by student
*@Radhika Jaladharan
*@date : 05/03/2021

**************/
public function viewexam()
    {
       if($_SESSION['logged_in']==true && $_SESSION['usertype']=='2')
        {
        $this->load->model('mainmodel');
        //$id=$this->uri->segment(3);
        $id=$this->session->id;
        $data['n']=$this->mainmodel->viewexam($id);
        $this->load->view('studentviewexam',$data);

        }
        else
        {
             redirect(base_url().'main/log');
        }

}
/************

*@view exam notification by admin
*@Radhika Jaladharan
*@date : 05/03/2021

**************/

public function examnotification()
{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->examnotifications();
$this->load->view('examnotiadmin',$data);
 }
        else
        {
             redirect(base_url().'main/log');
        }

}

/************

*@view notification by admin
*@Radhika Jaladharan
*@date : 05/03/2021

**************/

public function notificationview()
{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->notifications();
$this->load->view('notificationviewadmin',$data);

 }
        else
        {
             redirect(base_url().'main/log');
        }
}

/************

*@view notification by student
*@Radhika Jaladharan
*@date : 05/03/2021

**************/
public function notificationviewstudent()
    {
       if($_SESSION['logged_in']==true && $_SESSION['usertype']=='2')
        {
        $this->load->model('mainmodel');
        //$id=$this->uri->segment(3);
        $id=$this->session->id;
        $data['n']=$this->mainmodel->notificationviewstudent($id);
        $this->load->view('notificationviewstudent',$data);
       
 }
        else
        {
             redirect(base_url().'main/log');
        }
}
/************

*@Add Holidays by trainer
*@Radhika Jaladharan
*@date : 05/03/2021

**************/


public function holiday()
{if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->holiday();
$this->load->view('add_holidays',$data);
 }
        else
        {
             redirect(base_url().'main/log');
        }
}



public function holidays_add()
{

$this->load->library('form_validation');
$this->form_validation->set_rules("holiday","holiday",'required');
if($this->form_validation->run())
{
$this->load->model('mainmodel');
$day=$this->input->post("holiday");

$n=$this->input->post("bname");

$qry=$this->mainmodel->add_holiday($n);
$days=$qry+$day;
$qry1=$this->mainmodel->set_totalday($days,$n);

redirect('main/holiday','refresh');

}
}
/************

*@adding timetable by trainer
*@Radhika Jaladharan
*@date : 05/03/2021

**************/

public function timetable()
{
  if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->batch1();
$this->load->view('timetable',$data);
 }
        else
        {
             redirect(base_url().'main/log');
        }

}



public function timetableadd()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("date","date",'required');
$this->form_validation->set_rules("first","first",'required');
$this->form_validation->set_rules("second","second",'required');
$this->form_validation->set_rules("third","third",'required');
$this->form_validation->set_rules("fourth","fourth",'required');
$this->form_validation->set_rules("fifth","fifth",'required');
$this->form_validation->set_rules("sixth","sixth",'required');
$this->form_validation->set_rules("seventh","seventh",'required');
$this->form_validation->set_rules("eighth","eighth",'required');



if($this->form_validation->run())
{
$this->load->model('mainmodel');
$a=array("date"=>$this->input->post("date"),
"first"=>$this->input->post("first"),
"second"=>$this->input->post("second"),
"third"=>$this->input->post("third"),
"fourth"=>$this->input->post("fourth"),
"fifth"=>$this->input->post("fifth"),
"sixth"=>$this->input->post("sixth"),
"seventh"=>$this->input->post("seventh"),
"eighth"=>$this->input->post("eighth"),
"b_id"=>$this->input->post("batch"));
$this->mainmodel->timetable($a);
redirect(base_url().'main/timetable');

   }

}

/************

*@view timetable by trainer
*@Radhika Jaladharan
*@date : 05/03/2021

**************/

public function timetableview()
{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$this->load->model('mainmodel');
 
$data['n']=$this->mainmodel->timetabletrainer();
$this->load->view('timetabletrainer',$data);
 }
        else
        {
             redirect(base_url().'main/log');
        }


}

/************

*@delete timetable by trainer
*@Radhika Jaladharan
*@date : 05/03/2021

**************/

public function delete()
{

$id=$this->uri->segment(3);
$this->load->model('mainmodel');
$this->mainmodel->timetabledelete($id);
redirect('main/timetableview');
}

/****
*@logout function start
*@Arsha
*@date
*@06/03/2021
****/
public function logout()
    {
        $data=new stdClass();
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true)
        {
            foreach ($_SESSION as $key => $value)
            {
               unset($_SESSION[$key]);
            }
            $this->session->set_flashdata('logout_notification','logged_out');
            redirect('main/log','refresh');
        }
        else{
            redirect('main/log','refresh');
        }
    }


/************

*@View performance chart by admin
*@Radhika Jaladharan
*@date : 06/03/2021

**************/

public function chart()
{
  if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->mark();
$this->load->view('chart',$data);
}
        else
        {
             redirect(base_url().'main/log');
        }

}

/********
*@calendar
*@Sunu sukesan
*@date : 06/03/2021

**************/

public function searchaction()
    {
      if($_SESSION['logged_in']==true && $_SESSION['usertype']=='2')
        {
        $this->load->model('mainmodel');
        $date=$this->input->post("dat");
        $batch=$this->input->post("bname");
        $data['n']=$this->mainmodel->viewtimetable($date,$batch);
        $this->load->view('fview',$data);
      }
       else
        {
             redirect(base_url().'main/log');
        }


    }
    
public function search()
{
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->viewdate();
$this->load->view('search',$data);
}


}
	