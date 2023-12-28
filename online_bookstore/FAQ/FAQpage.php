<!DOCTYPE html>
<html>
<head>
    <title>FAQ PAGE</title>
    <link rel="stylesheet" href="stylesss/style2.css">
    <link rel="stylesheet" href="stylesss/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			

    <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction_() {
  document.getElementById("myDropdown_").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn_')) {
    var dropdowns = document.getElementsByClassName("dropdown-content_");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
	

</head>

<body>

<div class="background1">
    <h1><b>The Book Palace</b></h1><br>
</div>
<hr class="newhr">

<div class = "faq_box">
    <div class="drop_down">
    <button onclick="dropdown_function()" class="dropbtnn">Do you sell audiobooks and / or ebooks?</button>
    <div id="my_Dropdown" class="dropdown_content">
        <p>We do not currently have an ebook provider, but our hope is to develop and launch our own ebooks platform in the near future!</p>
    </div>
    </div>
</div><br><br><br><br><br><br>
<div class="dropdown_">
  <button onclick="myFunction_()" class="dropbtn_">Do you sell audiobooks and / or ebooks?</button>
  <div id="myDropdown_" class="dropdown-content_">
    <p>We do not currently have an ebook provider, but our hope is to develop and launch our own ebooks platform in the near future!</p>
  </div>
</div><br><br><br><br><br><br>






<hr class="newhr">
<footer>
    <h3 class="ftralign">Follow Us On</h3>
    <div class="icons">
        <ul>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
        </ul><br>
        <br><br><p style="font-style: italic;" class="ftralign">NO - 26/7 Sea Avenue Colombo - 03 <br> hotline - 011 555 7788<br>Mobile - +94 77 885 5698<br>One of Sri Lanka's largest book collections. Search your favorite book through our online bookstore.</p>
    </div>

    <div class="footerlinks"><br>
        <ul>
            <a href="#about"> Help  </a>
            <a href="#about">  About Us </a>
            <a href="FAQ.php">  FAQ</a>
        </ul>
    </div>
</footer>

</body>
</html>
