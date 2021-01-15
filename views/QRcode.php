<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR CODE</title>
    <base href="<?= \ThucTap\Core\URL::uri('') ?>">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./assets/css/font-awesome-4.6.3/css/font-awesome.min.css">
    <style>
        #id {
            margin: 0;
            padding: 0;
        }

        .QR {
            width: 300px;
            height: 500px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body id="id">
<div class="QR">
    <div class="card" style="width: 18rem;text-align: center;display: inline-block;">
        <img src="<?= $url ?>" class="card-img-top" alt="..." style="text-align: center;<?=$enable?'display:none;':''?>">
        <div class="card-body" style="text-align: center;">
            <h5 class="card-title">Quét Mã Để Xác Thực</h5>
            <form class="row g-3" style="text-align: center;display: block" action="<?= \ThucTap\Core\URL::uri('qrcode')
			?>" method="post" autocomplete="off">
                <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden" style="text-align: center;">Nhập
                        OTP:</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Hãy Nhập Mã OTP"
                           name="otp">
                    <input type="hidden" name="secret" value="<?= $qrcode ?>">
                    <input type="hidden" name="action" value="<?= $data['action'] ?>">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <input type="hidden" name="data" value='<?php echo $data['data'] ?>'>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" style="margin-top: 5px; ">Gửi</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</html>
