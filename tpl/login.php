<div class="container login mt-4">
  <div class="row">
    <div class="col-md-6 offset-md-3 my-4">
      <form action="/" method="post">
        <h1 class="mb-5 fw-bold">Autorizācija</h1>
        <div class="form-floating my-2">
          <input name="email" type="email" class="form-control" id="floatingInput" placeholder="E-pasts">
          <label for="floatingInput">E-pasts</label>
        </div>
        <div class="form-floating mb-3">
          <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Parole">
          <label for="floatingPassword">Parole</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary fw-bolder fs-6" type="submit">Ienākt</button>
      </form>
      <p class="text-center mt-4">
        <a href="/?page=forgot" class="text-body">Aizmirsi paroli?</a>
      </p>
      <p class="text-center mt-4">
        <a href="/?page=register" class="text-body">Reģistrēties</a>
      </p>
    </div>
  </div>
</div>

