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
            <div class="right__content">
                <div class="main-chat">
					<?php $a->LoadlistData(); ?>
                </div><!-- div.main-chat -->
                <div class="box-chat">
                    <form method="POST" id="formSendMsg" onsubmit="return false;">
                        <input type="text" placeholder="Nhập nội dung tin nhắn ...">
                        <button onclick="sendMsg()"><i class="fa fa-paper-plane"></i></button>
                    </form><!-- form#formSendMsg -->
                </div><!-- div.box-chat -->
            </div>
        </div>

    </div>
<?php
require_once 'views/footer.php';