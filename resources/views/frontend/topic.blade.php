@extends('frontend.layouts.app')
@section('content')
 <!-- Start Page Banner Area -->
       <div class="page-banner-area page-pricing-table">
            <div class="container-fluid">
                <div class="single-page-banner-content">
                    <h1>مقالاتنا و مدوناتنا</h1>
                </div>
            </div>
            <div class="page-banner-shape-1">
                <img src="assets/images/banner/banner-one-shape-1.png" alt="images">
            </div>
          <div class="page-banner-shape-2">
                <img src="assets/images/banner/banner-one-shape-2.png" alt="images">
            </div>
            <div class="page-banner-shape-3">
                <img src="assets/images/banner/banner-one-shape-3.png" alt="images">
            </div>
        </div>
        <!-- End Page Banner Area -->
        

        <!-- Start Secure Your Place Now Area -->

       <div class="container">
    <div class="right-image">
      <!-- image affichée ici -->
    </div>
    <div class="left-content">
      <h2 class="green-text"> اكتب وانشر نصًا</h2>
  
      <textarea id="textInput" placeholder="اكتب هنا... "style= "width: 100%; height: 300px;"></textarea>
      <br>
      <button onclick="publishText()">نشر</button>

      <div class="published-content" id="publishedOutput" style="display: none;"></div>
    </div>
  </div>

  <script>
    function publishText() {
      const text = document.getElementById("textInput").value;
      const output = document.getElementById("publishedOutput");

      if (text.trim() !== "") {
        output.innerHTML = "<strong>Texte publié :</strong><br><br>" + text.replace(/\n/g, "<br>");
        output.style.display = "block";
        document.getElementById("textInput").value = "";
      } else {
        alert("Le champ de texte est vide.");
      }
    }
  </script>
@stop