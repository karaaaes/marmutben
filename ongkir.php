<?php
   include('templates/header.php');
   include('core/core_functions.php');
?>
<div id="project" class="project">
   <!-- Detail Beli Section -->
   <div class="container" id="anakanSection">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Cek Ongkir Kamu</h2>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <label for="wilayahSelect" style="color:black;">Wilayah</label>
               <select class="form-control" id="wilayahSelect" name="wilayah">
                  <option selected disabled>--Pilih Wilayah--</option>
                  <?php 
                     $dataWilayah = getWilayah();
                     foreach($dataWilayah as $data){
                  ?>
                  <option value="<?php echo $data['wilayah']; ?>"><?php echo $data['wilayah']; ?></option>
                  <?php   
                     }
                  ?>
               </select>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <label for="wilayahKecil" id="wilayahKecilLabel" style="color:black;">Wilayah Kecil</label>
               <select class="form-control" id="wilayahKecilSelect" name="wilayahKecil">
                  <!-- Daftar opsi daerah akan diisi secara dinamis -->
               </select>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="ongkirCOD" style="color:black;">Ongkir COD</label>
               <input type="text" class="form-control" id="ongkirCOD" name="ongkirCOD" aria-describedby="emailHelp"
                  readonly />
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="ongkirOjol" style="color:black;">Ongkir Ojek Online</label>
               <input type="text" class="form-control" id="ongkirOjol" name="ongkirOjol" aria-describedby="emailHelp"
                  readonly />
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <label for="ongkirKaLogistik" style="color:black;">Ongkir KA Logistik</label>
               <input type="text" class="form-control" id="ongkirKaLogistik" name="ongkirKaLogistik"
                  aria-describedby="emailHelp" readonly />
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <p>Daerah mu tidak ada di list ? <br/>
               Hubungi Admin <a href="https://api.whatsapp.com/send?phone=6287780605997&text=Halo%20Admin%20saya%20ingin%20bertanya%20ongkir" style="color:blue !important;">DISINI</a></p>
            </div>
         </div>
      </div>
      <hr class="mt-5" />
   </div>
   <!-- End Detail Beli Section -->
   <!-- news section -->
   <?php
   include('templates/promo.php');
   ?>
   <!-- end news section -->

   <script>
      var wilayahSelect = document.getElementById("wilayahSelect");
      var wilayahKecilSelect = document.getElementById("wilayahKecilSelect");
      var ongkirCODInput = document.getElementById("ongkirCOD");
      var ongkirOjolInput = document.getElementById("ongkirOjol");
      var ongkirKaLogistikInput = document.getElementById("ongkirKaLogistik");

      function fillWilayahKecilDropdown(selectedWilayah) {
         var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
               var dataWilayahKecil = JSON.parse(this.responseText);
               wilayahKecilSelect.innerHTML = "<option selected disabled>--Pilih Wilayah Kecil--</option>";
               dataWilayahKecil.forEach(function (data) {
                  var option = document.createElement('option');
                  option.value = data.wilayah_kecil;
                  option.text = data.wilayah_kecil;
                  wilayahKecilSelect.appendChild(option);
               });
            }
         };
         xhttp.open("GET", "get_wilayah_kecil.php?wilayah=" + selectedWilayah, true);
         xhttp.send();
      }

      function fillOngkirInfo(selectedWilayah, selectedWilayahKecil) {
         var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
               var dataOngkir = JSON.parse(this.responseText);

               if (dataOngkir.length > 0) {
                  var ongkirInfo = dataOngkir[0];
                  ongkirCODInput.value = ongkirInfo.ongkir_cod;
                  ongkirOjolInput.value = ongkirInfo.ongkir_ojol;
                  ongkirKaLogistikInput.value = ongkirInfo.ongkir_ka_logistik;
               } else {
                  ongkirCODInput.value = "Tidak ditemukan";
                  ongkirOjolInput.value = "Tidak ditemukan";
                  ongkirKaLogistikInput.value = "Tidak ditemukan";
               }
            }
         };
         xhttp.open("GET", "get_ongkir.php?wilayah=" + selectedWilayah + "&wilayahKecil=" + selectedWilayahKecil,
            true);
         xhttp.send();
      }

      function resetOngkirFields() {
         ongkirCODInput.value = "";
         ongkirOjolInput.value = "";
         ongkirKaLogistikInput.value = "";
      }

      wilayahSelect.addEventListener("change", function () {
         var selectedWilayah = wilayahSelect.value;
         resetOngkirFields(); // Call the function to clear ongkir fields
         fillWilayahKecilDropdown(selectedWilayah);
      });

      wilayahKecilSelect.addEventListener("change", function () {
         var selectedWilayah = wilayahSelect.value;
         var selectedWilayahKecil = wilayahKecilSelect.value;
         fillOngkirInfo(selectedWilayah, selectedWilayahKecil);
      });
   </script>

   <?php 
   include('templates/footer.php');
   ?>