
<?php

	include("class/user.php");
	$submit = new user;
				
?>
<!doctype html>
<html>
<head>
		<title> Recruitment  </title>
		<title>Receptionist</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		
		<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
 
  padding-left : 10px;
  padding-right: 10px;
  padding-top : 10px;
  padding-bottom : 10px;
  border-spacing: 30px;
  
}
table.rounded_corner{
	border-radius:13px;
	margin : 0 auto;
    width : 100%;
}
select{
	width : 220px;
	height : 25px;
}
.submitbutton{
	font-weight: bold;
}

		</style>
			
			
</head>
		
		
		
		
<body onload = "changeFont('cnum'); changeFont('source'); changeFont('department'); changeFont('profile'); changeFont('subsource'); changeFont('consultancy'); changeFont('consultancy')">
		
	<br>	
<!-----
	<div id="container" >
		
			<div class = "col-sm-3" style = "visibility:hidden">
			</div>
			<div class = "col-sm-6">
				
				<div class = "row"   >
					
					<div class = "col-sm-4" align = "right">	
					</div>
					<div class = "col-sm-4" align = "center">
						<img src="img/cis.jpg" alt=""  width = "160" height = "75" />
					</div>
					<div class = "col-sm-4" align = "center	">
						<button type="submit" class="btn btn-default" name = "logout" style="width: 100px; height: 45px;"><font face = "Times New Roman" size="4"><b>Logout</b></font></button>
					</div>
					
				</div>
			</div>	
		
	</div>
	----->

<div id="container" align="center" >
    <img src="img/cis.jpg" alt=""  width = "160" height = "75" />
