


function sub(){
  if (window.confirm('Account succesfully created redirect to home page?'))
  {
  window.open('one.html');
  } 
}
function nosub(){
  alert('phone number is already registered');
  window.history.go(-1)
}
function req(){
  if (window.confirm('Successfully posted requirements'))
  {
  window.open('retailer.html');
  } 
}
function pub(){
  if (window.confirm('Successfully publised items'))
  {
  window.open('retailer.html');
  } 
}


function see(hi){
    if(hi=="Consumer"){
      if(!localStorage.getItem('count')){
        localStorage.setItem('count',0);
    }
  }
    else if(hi=="Farmer"){
      if(!localStorage.getItem('count1')){
        localStorage.setItem('count1',0);
    }
    }
    else if(hi=="Retailer"){
      if(!localStorage.getItem('count2')){
        localStorage.setItem('count2',0);
    }
    }
    alert("succesfully loged in as "+hi);
    window.open("one.html");
  }

function nota(){
  alert('invalid');
  window.history.go(-1)
}

function check(){
  if (localStorage.getItem('count')==0 || localStorage.getItem('count1')==0 || localStorage.getItem('count2')==0){
    document.getElementById('ls').style.display = "none";
}
else{
  document.getElementById('hid').style.display = "none";

}
}

function consu(){
  if (localStorage.getItem('count')==0){

  }
  else{
    alert("you are not logged in as a consumer");
    window.history.go(-1);
    //window.open("one.html");

  }
}
function farmc(name){
  if (localStorage.getItem('count1')==0){
     // create a new div element
    
  }
  
  else{
    alert("you are not logged in as a farmer");
    window.history.go(-1);
    //window.open("one.html");
  }
   
}



function retc(){
  if (localStorage.getItem('count2')==0){

  }
  else{
    alert("you are not logged in as a retailer");
    window.history.go(-1);
    //window.open("one.html");

  }
}



function teesey()
{
  if (window.confirm('Do you want to log out'))
    {
      window.open("one.html");
     localStorage.removeItem('count');
     localStorage.removeItem('count1');
     localStorage.removeItem('count2');

     document.getElementById('ls').style.display="block";
     document.getElementById('hid').style.display="none";
     
     

    }
}






