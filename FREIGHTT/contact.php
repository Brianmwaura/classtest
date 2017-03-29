<?php include"header.php" ?>
<?php include"nav.php" ?>
<style>
h3{
padding-left:30px;
}

 .jaypy{
 border:ridge;
 background-color:#000000;}
 .brian{
 border:ridge;
 background-color:#000000;}
 .ammon{
 border:ridge;
 background-color:#000000;}
.kev{font-family:Georgia, "Times New Roman", Times, serif;
float:right;
}
.bony{
padding-left:30px;
background:#FFFFFF;
}
.address{border:ridge;
background-color:#55ACEE;
opacity:0.8;
color:#000000;}

.mercy{
border:ridge;
color:#FFFFFF;
opacity:0.8;
padding-top:20px;
padding-bottom:20px;
}
h3{background-color:#000000;
color:#FFFFFF;}
.row{
padding-left:50px;
padding-right:50px;
}
.form-group{

padding-left:50px;
padding-right:50px;
padding-bottom:25px;}
.btn{
margin-left:150px;}

#contacts ul{display:table; width:100%; height:100%; border:none;}
#contacts ul li{display:table-cell; width:33%; height:100%; padding:5% 2%; border:solid; border-collapse:collapse; border-width:0 1px 0 0;}
#contacts ul li:last-child{border:0;}
#contacts ul li *{margin:0; padding:0; line-height:normal;}
#contacts ul li div{position:relative; padding-left:65px; word-wrap:break-word;}
#contacts ul li div i{display:block; position:absolute; top:-2px; left:0; width:50px; font-size:46px; line-height:1;}
#contacts ul li div .heading{font-size:1.2rem;}
#contacts{opacity:0.8;color:#FFFFFF;;}
#contacts li:hover{background:#000000;}
#contacts ul, #contacts ul li{border-color:#000000;}
#contacts ul li{padding:25px; border-width:0 0 1px 0;}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

<div class="container">
     <center> <p><h2>Talk to us!</h2></p></center>
	<!--the trial-->
	 <div class="col-sm-6">
  <div id="contacts">
     <ul>
      <li>
        <div>
          <h2>BUSINESS HOURS</h2>
          <p>Mon-Fri:8.00AM-5.00PM</p>
        </div>
      </li>
      <li>
        <div>
          <h2>CALL CENTRE</h2>
         <p>+254711961805</p>
			<p>+254703177123</p>
			<p>+254799213484</p>
        </div>
      </li>
      <li>
        <div>
          <h2>EMAIL</h2>
          <p>flashfreight@gmail.com</p>
        </div>
      </li>
	   <li>
        <div>
         <h2>POSTAL ADDRESS</h2>
		<p>FLASH FREIGHT</p>
		<p>P.O BOX 79921-00100</p>
		<p>NAIROBI</p></center>
        </div>
      </li>
    </ul>
  </div>

</div>
 <div class="col-sm-6 ">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.70077602336!2d36.79834882975819!3d-1.258236452740491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1ssw!2ske!4v1489681378712" width="400" height="490" frameborder="0" style="border:0" allowfullscreen></iframe><br /><br />
        </div>
</div>

 	<!--the trial-->
<div class="container">	
<div class="row">
	
		<br /><br />
     	 <div class="col-sm-12">
     <center><h2>Ask us!</h2></center>
<form action="dbcon.php"  method="post">

<div class="form-group">
<label>Username</label>
<input name="name" type="text" class="form-control" placeholder="username" /></div>
<div class="form-group">
<label> Email Address</label>
<input name="email" type="email" class="form-control" placeholder="email" /></div>
<div class="form-group">
<label> Message</label>

<input name="message" type="text" class="form-control" placeholder="message" /></div>
<div class="btn">
<div style="text-align:center">
<button name="submit" type="submit" class="btn btn-warning">Submit</button>
<button type="submit" class="btn btn-info"
data-dismiss="modal">Close</button></div>
<br/>
<br/>
</form> </div>		
  <div>   
<center><h1>Other branches</h1></center>
		<div class="row">
<div class="col-sm-4">

      <div class="address">
        <h3>MOMBASA</h3>
       <p>ADDRESS:NYALI<p>
	  <p> MAIL ADDRESS:</p>
	  <p>PO BOX 45612-00200</p>
	   <p>Mombasa,KENYA</p>
		<p>PHONE:+254798364469</p>			
         </div><br><br>
      </div>
	  <div class="col-sm-4">
      <div class="address">
        <h3>NAKURU</h3>
       <p>ADDRESS:<p>
	  <p> MAIL ADDRESS:</p>
	  <p>PO BOX 75891-00300</p>
	   <p>Nakuru,KENYA</p>
		<p>PHONE:+254712722920</p>		
       </div><br><br>
      </div><div class="col-sm-4 ">
      <div class="address">
        <h3>MACHAKOS</h3>
       <p>ADDRESS:MLOLONGO<p>
	  <p> MAIL ADDRESS:</p>
	  <p>PO BOX 12546-00200</p>
	   <p>Machakos,KENYA</p>
		<p>PHONE:+254719316544</p>		
      </div> </div>      
		</div>
	
  

</div>
</div>
</div>
<?php include "footer.php"?>