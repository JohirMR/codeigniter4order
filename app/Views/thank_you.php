<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<!-- <link href="https://fonts.cdnfonts.com/css/solaimanlipi" rel="stylesheet"> -->
</head>
<style>
body{
  margin-top:1rem;
  font-family: 'SolaimanLipi', sans-serif;
}
</style>


<body>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
    <?php if(session()->getFlashdata('success')): ?>
        <p style="color: green;">
            <?= session()->getFlashdata('success') ?>
        </p>
    <?php endif; ?>
                </div>
                <div class="col-md-12">
                     <h3>আমাদের কার্যক্রম</h3>
                </div>
                <div class="col-md-12 d-flex">
                        <div class="col-md-4">
                            <h5>সার্বিক যোগাযোগ :</h5>
                            <p>হাদীছ ফাউণ্ডেশন বই বিক্রয় বিভাগ
                            নওদাপাড়া, পোঃ সপুরা, রাজশাহী-৬২০৩।
                            মোবাইল : ০১৭৭০-৮০০৯০০, ০১৮৩৫-৪২৩৪১০।
                            ওয়েব এড্রেস : www.hadeethfoundationbd.com
                            ই-মেইল : hadithfoundationbd@gmail.com</p>
                        </div>
                        <div class="col-md-4">
                            <h5>সার্বিক যোগাযোগ :</h5>
                            <p>হাদীছ ফাউণ্ডেশন বই বিক্রয় বিভাগ
                            নওদাপাড়া, পোঃ সপুরা, রাজশাহী-৬২০৩।
                            মোবাইল : ০১৭৭০-৮০০৯০০, ০১৮৩৫-৪২৩৪১০।
                            ওয়েব এড্রেস : www.hadeethfoundationbd.com
                            ই-মেইল : hadithfoundationbd@gmail.com</p>
                        </div>
                        <div class="col-md-4">
                            <h5>সার্বিক যোগাযোগ :</h5>
                            <p>হাদীছ ফাউণ্ডেশন বই বিক্রয় বিভাগ
                            নওদাপাড়া, পোঃ সপুরা, রাজশাহী-৬২০৩।
                            মোবাইল : ০১৭৭০-৮০০৯০০, ০১৮৩৫-৪২৩৪১০।
                            ওয়েব এড্রেস : www.hadeethfoundationbd.com
                            ই-মেইল : hadithfoundationbd@gmail.com</p>
                        </div>
                </div>
                        
                </div>
                    
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary" href="<?= site_url('/') ?>">আরও অর্ডার করুন</a>
                </div>
            </div>
        </div>
</body>
</html>
