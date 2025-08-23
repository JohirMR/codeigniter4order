<!doctype html>
<html lang="bn">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>বই অর্ডার</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<style>
.card{border-radius:16px}
</style>
</head>
<body class="bg-light">
<div class="container py-4">
  <h2 class="mb-4">নার্সারী থেকে অষ্টম শ্রেণি — বই অর্ডার</h2>

  <?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
  <?php endif; ?>

  <form method="post" action="<?= site_url('order/submit') ?>" id="orderForm">
    <div class="row g-3">
      <?php foreach($books as $b): ?>
        <div class="col-md-6">
          <div class="card p-3 h-100">
            <div class="d-flex justify-content-between">
              <div>
                <img src="<?= site_url( esc($b['image'])) ?>" alt="">
                <h5 class="mb-1"><?= esc($b['name']) ?></h5>
                <div>মূল্য: <strong class="base" data-price="<?= $b['price'] ?>"><?= number_format($b['price'],2) ?></strong> টাকা</div>
                <small class="text-muted">৫ বা তার বেশি কপি নিলে ২০% ছাড়।</small>
                
              </div>
              <div style="min-width:150px">
                <label class="form-label mb-0">কয় কপি?</label>
                <input type="number" min="0" value="0" class="form-control qty" name="items[<?= $b['id'] ?>]">
                <div class="mt-2">সাবটোটাল: <span class="line-sub">0.00</span></div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="card p-3 mt-4">
      <div class="row g-3">
        <div class="col-md-4">
          <label class="form-label">নাম</label>
          <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">ইমেইল</label>
          <input type="text" name="customer_mobile" class="form-control" placeholder="01XXXXXXXXX" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">ইমেইল</label>
            <textarea name="customer_address" required></textarea>       
           </div>
        <div class="col-md-12 d-flex align-items-end">
          <div class="ms-auto">
            <div class="h5 mb-1">মোট বই: <span id="totalQty">0</span></div>
            <div class="h4">মোট মূল্য: <span id="totalAmount">0.00</span> টাকা</div>
          </div>
        </div>
      </div>
      <div class="text-end mt-3">
        <button class="btn btn-primary btn-lg">অর্ডার কনফার্ম</button>
      </div>
    </div>
  </form>
</div>

<script>
function unitPrice(base, qty){
  return (qty >= 5) ? (Math.round(base*0.80*100)/100) : base;
}
function recalc(){
  let totalQty=0, totalAmount=0;
  document.querySelectorAll('.card .qty').forEach(function(input){
    const qty = parseInt(input.value||0);
    const base = parseFloat(input.closest('.card').querySelector('.base').dataset.price);
    const u = unitPrice(base, qty);
    const sub = qty * u;
    input.closest('.card').querySelector('.line-sub').textContent = sub.toFixed(2);
    totalQty += qty; totalAmount += sub;
  });
  document.getElementById('totalQty').textContent = totalQty;
  document.getElementById('totalAmount').textContent = totalAmount.toFixed(2);
}
document.querySelectorAll('.qty').forEach(i=>i.addEventListener('input', recalc));
recalc();
</script>
</body>
</html>
