<?php
isUserLogin();
require_once 'views/header.php';
require_once 'views/GVview/navigation.php';
$a = new \ThucTap\Controllers\ChatBoxController();
$data=\ThucTap\Models\ChatBoxModel::loadDataWithIdNhom($_GET['id']);
?>
	<script>
        const Globol={"url":"/ThucTap/urlChatBox"};
	</script>
	<div class="right">
		<div class="right__content">
			<div class="right__title"><i class="fa fa-commenting"></i><?=$data['TenNhom']?></div>
			<div class="clearfix"></div>
			<div class="right">
				<div class="right__content">
					<div class="main-chat">
						<?php $a->LoadlistData(); ?>
					</div><!-- div.main-chat -->
					<div class="box-chat">
						<form method="POST" id="formSendMsg" onsubmit="return false;">
							<input type="text" placeholder="Nhập nội dung tin nhắn ...">
                            <i class="fa fa-paper-plane" aria-hidden="true" onclick="sendMsg()"></i>
						</form><!-- form#formSendMsg -->
					</div><!-- div.box-chat -->
				</div>
			</div>

		</div>
	</div>
<?php
require_once 'views/footer.php';