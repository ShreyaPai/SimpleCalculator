function disp(val) {
  document.getElementById("result").value += val;
}

function Calculate() {
  var inputElement = document.getElementById("result");
  let res = eval(inputElement.value);
  if(res!=""){
    inputElement.value += "= " + res;
    document.getElementById("calculator").submit();
  }
}

function clrsc() {
  document.getElementById("result").value = " ";
}

function back() {
  var value = document.getElementById("result").value;
  document.getElementById("result").value = value.substr(0, value.length - 1);
}