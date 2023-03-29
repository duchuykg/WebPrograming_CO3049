function month() {
  var month = document.getElementById("month");
  var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];

  for (var i = 0; i < monthNames.length; i++) {
    var options = document.createElement("option");
    options.value = i + 1;
    options.text = monthNames[i];
    month.appendChild(options);
  }
}

function year() {
  var year = document.getElementById("year");
  
  for (var i = 2022; i > 1920; i--) {
    var options = document.createElement("option");
    options.value = i;
    options.text = i;
    year.appendChild(options);
  }
}

function submit() {
  var firstname = document.getElementById("firstname").value;
  var lastname = document.getElementById("lastname").value;
  var email = document.getElementById("email").value
  var password = document.getElementById("password").value
  var day = document.getElementById("day")
  var month = document.getElementById("month")
  var year = document.getElementById("year")
  var radio = document.getElementsByName("radio")
  var country = document.getElementById("country")
  // name
  if (firstname.length < 2 || firstname.length > 30) {
    alert("Firstname chuỗi từ 2-30 ký tự");
    return;
  }

  if (lastname.length < 2 || lastname.length > 30) {
    alert("Lastname chuỗi từ 2-30 ký tự");
    return;
  }
  //email
  if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
    alert("Nhập email định dạng: <sth>@<sth>.<sth>")
    return;
  }
  //password
  if (password.length < 2 || password.length > 30) {
    alert("Password chuỗi từ 2-30 ký tự");
    return;
  }
  //day
  if (day.options[day.selectedIndex].value == "Day") {
    alert("Chọn ngày sinh");
    return;
  }

  if (month.options[month.selectedIndex].value == "Month") {
    alert("Chọn tháng sinh");
    return;
  }

  if (year.options[year.selectedIndex].value == "Year") {
    alert("Chọn năm sinh");
    return;
  }
  //
  male = document.getElementById("male");
  female = document.getElementById("female");
  other = document.getElementById("other");
  if (male.checked == false && female.checked == false && other.checked == false){
    alert("Chọn giới tính");
    return;
  }
  //country
  if (country.options[country.selectedIndex].text == "Country") {
    alert("Chọn Country");
    return;
  }
  //about
  if (about.length > 10000) {
    alert("About tối đa 10000 ký tự");
    return;
  }
  alert("Complete!");
}

function reset() {
  document.getElementById("firstname").value = ""
  document.getElementById("lastname").value = ""
  document.getElementById("email").value = ""
  document.getElementById("password").value = ""
  document.getElementById("day").selectedIndex = 0

  var month = document.getElementById("month")
  month.innerHTML = ""
  var year = document.getElementById("year")
  year.innerHTML = ""

  document.getElementById("male").checked = false;
  document.getElementById("female").checked = false;
  document.getElementById("other").checked = false;
  document.getElementById("country").selectedIndex = 0
  document.getElementById("about").value = ""
}