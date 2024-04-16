function validateForm() {
  var nobuku = document.getElementById("nobuku").value;
  var judul = document.getElementById("judul").value;
  var penulis = document.getElementById("penulis").value;

  if (nobuku === "" || judul === "" || penulis === "") {
    alert("Data tidak boleh kosong!!!");
    return false;
  } else {
    alert("Data berhasil ditambahkan!!!");
  }

  return true;
}
