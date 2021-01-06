<?php


namespace ThucTap\Controllers;


use ThucTap\Core\Redirect;
use ThucTap\Database\DB;
use ThucTap\Models\ChatBoxModel;

class ChatBoxController
{
	public function saveData()
	{
		$data['NoiDung'] = DB::makeConnection()->real_escape_string(htmlentities($_POST['body_msg']));
		if (isset($_SESSION['isLogin']['TenSV'])) {
			$data['Name'] = $_SESSION['isLogin']['TenSV'];
			$data['idNhom'] = returnIdNhomFromMaSVOrMaGV($_SESSION['isLogin']['MaSV'], 'SinhVien');
		} else {
			$data['Name'] = $_SESSION['isLogin']['TenGV'];
			$data['idNhom'] = returnIdNhomFromMaSVOrMaGV($_SESSION['isLogin']['MaGV'], 'GiangVien');
		}
		ChatBoxModel::saveData($data);
	}

	public function loadView()
	{
		require_once "views/SVviews/chatbox/chatbox.php";
	}

	public function LoadlistData()
	{
		if (isset($_SESSION['isLogin']['TenSV'])) {
			$data['idNhom'] = returnIdNhomFromMaSVOrMaGV($_SESSION['isLogin']['MaSV'], 'SinhVien');
		} else {
			$data['idNhom'] = returnIdNhomFromMaSVOrMaGV($_SESSION['isLogin']['MaGV'], 'GiangVien');
		}
		?>
		<div class="main-chat">
		</div><!-- div.main-chat -->
		<?php
		if (ChatBoxModel::loadData($data['idNhom'])[0] > 0) {
			foreach (ChatBoxModel::loadData($data['idNhom'])[1] as $row) {
				$date_sent = $row[3];
				$day_sent = substr($date_sent, 8, 2);   // Ngày gửi
				$month_sent = substr($date_sent, 5, 2); // Thánh gửi
				$year_sent = substr($date_sent, 0, 4);  // Năm gửi
				$hour_sent = substr($date_sent, 11, 2); // Giờ gửi
				$min_sent = substr($date_sent, 14, 2);  // Phút gửi

				// Nếu người gửi là $user thì hiển thị khung tin nhắn màu xanh
				if(isset($_SESSION['isLogin']['TenSV'])){
					if ($row[2] == $_SESSION['isLogin']['TenSV']) {
						echo '
				<div class="msg-user">
					<p>' . $row[1] . '</p>
					<div class="info-msg-user">
						Bạn - ' . $day_sent . '/' . $month_sent . '/' . $year_sent . ' lúc ' . $hour_sent . ':' .
							$min_sent . '
					</div>
				</div>
				
			';
					} // Ngược lại người gửi không phải là $user thì hiển thị khung tin nhắn màu xám
					else {
						echo '
				<div class="msg">
					<p>' . $row[1] . '</p>
					<div class="info-msg">
						<b>' . $row[2] . ' </b>- ' . $day_sent . '/' . $month_sent . '/' . $year_sent . ' lúc ' . $hour_sent .
							':' . $min_sent . '
					</div>
				</div>
			';
					}
				}else{
					if ($row[2] == $_SESSION['isLogin']['TenGV']) {
						echo '
				<div class="msg-user">
					<p>' . $row[1] . '</p>
					<div class="info-msg-user">
						Bạn - ' . $day_sent . '/' . $month_sent . '/' . $year_sent . ' lúc ' . $hour_sent . ':' .
							$min_sent . '
					</div>
				</div>
				
			';
					} // Ngược lại người gửi không phải là $user thì hiển thị khung tin nhắn màu xám
					else {
						echo '
				<div class="msg">
					<p>' . $row[1] . '</p>
					<div class="info-msg">
						<b>' . $row[2] . ' </b>- ' . $day_sent . '/' . $month_sent . '/' . $year_sent . ' lúc ' . $hour_sent .
							':' . $min_sent . '
					</div>
				</div>
			';
					}
				}

			}
		} else {
			echo "Chuưa có ai chat cả";
		}
	}

	public function listNhomChat()
	{
		require_once "views/Admin/QLNhomChat/listNhomChat.php";
	}

	public function addNhomChatView()
	{
		require_once "views/Admin/QLNhomChat/addTVNhom.php";
	}

	public function addNhomChatBox()
	{
		$data = $_POST;
		ChatBoxModel::addNhom($data);
		Redirect::to("listNhomChat");
	}

	public function listNhomChatGV()
	{
		require_once "views/GVview/chatbox/listNhomChat.php";
	}

	public function CTNhomGV()
	{
		require_once "views/GVview/chatbox/CTChatboxGV.php";
	}
}