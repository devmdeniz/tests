// inputtaki urunu algilayip ona gore renk secenekleri sunan bir kod yazmak istedik


// input kodu
              <input list="products" class="urun" name="product[]" id="product">

              <datalist id="products">

                <?php

  include("../system/connection.php");

  $database = mysqli_query($conn, "SELECT * FROM urunler");

  while($insert = mysqli_fetch_array($database)) {

  echo '<option class="urunler" value="' . $insert['urunisim'] . '" id=' . $insert['urunid'] . '>'; 

} 

  ?>

              </datalist>





//renk option kodu

<select class="productColors" class="form-control selectpicker" name="urunRenk_select[]">
<option value="renk">Renk</option>
</select>




// javascript kodu

  <script src="jquery-3.6.0.min.js"></script>
  
function gonderr() {

var arrayDizi =[];

console.log(arrayDizi);

$("#kopyalanacakform .satis").each(function () {

var obj=$(this);

    var urunadi= obj.find(".urun").val();

    var fiyatmiktar= obj.find(".fiyat").val();

if(urunadi) { 

arrayDizi.push({AD:urunadi,MIKTAR: fiyatmiktar});

}

});

return arrayDizi;

};

 






