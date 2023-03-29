function cal() {
  var input1_s = document.getElementById("input1").value;
  if (!input1_s) {
    alert('Nhập giá trị vào ô input 1')
    return;
  }
  var input1 = parseInt(input1_s);

  var input2_s = document.getElementById("input2").value;
  if (!input2_s) {
    alert('Nhập giá trị vào ô input 2')
    return;
  }
  var input2 = parseInt(input2_s);

  add = document.getElementById("add");
  sub = document.getElementById("sub");
  mul = document.getElementById("mul");
  div = document.getElementById("div");
  exp = document.getElementById("exp");

  var string = ""
  if (add.checked == true){
    var result_add = input1 + input2;
    string = input1.toString() + " + " + input2.toString() + " = " + result_add.toString();
  }
  else if (sub.checked == true){
    var result_sub = input1 - input2;
    string = input1.toString() + " - " + input2.toString() + " = " + result_sub.toString();
  }
  else if (mul.checked == true){
    var result_mul = input1 * input2;
    string = input1.toString() + " * " + input2.toString() + " = " + result_mul.toString();
  }
  else if (div.checked == true){
    if (input2 == 0){
      alert('Số chia phải khác 0');
      return;
    }
    var result_div = input1 / input2;
    string = input1.toString() + " / " + input2.toString() + " = " + result_div.toString();
  }
  else if (exp.checked == true){
    var result_exp = input1 ** input2;
    string = input1.toString() + " ^ " + input2.toString() + " = " + result_exp.toString();
  }
  else {
    alert("Chọn phép toán cần thực hiện");
    return;
  }
  document.getElementById("result").innerHTML = string;
}

