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





// renk option kodu

<select class="productColors" class="form-control selectpicker" name="urunRenk_select[]">
<option value="renk">Renk</option>
</select>




// javascript kodu

  <script src="jquery-3.6.0.min.js"></script>
  
// POST ETMEK ISTERSEM YAZILMIS
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

 
// GET METHODU
<script src="jquery-3.6.0.min.js"></script>

  <script>

          let tempOption = document.createElement('option');

        tempOption.value = 'Renk';

        tempOption.text = 'Renk';

      $('.urun').change(function () {

          $('.productColors')

          .find('option')

          .remove()

          .end()

          .append(tempOption);

             let valueToFind = `option[value="${$(this).val()}"]`;

   let findedOption =      document.getElementById('products').querySelector(valueToFind);

   let findedId = $(findedOption).attr('id');

   $.get('/renkalgila.php?urunid='+findedId).then(function (data) {

        data.forEach(function (val, ind) {

            if(val.length > 1){

            let tempOption = document.createElement('option');

            tempOption.value = val;

            tempOption.text = val;

            $('.productColors')

           .append(tempOption)

            }

    })

})

})

  </script>



// RENKALGILA.PHP KODU

<?php

include("connection");

$urunid = $_GET["urunid"];

$sql = "SELECT * FROM urunler WHERE urunid = '$urunid'";

$result = mysqli_query($conn, $sql);

$insert = mysqli_fetch_array($result);

$explodeurunler = explode(',', $insert['urunrenk']);





header("Content-Type: application/json");

echo json_encode($explodeurunler);



?>



