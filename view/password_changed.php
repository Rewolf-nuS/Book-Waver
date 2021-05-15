<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="none,noindex,nofollow">
	<meta name="description" content="ポチポチ選択するだけで書評ができます！">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Caudex&family=Noto+Sans+JP:wght@100;300;400;500;700&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="../img/favicon.ico">
	<link rel="icon" type="image/vnd.microsoft.icon" href="../img/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="512x512" href="../img/icon-512x512.png">
	<title>パスワード変更完了 | Book Waver</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="../js/bookwaver.js"></script>
	<script src="../js/jquery.dropdown.js"></script>
	<script>
		$(window).on('load', function() {
			$('body').removeClass('preload');
		});
		$(document).ready(function() {
			$('#navi').dropdown();
		});
	</script>
</head>
<body class="preload">
	<header>
		<div class="header_flex">
			<div>
				<h1><a href="../index.php">Book Waver</a></h1>
				<h2 class="header_h2">みんなの書評を分かりやすく見たり、自分が直感的に書評できるサイト！</h2>
			</div>
			<nav>
				<a href='RecommendFormController.php' class="nav-for-pc">感想を投稿する</a>
				<ul id="navi">
					<li><a href="javascript:void(0);" class="dropdown_btn"><?php print($_SESSION["login_id"]); ?></a>
						<ul class="dropdown">
							<li><a href='MypageController.php'>マイページ</a></li>
							<li><a href='LogoutController.php'>ログアウト</a></li>
							<li class="nav-for-sp"><a href='RecommendFormController.php'>感想を投稿する</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<main>
		<h3>変更完了</h3>
		<div class="registed_text">
			<p>パスワードを変更しました。</p>
		</div>
		<a href="MyPageController.php" class="btn_type_big">マイページに進む</a>
	</main>
	<footer>
		<small>Copyright &copy; Book Waver All Rights Reserved.</small>
	</footer>
</body>
</html>