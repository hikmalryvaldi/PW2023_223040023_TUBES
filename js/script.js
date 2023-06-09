// ambil elemen2 yang dibutuhkan
const keyword = document.getElementById("keyword");
const tombolCari = document.getElementById("tombol-cari");
const container = document.getElementById("container");

// tambahkan event keika keyword ditulis
keyword.addEventListener("keyup", function () {
  // buat object ajax
  const xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajak
  xhr.open("GET", "../ajax/obat.php?keyword=" + keyword.value, true);
  xhr.send();
});

function generatePDF() {
  const element = document.getElementById("invoice");

  html2pdf().from(element).save();
}
