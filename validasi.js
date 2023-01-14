//function validasi login
function validasi_login(){
    var username = document.forms["tara"]["username"].value;
    var password = document.forms["tara"]["password"].value;
    if( username == "kiyacell" && password == "123"){
        //pengkondisian username=kiyacell dan password=123
  if(username=="kiyacell"&& password == "123"==true){
    window.location="index.html"; //jika login berhasil maka akan menuju ke halaman index.html (beranda konter)
  }
}

    else if(username =="" || password ==""){
      alert("Masukan username dan password Anda");
      return false;
    }
    else{
        //nilai variabel salah akan ditampilkan seperti ini
      alert("Username atau password salah breee"); //jika username dan password salah
      return false;
    }
  }