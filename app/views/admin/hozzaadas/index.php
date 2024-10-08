<?php
  require APPROOT . '/views/includes/head.php';
  require APPROOT . '/views/includes/adminNavigation.php';
?>

<!-- telefon kártya padding
     count back
     font-family
-->

<form action="" method="post" enctype="multipart/form-data">
     <div class="kontener">
     
          <div class="pirulak">
               <div class="pill-1 rotate-45"></div>
               <div class="pill-2 rotate-45"></div>
               <div class="pill-3 rotate-45"></div>
               <div class="pill-4 rotate-45"></div>
          </div>
          <div class="login">

               <h3 class="title">Esemény hozzáadása</h3>
               <div class="text-input">
                    <i class='bx bxs-captions'></i>
                    <input type="text" name="cim" placeholder="Cím" maxlength="30" required>
               </div>

               <div class="text-input">
                    <i class='bx bxs-photo-album'></i>
                    <input type="file" name="kep" placeholder="Kép" maxlength="500" required>
               </div>
               <div class="text-input">
                    <i class='bx bxs-time' ></i>
                    <input type="datetime-local" name="datum" placeholder="Időpont" required>
               </div>

               <div>
                    <select name="terem" id="id-tanterem">
                        <?php foreach ($data['terem'] as $fajta): ?>
                            <option class="marka" value="<?php echo $fajta->id; ?>"><?php echo $fajta->neve; ?></option>
                        <?php endforeach; ?>
                    </select>
               </div>

               <div>
                    <select name="tanar" id="id-tanar">
                        <?php foreach ($data['tanarok'] as $fajta): ?>
                            <option class="marka" value="<?php echo $fajta->id; ?>"><?php echo $fajta->nev; ?></option>
                        <?php endforeach; ?>
                    </select>
               </div>

               <div>
                    <select name="szak" id="id-szak">
                        <?php foreach ($data['szak'] as $fajta): ?>
                            <option class="marka" value="<?php echo $fajta->id; ?>"><?php echo $fajta->neve; ?></option>
                        <?php endforeach; ?>
                    </select>
               </div>

               <div>
                    <textarea name="leiras" id="" cols="40" rows="4" placeholder="Leírás" required></textarea>
               </div>

               <div>
                    <textarea name="tema" id="" cols="40" rows="4" placeholder="Téma" required></textarea>
               </div>

               <button type="submit" class="login-btn">Feltöltés</button>
          </div>
     </div>
</form>

