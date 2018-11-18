<!-- Staff home page: This is the staff directory. This is where logged in staff members can select what they want to do next. This page is basically for rediretion purposes.
-->
<?php
session_start();
$staffid = $_COOKIE["staffid"];
?>
<!-- Page title -->
<title>Hotel Ski Resort</title>
<center>
  <h1>Staff Homepage</h1>
  <p> Welcome staff id:<?php echo $staffid;?> </p> <!-- TODO: echo the staff id. -->

    <!-- TODO:
    - Ensure that the rooms/equipment buttons are disabled depending on staff type
    - Ensure data to profile is redirected to the correct profile, according tot he staff id given in login.
    -->
  <!-- Below are the directory options -->
  <div style="background-color:lightGrey; width: 10%; padding-top: 20px; padding-bottom: 1px">
    <form method="POST" action="staffProfile.php">
    <input type="hidden" name="staffid" value="<?php echo $staffid; ?>">
      <input type="submit" value="Edit Profile" name="staffProfile">

    </form>
  </div>

  <div style="height: 10px;"></div>

  <div style="background-color:lightGrey; width: 10%; padding-top: 20px; padding-bottom: 1px">
    <form action="staffRoomView.php">
      <input type="submit" value="Rooms" name="staffRooms">
    </form>

    <form action="staffEquipView.php">
      <input type="submit" value="Equipment" name="staffEquip">
    </form>

    <form action="staffLessonView.php">
      <input type="submit" value="Lessons" name="staffLessons">
    </form>

    <form action="staffCustomerView.php">
      <input type="submit" value="Customers" name="staffCustomers">
    </form>

    <form action="staffManagementView.php">
      <input type="submit" value="Management" name="staffManage">
    </form>

    <form action="staffStaffView.php">
      <input type="submit" value="Staff" name="Staff">
    </form>
  </div>

</center>
