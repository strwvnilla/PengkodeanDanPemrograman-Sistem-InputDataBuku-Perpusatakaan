// Dapatkan referensi ke table
const table = document.getElementById("myTable");

// Dapatkan referensi ke input search
const searchInput = document.getElementById("searchInput");

// Tambahkan event listener ke input search
searchInput.addEventListener("input", () => {
  // Dapatkan nilai input search
  const searchValue = searchInput.value.toLowerCase();

  // Loop melalui setiap baris dalam table
  for (let row of table.rows) {
    // Dapatkan referensi ke semua cell dalam baris
    const cells = row.cells;

    // Cek apakah nilai input search ada dalam salah satu cell
    if (
      [...cells].some((cell) =>
        cell.innerText.toLowerCase().includes(searchValue)
      )
    ) {
      // Jika ya, tampilkan baris tersebut
      row.style.display = "";
    } else {
      // Jika tidak, sembunyikan baris tersebut
      row.style.display = "none";
    }
  }
});
