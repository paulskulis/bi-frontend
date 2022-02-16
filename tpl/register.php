<!--
  Country select from https://www.html-code-generator.com/html/drop-down/country-names
-->
<div class="container register mt-4">
  <form action="/" method="post">
    <div class="row">
      <div class="col-md-6 offset-md-3 my-4">
        <h1 class="mb-5 fw-bold">Reģistrācija</h1>

        <div class="form-floating my-2">
          <div class="btn-group w-100" role="group">
            <input type="radio" name="business" class="btn-check" id="checkBoxType1" value="false" checked="">
            <label class="btn btn-light" for="checkBoxType1">Privātpersona</label>

            <input type="radio" name="business" class="btn-check" id="checkBoxType2" value="true">
            <label class="btn btn-light" for="checkBoxType2">Juridiska persona</label>

          </div>
        </div>
        <div class="form-floating my-2">
          <input name="firstName" type="text" class="form-control" placeholder="Vārds">
          <label>Vārds</label>
        </div>

        <div class="form-floating my-2">
          <input name="surName" type="text" class="form-control" placeholder="Uzvārds">
          <label>Uzvārds</label>
        </div>

        <div class="form-floating my-2">
          <input name="email" type="email" class="form-control" placeholder="E-pasta adrese" required="">
          <label>E-pasta adrese</label>
        </div>

        <div class="form-floating my-2">
          <input name="phone" type="text" class="form-control" placeholder="Telefona numurs">
          <label>Telefona numurs</label>
        </div>

        <div class="form-floating my-2">
          <input name="address" type="text" class="form-control" placeholder="Adrese">
          <label>Adrese</label>
        </div>

        <div class="form-floating my-2">
          <?php include 'tpl/countries_select.php' ?>
          <label>Valsts</label>
        </div>

        <div class="form-floating my-2">
          <input name="city" type="text" class="form-control" placeholder="Pilsēta">
          <label>Pilsēta</label>
        </div>

        <div class="form-floating my-2">
          <input name="postCode" type="text" class="form-control" placeholder="Pasta indekss">
          <label>Pasta indekss</label>
        </div>

        <div class="form-floating mb-3">
          <input name="password" type="password" class="form-control" placeholder="Parole" required="">
          <label for="floatingPassword">Parole</label>
        </div>

        <div class="form-floating mb-3">
          <input name="passwordConfirm" type="password" class="form-control" placeholder="Parole vēlreiz" required="">
          <label for="floatingPassword">Parole vēlreiz</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="rules" type="checkbox" value="true" required="">
          <label class="form-check-label">
            Piekrītu noteikumiem
          </label>
        </div>


      </div>
    </div>
    <button class="w-100 btn btn-lg btn-primary fw-bolder" type="submit">Reģistrēties</button>
  </form>
</div>

