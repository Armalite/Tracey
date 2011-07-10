<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/scripts/includes/sessions.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/scripts/includes/sql_notificationfn.php');

confirmLogin();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>User Dashboard</title>

		<link rel="stylesheet" type="text/css" href="css/customStyle.css" />
		<link rel="stylesheet" type="text/css" href="css/dashboardui.css" />
		<link rel="stylesheet" type="text/css" href="libraries/dashboard/themes/default/jquery-ui-1.8.2.custom.css" />
		<script type="text/javascript" src="libraries/dashboard/lib/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="libraries/dashboard/lib/jquery-ui-1.8.2.custom.min.js"></script>
		<script type="text/javascript" src="libraries/dashboard/jquery.dashboard.js"></script>
		<script type="text/javascript" src="libraries/dashboard/lib/themeroller.js"></script>
		<script src="js/jquery.hoverIntent.js"></script>
		<script src="js/loginpanel.js"></script>
		<script src="js/definedashboard.js"></script>
		<script src="js/notification.js"></script>
		<script>$(document).ready( function() {
				$(".notifications-form").hide();
				$("#notifications").hoverIntent( function() {
					$(".notifications-form").fadeIn(200);
				}
				, function() {
					$(".notifications-form").fadeOut(200);
				}
				)

			});</script>
	</head>

	<body class="custom">
		<div id="header-area">
			<div id="header">
				<div class="menu-container">
					<!-- Menu items = Home, About, Help -->
					<ul class="menu">
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>

						<li id="register">
							
							<a href="#">
								<h3>Widgets and Layout</h3>
								<span>Add widgets or Edit Layout</span>	
							</a>
							<div class="register-form">
								<div id="switcher"></div>
								<a class="openaddwidgetdialog headerlink" href="#"><label>Add Widget</label></a>
      							<a class="editlayout headerlink" href="#"><label>Edit Layout</label></a>
							</div>
							</div>
							</div>

						<li>
							<a href="#">Help</a>

						</li>
					</ul>
				</div>

				<ul id="nav">
					<!-- Load Navigation items ..
					1. Logged in user = Account, Themes, Logout Button.
					2. Visitor = Login, Register.
					-->
					<li id="notifications">

						<div id="notification-icon">
							<h3>
							<?php		// returns the number of notifications for the logged in user
								echo getNotifCountByEmail($_SESSION['email']);?>
							</h3>
						</div>

						<div id="notifications-container" class="notifications-form">
							<div id="notifications-content">
								<span style="color: #F1F4F7;">
									<?php
									// get all notifications for user
									$resultSet = getAllNotifDetails($_SESSION['email']);
									foreach ($resultSet as $result) {
										//print_r($result);
										// display notification iff its new
										if ($result['StatusId'] == 1) {
											echo getNotifNameByID($result['TypeId']);
											echo " [";
											echo getEntityNameByProjectId($result['TypeEntityId']);
											echo "] by ";
											echo getSenderName($result['SenderId']);
											echo ". ";
											
									?>
									
									<form action='#' id="accept-notif-form">
										<input type="text" name="AcceptId" value="2" />
										<input type="text" name="NotificationId" value="2" />
										<button type='submit' class='notification-send'>Accept</button>
									</form>
									
									<form class="reject-notif-form">
										<input type="hidden" name="RejectId" value="3" />
										<input type="hidden" name="NotificationId" value="<?php echo $result['Id'];?>" />
										<button type='submit' class='notification-send'>Reject</button>
									</form>
									
									<?php
										} else {
											// don't display notification
										}
										
										 
									}
									?>
								</span>

							</div>
						</div>
					</li>
					<li id="login">
						<a href="#">
						<h3>Account Settings</h3>
						<span>Change account details or Logout</span>
						</a>
						<div id='login-container' class='login-form'>
							<h1 class='login-title'></h1>
							<div class='login-top'>
							</div>
							<div class='login-content'>
								<label>
									Logged in as
									<U>
										<?php	echo $_SESSION['email'];?>
									</U>
								</label>
								<label>
									<span>
										<a href="/scripts/authentication/logout.php">LOGOUT</a>
									</span>
								</label>
							</div>
						</div>
					</li>
					<li id="register">
						<a href="#">
						<h3>Widgets and Layout</h3>
						<span>Add widgets or Edit Layout</span>
						</a>
						<div id='register-container' class="register-form">
							<div id="switcher">
							</div>
							<a class="openaddwidgetdialog headerlink" href="#">
							<label>
								Add Widget
							</label>
							</a>
							<a class="editlayout headerlink" href="#">
							<label>
								Edit Layout
							</label>
							</a>
						</div>
					</li>
				</ul>
			</div>

		</div>

		<div id="dashboard" class="dashboard">
			<div class="layout">
				<div class="column first column-first">
				</div>
				<div class="column second column-second">
				</div>
				<div class="column third column-third">
				</div>

			</div>
		</div>

	</body>
</html>
