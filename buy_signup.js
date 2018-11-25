/*function isValid()
{
	var re;
	var phone_reg = /^([0-9]){10}$/;
	var temp;
	


	temp = document.SignUpForm.phone.value;
	temp = phone_reg.test(temp);
	if((temp=="")||(temp==false))
	{
		alert("Wrong phone number");
		return false;
	}
	return true;
}*/
function isValid()
      {
         var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         var password_reg= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
         var phone_reg = /^([0-9]){10}$/;
         var pan_reg = /^([A-Za-z]{5}\d{4}[A-Za-z]{1})$/
         var temp;
      
         if( document.SignUpForm.firstname.value == "" )
         {
            alert( "Please provide your Firstname!" );
            document.SignUpForm.firstname.focus() ;
            return false;
         }
          if( document.SignUpForm.lastname.value == "" )
         {
            alert( "Please provide your LastName!" );
            document.SignUpForm.lastname.focus() ;
            return false;
         }

         
         /*if( document.SignUpForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.SignUpForm.email.focus() ;
            return false;
         }*/
            temp=document.SignUpForm.email.value;
            temp=re.test(String(temp).toLowerCase());
            if((temp=="")||(temp==false))
            {
               alert( "Please enter your Email correctly!" );
               document.SignUpForm.email.focus() ;
               return false;
            }

            if( document.SignUpForm.address.value == "" )
         {
            alert( "Please provide your address!" );
            document.SignUpForm.address.focus() ;
            return false;
         }
         /*   if( document.SignUpForm.password.value == "" )
         {
            alert( "Please provide your Password!" );
            document.SignUpForm.password.focus() ;
            return false;
         }*/
         temp=document.SignUpForm.pan.value;
         temp=pan_reg.test(temp);
            if((temp=="")||(temp==false))
         {
            alert( "Please provide your PAN number correctly!" );
            document.SignUpForm.pan.focus() ;
            return false;
         }

         temp=document.SignUpForm.phone.value;
         temp=phone_reg.test(temp);
            if((temp=="")||(temp==false))
         {
            alert( "Please provide only 10 digits in your phone number!" );
            document.SignUpForm.phone.focus() ;
            return false;
         }

         temp=document.SignUpForm.password.value;
         temp=password_reg.test(temp);
            if((temp=="")||(temp==false))
         {
            alert( "Please provide atleast 1 lowercase, 1 uppercase, 1 special character, 1 digit in your password!" );
            document.SignUpForm.password.focus() ;
            return false;
         }
            if( document.SignUpForm.confirm_password.value != document.SignUpForm.password.value )
         {
            alert( "Please re-enter your password correctly!!" );
            document.SignUpForm.confirm_password.focus() ;
            return false;
         }
         
         return( true );
      }
