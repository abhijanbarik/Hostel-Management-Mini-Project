<?php
//change about 
$q5 = "SELECT abouthead FROM admin WHERE id=1";
$q51 = mysqli_query($con,$q5);
$disp = mysqli_fetch_array($q51);
//echo $disp['abouthead'];

$q6 = "SELECT aboutinfo FROM admin WHERE id=1";
$q61 = mysqli_query($con,$q6);
$disp2 = mysqli_fetch_array($q61);


?>
<h1 style="color:#000000"><b><u><center><?php echo $disp['abouthead']; ?></center></u></b></h1>

<h3><b>Our mission</b></h3>
<font size="+1"><?php echo $disp2['aboutinfo']; ?></font>
<p>"Disseminating of quality education to the students to develop their personality, to improve quality of life and to make them worthy citizens."</p>

<h3><b>Our Vission</b></h3>
<font size="+1"><?php echo $disp2['aboutinfo']; ?></font>
<p>"To build in each student a strong character and will power to excel globally."</p>


<h3><b>Our College</b></h3>
<font size="+1"><?php echo $disp2['aboutinfo']; ?></font>
<p>Brindavan College, Bengaluru, India is a premier educational institution of higher learning in the garden city of India, the Silicon Valley and the knowledge capital of India. The college is located in a calm, serene and eco-friendly environment in the back drop of the Hebbal lake surrounded by agricultural land and coconut groove of the University of Agricultural Sciences.</p>
<p>It is the brain child of Dr. Majed A.A. Sabha a technocrat-turned- educationist. The college is under the aegis of N.M. Academy - a registered trust committed to foster education. Mr. U.T. Fareed, M.L.A. is the President, Dr. Majed A.A. Sabha is the Chairman and Prof. V.B. Coutinho former Vice-chancellor, Gulbarga University is the Advisor.
The Brindavan College was established in 1993. It had a humble beginning with 127 students in B.A., B.Sc. and B.Com courses. It has over 1400 students from 46 overseas countries.
The college is recognized by Government, approved by All India Council for Technical Education (AICTE), New Delhi which is the statutory body to approve professional courses and affiliated to Bengaluru University, the biggest in Asia having "five star" accreditation by NAAC. (National Accreditation and Assessment Council), instituted by Government.
With more than a decade of excellence in professional education and training."</p>