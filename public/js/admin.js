// Loads  at start up ..
$(document).ready(()=>{
    all_user();
  });
  // Checks every 10 seconds
  window.setInterval(()=>{
  all_user();
  },10000);
  
  all_user=()=>{
       $.get( "/All_user", ( data )=>{
        var users = jQuery.parseJSON(data);
        // this is a new way to console log data ... 
        // console.table([users]);
        $('#notificount').html(""+users.length+"");
        var text = "";
       for(i = 0; i<users.length; i++){
        text +=`<tr><th scope='row'>${users[i].name}</th><td>${users[i].email}</td><td>${users[i].telephone}</td><td>${users[i].city}</td><td>${users[i].parish}</td><td>${users[i].Country}</td></tr>`;
       }
       $("#users").html(""+text+"");
  });
  }