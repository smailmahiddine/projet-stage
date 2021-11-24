/* navbar button*/
function myFunction1() {
    location.replace("connexioncompte.php");
}

function myFunction2() {
    location.replace("inscription.php");
}

/*controle saisie mot de pass*/
function valider() { 
  var msg; 
  var str1 = document.getElementById("mdputilisateur").value; 
  var str2 = document.getElementById("confmdputilisateur").value; 
  
  if (str1.match( /[0-9]/g)==null || 
         str1.match( /[A-Z]/g)==null || 
          str1.match(/[a-z]/g)==null || 
          str1.match( /[^a-zA-Z\d]/g)==null || 
         str1.length <= 10
      ) {
     msg = " Mot de passe invalide ";
     
      }
  else if(str1!= str2){
      msg="les deux mots de passe ne sont pas identiques"
      
  }
  else 
     msg =" <p> mot de passe valide</p>"; 
    document.getElementById("msg").innerHTML= msg; 
    document.getElementById('msg').style.color = 'red';
} 


