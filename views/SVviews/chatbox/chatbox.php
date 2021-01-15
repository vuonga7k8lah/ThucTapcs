<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/SVviews/navigation.php';
$a = new \ThucTap\Controllers\ChatBoxController();
?>
    <script>
        const Globol = {"url": "/ThucTap/urlChatBox"};
    </script>
    <div class="right">
        <div class="right__content">
            <div class="right__title"><i class="fa fa-commenting"></i>ChatBox Nhóm Đăng Ký</div>
            <div class="container" style="border: solid 3px; border-radius: 20px">
                <div class="row">
                    <div class="col-12">
                        <div class="main-chat">
							<?php $a->LoadlistData(); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <form method="POST" id="formSendMsg" onsubmit="return false;">
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                               placeholder="Nhập nội dung tin nhắn ..." style="">
                        <button onclick="sendMsg()"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>

            </div>
        </div>

    </div>
<?php
require_once 'views/footer.php';