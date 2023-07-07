function input(){
  // Get Input Values

  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Pop Up Message
  var message = "Akun dengan username " + username + " dengan password \"" + password + "\" telah dibuat";
  alert(message);
}