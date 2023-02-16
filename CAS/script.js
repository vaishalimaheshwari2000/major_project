 const pwd = document.querySelector('#password');
 const Cpwd = document.querySelector('#cpwd');
//  document.querySelector('.alert').style.display ='none';

 document.querySelector('.input_field').addEventListener('click', (e)=>{
    if((pwd.value)===(Cpwd.value)){
      document.querySelector('.alert').style.display ='block';
      e.preventDefault();
    }
    else
   {  document.querySelector('#invalid').innerHTML+=`<p>Invalid match</p>`;
     }
     
 });
 document.querySelector('button').addEventListener('click', (e)=>{
    e.preventDefault();
    document.querySelector('.alert').style.display ='none';
 });