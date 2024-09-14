function tampilkanForm(namaProduk) {
    document.getElementById("modal").style.display = "block";
    document.getElementById("formRating").reset();
    document.getElementById("formRating").setAttribute("data-produk", namaProduk);
}

function tutupForm() {
    document.getElementById("modal").style.display = "none";
}

function kirimRating() {
    var namaProduk = document.getElementById("formRating").getAttribute("data-produk");
    var nama = document.getElementById("nama").value;
    var rating = document.getElementById("rating").value;

    $.ajax({
        type: "POST",
        url: "proses_rating.php",
        data: { nama_produk: namaProduk, nama: nama, rating: rating },
        success: function (data) {
            tutupForm();
            perbaruiRating(namaProduk);
        }
    });
}

function perbaruiRating(namaProduk) {
    $.ajax({
        type: "POST",
        url: "ambil_rating.php",
        data: { nama_produk: namaProduk },
        success: function (data) {
            document.getElementById("rating_produk_" + namaProduk).innerHTML = "Rating: " + data;
        }
    });
}
