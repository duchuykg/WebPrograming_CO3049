function createTable() {
  var table = document.getElementById("tab");
  
  if (table.childNodes.length != 1){
    alert("Remove table để thực hiện thao tác này");
    return;
  }

  var tagTable = document.createElement("table");
  // tagTable.border = 1;
  for (var i = 0; i < 2; i++) {
    var tagRow = document.createElement("tr");
    tagTable.appendChild(tagRow);

    for (var j = 0; j < 2; j++) {
      var tagColumn = document.createElement("td");

      tagColumn.classList.add('border');
      tagColumn.classList.add('p-4');

      // var textNode = document.createTextNode((i+1) + "-" + (j+1));
      // tagColumn.appendChild(textNode);
      tagRow.appendChild(tagColumn);
    }
  }
  table.appendChild(tagTable);
}

function addRow() {
  var table = document.getElementById("tab");

  if (table.childNodes.length == 1){
    alert("Create table để thực hiện thao tác này");
    return;
  }

  var tagTable = table.firstElementChild;
  if (tagTable.childNodes[0] == null){
    alert("Create new table để thực hiện thao tác này");
    return;
  }
  var countCol = tagTable.childNodes[0].childNodes.length;
  if (countCol == 0){
    alert("Create new table để thực hiện thao tác này");
    return;
  }
  var tagRow = document.createElement("tr");
  tagTable.appendChild(tagRow);

  for (var j = 0; j < countCol; j++) {
    var tagColumn = document.createElement("td");
      
    tagColumn.classList.add('border');
    tagColumn.classList.add('p-4');

    // var textNode = document.createTextNode(countRow+1 + "-" + (j+1));
    // tagColumn.appendChild(textNode);
    tagRow.appendChild(tagColumn);
  }
}

function addCol() {
  var table = document.getElementById("tab");

  if (table.childNodes.length == 1){
    alert("Create table để thực hiện thao tác này");
    return;
  }
  
  var tagTable = table.firstElementChild;

	var countRow = tagTable.childNodes.length;
  if (countRow == 0){
    alert("Create new table để thực hiện thao tác này");
    return;
  }

  for (var i = 0; i < countRow; i++){
    var tagRow = tagTable.childNodes[i];
    var tagColumn = document.createElement("td");
      
    tagColumn.classList.add('border');
    tagColumn.classList.add('p-4');

    // var textNode = document.createTextNode((i+1) + "-" + (countCol+1));
    // tagColumn.appendChild(textNode);
    tagRow.appendChild(tagColumn);
  }
}

function remove(){
  var table = document.getElementById("tab");
  var tagTable = table.firstElementChild;

  if (table.childNodes.length == 1){
    alert("Create table để thực hiện thao tác này");
    return;
  }

  table.removeChild(tagTable);
}

function removeRow(){
  var table = document.getElementById("tab");
  if (table.childNodes.length == 1){
    alert("Create table để thưc hiện chức năng này");
    return;
  }
  var tagTable = table.firstElementChild;

  var countRow = tagTable.childNodes.length;
  var Rownumber = document.getElementById("Rownumber").value;
  if (!Rownumber){
    alert("Nhập chỉ số hàng cần xóa");
    return;
  }

  if (countRow <= Rownumber || Rownumber < 0){
    alert("Không tồn tại chỉ số hàng cần xóa");
    return;
  }

  tagTable.removeChild(tagTable.childNodes[Rownumber]);
}

function removeCol(){
  var table = document.getElementById("tab");
  if (table.childNodes.length == 1){
    alert("Create table để thưc hiện chức năng này");
    return;
  }

  var tagTable = table.firstElementChild;

  var countRow = tagTable.childNodes.length;
  var Colnumber = document.getElementById("Colnumber").value;
  var countCol = tagTable.childNodes[0].childNodes.length;

  if (!Colnumber){
    alert("Nhập chỉ số cột cần xóa");
    return;
  }
  if (countCol <= Colnumber || Colnumber < 0){
    alert("Không tồn tại chỉ số hàng cần xóa");
    return;
  }

  for (var i = 0; i < countRow; i++) {
    var tagRow = tagTable.childNodes[i];
    tagRow.removeChild(tagRow.childNodes[Colnumber]);
  }
}
  