</div>
	
	
		 
	
			
			
	<div class="container" >
	<div class="row">
	
	
	<!--- This div is hidden in order to make the form at center-->
	<div class = "col-sm-3" style = "visibility:hidden">
	</div>
	<!----->
	
	
	<div class = "col-sm-6">
		<form action = "#" method = "post">
			<div align = "right">
				<a type="submit" name = "logout" href = "logout.php" style="width: 100px; height: 45px;"><font face = "Times New Roman" size="4" color = "01a0c7"><b>Logout</b></font></a>
			</div>
		</form>
	
		
		
		
		<!---- This is panel Heading------>
		<div class="panel panel-primary" >
			<div class = "panel-heading" align = "center"  style="background-color:#081450;"><font face = "Times New Roman"><h3><b>Enter Candidate's Details</b></h3></font>
			</div>
		</div>
		<!-------------------->
			
		<form action="add candidate.php" method = "post"  onsubmit = "return Validate()">
			<table class ="rounded_corner">
				<col width="650">
				<col width="350">
				<tr>
					<div class="">
						<td>	
							
							<label class="name"><font face = "Times New Roman" size = "4"><b>Candidate Number</b></font></label>				
						</td>
					</div>
					<div class="">
						<td>		
							<?php
							// select last entry of database and generate new candidate number.
								
								$query = "SELECT cnum FROM candidate WHERE cnum = (SELECT MAX(cnum) FROM candidate)";
								$query1 = "SELECT TOP 1 * FROM details ORDER BY cnum DESC";
								$result = $submit->conn->query($query);
								$row = $result->fetch_assoc();
								$cnumber = $row['cnum'];
								$substring = explode("-",$cnumber);
								$new_num = ++$substring[2];
								if($new_num < "10"){
									$new_num = "00".$new_num;
								}else if($new_num < "100" && $new_num >= 10){
									$new_num = "0".$new_num;
								}
										//echo $new_num;
										//$lastsubstring = "00".++$substring[2];
										
								$new_c_num = date("Y-m-") .$new_num ;
								
											
							?>
							
							<!----------Set candidate number to id = "cnum"------------------->
							<INPUT id = "cnum" TYPE = "TEXT" NAME = "cnum" value = "<?php echo $new_c_num;?>"size = "26" oninput = "changeFont(this.id)" AUTOFOCUS REQUIRED readonly>	
						</td>
					</div>
				</tr>
				<tr>
					<div class="">
						<td>				
							
							<label class="name"><font face = "Times New Roman" size = "4"><b>Full Name</b></font></label>		
						</td>
					</div>
					<div class="">
						<td>
							<INPUT id = "fullname" TYPE = "TEXT" NAME = "fullname" size = "26" oninput = "changeFont(this.id)" AUTOFOCUS REQUIRED>	
						</td>
					</div>
				</tr>
				<tr>
					<div class="">
						<td>	
							
							<label class="name"><font face = "Times New Roman" size = "4"><b>Source</b></font></label>					
						</td>
					</div>
					<div class="">
						<td>			
							<select ID = "source" name = "source" onchange="populate(this.id,'subsource');
							showSpanForSource('source','subsource','consultancy','textbox');changeFont(this.id)">
								<OPTION value = ""></option>
								<OPTION VALUE = "Online">Online</option>
								<OPTION VALUE = "Consultancy">Consultancy</option>
								<OPTION VALUE = "Reference">Reference</option>
								<OPTION VALUE = "Other">Other</option>
							</select>	
							<span id ="selectbox" >
								<select ID = "subsource" name = "subsource" style = "visibility:hidden; display:none"  onchange = "populate('subsource','consultancy');
								showSpanForSubsource('subsource','consultancy','textbox');changeFont(this.id)"></select>	
							</span>
							<span>
								<select id = "consultancy" name = "consultancy" style = "visibility:hidden; display:none" onchange = "changeFont(this.id)"></select>
							</span>
							<span id = "textbox" name = "othersrc" style = "visibility:hidden; display:none">
								<input id = "othersource" type = "text" name = "othersource" size="26" oninput="changeFont(this.id)">
							</span>
						</td>
							
					</div>
				</tr>
				
				<tr>
					<div class="">
						<td>
							
							<label class="name"><font face = "Times New Roman" size = "4"><b>Chartered Accountant</b></font></label>				
						</td>
					</div>
					<div class="" >
						<td>						
							<input id = "yesca" type="radio" name="ca" value = "YES" onchange = "identifyQsSetByCA(this.id,'qsset'); changeFont('qsset');
							setDeptToAccounting('department','profile');setHiddenDepartment('hidden_department')" AUTOFOCUS REQUIRED> <label>
							<font face = "Times New Roman" size = "3">Yes</font></label> &nbsp &nbsp 
							<input id="noca" type="radio" name="ca" value = "NO" onchange = "identifyQsSetByCA('yesca','qsset'); changeFont('qsset');
							unsetDeptToAccounting('department','profile')" AUTOFOCUS REQUIRED> <label><font face = "Times New Roman" size = "3">No</font></labe>
						</td>
					</div>
				</tr>
				<tr>
					<div class="">
						<td>
						
							<label class="name"><font face = "Times New Roman" size = "4"><b>Department</b></font></label>			
						</td>
					</div>
					<div>
						<td>			
							<select ID = "department" name = "" onchange="transferValue(this.id,'hidden_department'); populate('department','profile');
							changeFont(this.id);setQsSetbyDept(this.id,'qsset')">
								<OPTION value = ""></option>
								<OPTION value = "Accounting">Accounting</option>
								<OPTION value = "Admin">Admin</option>
								<OPTION value = "HR">HR</option>
								<OPTION value = "Tech">Tech</option>
							</select>
							<input type = "text" style = "display:none" id = "hidden_department" name = "department" value = "">
						</td>
					</div>
				</tr>
				<tr>
					<div class="">
						<td>	
							
							<label class="name"><font face = "Times New Roman" size = "4"><b>Relevant Experience</b></font></label>							
						</td>
					</div>
					<div class="">
						<td>
							<INPUT TYPE = "number" id = "experience" NAME = "experience" style = "width:150px" oninput="identifyQsSetByExperience(this.id,'qsset','yesca','department');
							changeFont(this.id); changeFont('qsset');populateProfileByCaExperinceForAccounting('department','profile',this.id)" AUTOFOCUS REQUIRED>	
							&nbsp <label><font face = "Times New Roman" size = "3">months</font></label>
						</td>
					</div>
				</tr>
				<tr>
					<div class="">
						<td>	
							
							<label class="name"><font face = "Times New Roman" size = "4"><b>Profile</b></font></label>				
						</td>
					</div>
					<div>
						<td>		
							<select ID = "profile" name = "profile" onchange = "changeFont(this.id)"></select>			
						</td>
					</div>	
				</tr>
				
				
						
					
				<tr>
					<div class="">
						<td>	
					
							<label class="name"><font face = "Times New Roman" size = "4"><b>Screening Level</b></font></label>									
						</td>
					</div>
					<div class="">
						<td>
							<INPUT id = "qsset" TYPE = "TEXT" NAME = "qsset" size = "26"  AUTOFOCUS REQUIRED readonly>	
						</td>
					</div>
				</tr>
			</table>
			<br>
			<div style="text-align:center">  
				<button type="submit" class="btn btn-default" style="width: 100px; height: 45px;"><font face = "Times New Roman" size="4"><b>NEXT	</b></font></button>
			</div> 
		</form>
			
		
	</div>
	</div>
	</div>
		
	<script src = "js/recruitment.js" type = "text/javascript"></script>
</body>

</html>