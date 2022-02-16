<div class="row mb-4">
    <div class="col-5 col-md-3">
        <img src="/assets/img/cart_item.jpg">
    </div>
    <div class="col-7 col-md-6">
        <p class="text-uppercase text-secondary">Caurules ar plastmasu</p>
        <h6 class="mb-4">APS - caurule L-500</h6>
        <p class="text-uppercase text-secondary">Preces kods: XXXX</p>
        <h5 class="fw-bold">126.00 €</h5>
    </div>
    <div class="col-md-3 text-center">
        <div class="btn-group" role="group">
            <button type="button text-secondary" data-product="123" class="btn btn-decrement btn-outline-secondary px-3 py-2 bg-light text-body border-0">-</button>
            <button type="button" class="btn counter btn-outline-secondary disabled px-4 py-2 bg-light text-body border-0">1</button>
            <button type="button" data-product="123" class="btn btn-increment btn-outline-secondary px-3 py-2 bg-light text-body border-0">+</button>
        </div>
        <form action="/?page=cart" method="post">
            <input type="hidden" name="action" value="removeProduct">
            <input type="hidden" name="id" value="123">
            <button type="submit" class="btn btn-outline-secondary px-3 py-2 bg-light text-body border-0">&times;</button>
        </form>
    </div>
</div>
