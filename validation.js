    $(document).ready(function(){
  $("#myForm").on("submit",function(){
	 var val_image=/\.(jpe?g|png|gif|bmp)$/i;
	 var val_firstname=/^[A-Za-z.\s]{3,30}$/;
	 var val_lastname=/^[A-Za-z.\s]{3,30}$/;
	// var val_age=/^[0-9]{1,3}$/;
	 var val_housename=/^[A-Za-z.\s]{3,30}$/;
	 var val_postoffice=/^[A-Za-z.\s]{3,30}$/;
	 var val_place=/^[A-Za-z.\s]{3,30}$/;
	 var val_pincode=/^[0-9]{5,6}$/;
	 var val_phone= /^[0-9]{9,12}$/;
     var val_emailid= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
	 var val_education=/^[^&]{3,30}$/;
	 var val_job=/^[^&]{3,30}$/;
	 var val_jobinstitue=/^[^&]{3,30}$/;
	 var val_member=/^[0-9]{12,13}$/;
	 var val_adhar=/^[0-9]{12,13}$/;
	 var val_pword= /^[^&]{6,30}$/;
	 var val_seqans=/^[A-Za-z.\s]{3,30}$/;
	 
	 $image = $('#image').val();
	 $firstname=$('#firstname').val();
	 $lastname=$('#lastname').val();
	 $age=$('#age').val();
	 $housename=$('#housename').val();
     $postoffice=$('#postoffice').val();
     $place= $('#place').val();
	 $pincode= $('#pincode').val();
	 $phone=$('#phone').val();
     $emailid=$('#emailid').val();
	 $education=$('#education').val();
     $job= $('#job').val();
     $job_institue= $('#job_institue').val();
	  $member=$('#member').val();
	 $adhar=$('#adhar').val();
     $password =$('#password').val();
	 $seqans=$('#seqans').val();
	 
	 
	 if(!val_image.test($image)){
      $("#image").focus();
	  alert("add image");
      return false;
    }
    else  if (!val_firstname.test($firstname)) {
      $("#firstname").focus();
      alert("enter firstname");
      return false;
	}
	else if (!val_lastname.test($lastname)) {
      $("#lastname").focus();
      alert("enter valid letters");
      return false;
    }
	
	//else if (!val_age.test($age)) {
     // $("#age").focus();
     // alert("enter valid age");
     // return false;
    //}
	
	else if (!val_housename.test($housename)) {
      $("#housename").focus();
      alert("enter VALID HOUSE");
      return false;
    }
	else if (!val_postoffice.test($postoffice)) {
      $("#postoffice").focus();
      alert("enter  valid postoffice");
      return false;
    }
	else if (!val_place.test($place)) {
      $("#place").focus();
      alert("enter  valid place");
      return false;
    }
	else if (!val_pcode.test($pincode)) {
      $("#pincode").focus();
      alert("enter  valid pincode");
      return false;
    }
	else if (!val_phone.test($phone)) {
      $("#phone").focus();
      alert("enter 10 numbers");
      return false;
	}
    
     else if (!val_emailid.test($emailid)) {
      $("#emailid").focus();
      alert("invalid email");
      return false;
    }
	
	else if (!val_education.test($education)) {
      $("#education").focus();
      alert("enter valid education qulification");
      return false;
    }
	
	else if (!val_job.test($job)) {
      $("#job").focus();
      alert("enter valid job details");
      return false;
    }
	
	else if (!val_jobinstitue.test($job_institue)) {
      $("#job_institue").focus();
      alert("enter valid job details");
      return false;
    }
	
	
	else if (!val_member.test($member)) {
      $("#member").focus();
      alert(" enter member count number");
      return false;
    }
		else if (!val_adhar.test($adhar)) {
      $("#adhar").focus();
      alert("enter adhar number");
      return false;
    }
	else if (!val_pword.test($password)) {
      $("#password").focus();
      alert("enter VALID password");
      return false;
    }
	else if (!val_seqans.test($seqans)) {
      $("#seqans").focus();
      alert(" INVALID answer ");
      return false;
    }
	
	
    else{
      return true;
    }
  });
  
  
  
  
  
  $("#image").change(function() {
    var val = $(this).val();
    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
      case 'gif': case 'jpg': case 'png':
      $('#image_error').html("");
      $('#image_error').removeClass('is-visible');
      return true;
      break;
      default:
      $("#image_error").html("Invalid image");
      $('#image_error').addClass('is-visible');
      return false;
      break;
    }
  });
  
  $('#firstname').focusout(function(){
	  var val_firstname=/^[A-Za-z.\s]{3,30}$/;
	  $firstname= $('#firstname').val();
	  if (!val_firstname.test($firstname)) {
      	$(this).focus();
      	$(this).css('border','2px solid red');
	  	$('#firstname_error').html("Invalid FirstName");
      	return false;
		}
	 else{
		 $(this).css('border','NONE');
		 $('#firstname_error').html("");
		return true;
    } 
  });
  $("#lastname").focusout(function(){
   var val_lastname=/^[A-Za-z.\s]{3,30}$/;
   $lastname= $('#lastname').val();
     if (!val_lastname.test($lastname)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#lastname_error').html("Invalid LastName");
      return false;
	 }
	 else{
		 $(this).css('border','NONE');
		 $('#lastname_error').html("");
		return true;
    } 
    });
	


 $("#housename").focusout(function(){
  var val_housename=/^[A-Za-z.\s]{3,50}$/;
  $housename= $('#housename').val();
   if (!val_housename.test($housename)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#housename_error').html("Invalid housename");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#housename_error').html("");
		return true;
    } 
	});
	
	
	$("#postoffice").focusout(function(){
  var val_postoffice=/^[A-Za-z.\s]{3,50}$/;
  $postoffice= $('#postoffice').val();
   if (!val_postoffice.test($postoffice)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#postoffice_error').html("Invalid postoffice");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#postoffice_error').html("");
		return true;
    } 
	});
	
	$("#place").focusout(function(){
  var val_place=/^[A-Za-z.\s]{3,50}$/;
  $place= $('#place').val();
   if (!val_place.test($place)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#place_error').html("Invalid Address");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#place_error').html("");
		return true;
    } 
	});
	
  $("#pincode").focusout(function(){
 var val_pincode=/^[0-9]{5,6}$/;
  $pincode= $('#pincode').val();
   if (!val_pincode.test($pincode)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#pincode_error').html("Invalid Pin");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#pincode_error').html("");
		return true;
    } 
	});
	$("#phone").focusout(function(){
 var val_phone= /^[0-9]{9,12}$/;
  $phone= $('#phone').val();
   if (!val_phone.test($phone)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#phone_error').html("Invalid Phonenumber");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#phone_error').html("");
		return true;
    } 
	});
	$("#emailid").focusout(function(){
 var val_emailid= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
  $emailid= $('#emailid').val();
   if (!val_emailid.test($emailid)) {
      $(this).css('border','2px solid red');
	  $('#emailid_error').html("Invalid Email");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#emailid_error').html("");
		return true;
    } 
	});
	
	
	
	 $("#education").focusout(function(){
	  var val_education=/^[A-Za-z.\s]{3,30}$/;
	  $education= $('#education').val();
	  if (!val_education.test($education)) {
      	$(this).focus();
      	$(this).css('border','2px solid red');
	  	$('#education_error').html("Invalid education details");
      	return false;
		}
	 else{
		 $(this).css('border','NONE');
		 $('#education_error').html("");
		return true;
    } 
  });
  $("#job").focusout(function(){
   var val_job=/^[A-Za-z.\s]{3,30}$/;
   $job= $('#job').val();
     if (!val_job.test($job)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#job_error').html("Invalid LastName");
      return false;
	 }
	 else{
		 $(this).css('border','NONE');
		 $('#job_error').html("");
		return true;
    } 
});

	
   $("#job_institue").focusout(function(){
   var val_jobinstitue=/^[A-Za-z.\s]{3,30}$/;
   $job= $('#job_institue').val();
     if (!val_jobinstitue.test($job_institue)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#job_institue_error').html("Invalid LastName");
      return false;
	 }
	 else{
		 $(this).css('border','NONE');
		 $('#job_institue_error').html("");
		return true;
    } 
});



$("#member").focusout(function(){
   var val_member=/^[0-9]{1,2}$/;
   $age= $('#member').val();
     if (!val_member.test($age)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#member_error').html("enter member count");
      return false;
	 }
	 else{
		 $(this).css('border','NONE');
		 $('#member_error').html("");
		return true;
    } 
    });


$("#adhar").focusout(function(){
 var val_adhar=/^[0-9]{12,13}$/;
  $adhar= $('#adhar').val();
   if (!val_adhar.test($adhar)) {
	    $(this).focus();
      $(this).css('border','2px solid red');
	  $('#adhar_error').html("Invalid Pin");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#adhar_error').html("");
		return true;
    } 
	});

	
	$("#password").focusout(function(){
    var val_pword= /^[^&]{6,30}$/;
  $password= $('#password').val();
   if (!val_pword.test($pass)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#password_error').html("Invalid Password");
      return false;
    }
	else{
		 $(this).css('border','NONE');
		 $('#password_error').html("");
		return true;
    } 
	});
	$("#seqans").focusout(function(){
   var val_seqans=/^[A-Za-z.\s]{3,30}$/;
   $job= $('#seqans').val();
     if (!val_seqans.test($seqans)) {
      $(this).focus();
      $(this).css('border','2px solid red');
	  $('#seqans_error').html("Invalid answer");
      return false;
	 }
	 else{
		 $(this).css('border','NONE');
		 $('#seqans_error').html("");
		return true;
    } 
});
})