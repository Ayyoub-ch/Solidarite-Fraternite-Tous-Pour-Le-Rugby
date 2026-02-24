
        <style>
			h2 {
				color: blue;
			}
		</style>
		<h2>Actualités </h2>
		
    
		<figure>
			<p>7 septembre</p>
			<img src="actus/berlouffe_7sept2024.jpg" alt="Les Berlouffes" style="text-align: center; display: block; margin: 0 auto;"/>
			<figcaption>Notre association Solidarité Fraternité Tous pour le Rugby tiendra un stand le jour de la Braderie les Berlouffes à Wattrelos dimanche 08 septembre.
				Venez nombreux</figcaption>
		</figure>
            

		<figure>
			<p>9 janvier</p>
			<img src="actus/seance_rugby_9janv2024.jpg" alt="Première séance de rugby" style="text-align: center; display: block; margin: 0 auto;"/>
		</figure>


		<p>20 décembre 2023</p>
		<p>Suite à une vague de froid ces derniers jours, et la non disponibilité d'une salle couverte de sport pour continuer nos activités, l'association a reporté les entrainements à une date ultérieure.
		À très bientôt.</p>

		<figure style="text-align: center; display: block; margin: 0 auto;">
			<p>25 septembre 2023</p>
			<img src="actus/partenariat1_25sept.jpg" alt="Partenariat" />
			<img src="actus/partenariat2_25sept.jpg" alt="Avec" />
			<img src="actus/partenariat3_25sept.jpg" alt="la mission" />
			<img src="actus/partenariat4_25sept.jpg" alt="locale" />
			<img src="actus/partenariat5_25sept.jpg" alt="de leers-wattrelos" />
		
			<figcaption><li>Partenariat avec la Mission Locale Wattrelos - Leers </li>
				<li>Thème: les règles de base du Rugby à XV</li>
				<li>Mercredi 06 Septembre 2023</li></figcaption>
		</figure>


		<figure style="text-align: center; display: block; margin: 0 auto;">
			<p>23 septembre 2023 </p>
			<img class="lightbox-image" src="actus/fete_assoc_23sept2023.jpg" alt="fete" />
			<img class="lightbox-image" src="actus/fete_assoc2_23sept2023.jpg" alt="des" />
			<img class="lightbox-image" src="actus/fete_assoc3_23sept2023.jpg" alt="associations" />
			<img class="lightbox-image" src="actus/fete_assoc4_23sept2023.jpg" alt="wattrelos" />
		
			<figcaption>Quelques photos de la fête des Associations à Wattrelos </figcaption>
		</figure>

	<!-- 	<figure>-->
		<!-- Slider track 
		<div class="slider-track">
			<img src="actus/fete_assoc_23sept2023.jpg" alt="fete">
			<img src="actus/fete_assoc2_23sept2023.jpg" alt="des">
			<img src="actus/fete_assoc3_23sept2023.jpg" alt="associations">
			<img src="actus/fete_assoc4_23sept2023.jpg" alt="wattrelos" />
		</div>-->

		<!-- Légende 
		<figcaption>Quelques photos de la fête des Associations à Wattrelos</figcaption>-->

		<!-- Boutons navigation 
		<button class="slider-btn prev" onclick="prevSlide()">&#10094;</button>
		<button class="slider-btn next" onclick="nextSlide()">&#10095;</button>
		</figure>

<script>
  const track = document.querySelector('.slider-track');
  const slides = track.querySelectorAll('img');
  let index = 0;

  function showSlide() {
    track.style.transform = `translateX(-${index * 100}%)`;
  }

  function prevSlide() {
    index = (index === 0) ? slides.length - 1 : index - 1;
    showSlide();
  }

  function nextSlide() {
    index = (index === slides.length - 1) ? 0 : index + 1;
    showSlide();
  }

  // Optionnel : swipe pour mobile
  let startX = 0;

  track.addEventListener('touchstart', e => {
    startX = e.touches[0].clientX;
  });

  track.addEventListener('touchend', e => {
    let endX = e.changedTouches[0].clientX;
    if (startX - endX > 50) nextSlide();
    if (endX - startX > 50) prevSlide();
  });
</script>-->


<!-- Lightbox container -->		<!--- ça sert à rien ce truc il faut que je revois

<div id="lightbox" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.9); justify-content:center; align-items:center; z-index:9999;">
  <span id="lightbox-close" style="position:absolute; top:20px; right:30px; font-size:40px; color:white; cursor:pointer;">&times;</span>
  <img id="lightbox-img" src="" style="max-width:90%; max-height:80%;">
  <div id="lightbox-prev" style="position:absolute; left:20px; font-size:60px; color:white; cursor:pointer;">&#10094;</div>
  <div id="lightbox-next" style="position:absolute; right:20px; font-size:60px; color:white; cursor:pointer;">&#10095;</div>
</div>

<script>
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");
  const images = Array.from(document.querySelectorAll(".lightbox-image"));
  let currentIndex = -1;

  images.forEach((img, index) => {
    img.addEventListener("click", () => {
      currentIndex = index;
      lightbox.style.display = "flex";
      lightboxImg.src = img.src;
    });
  });

  document.getElementById("lightbox-close").onclick = () => lightbox.style.display = "none";
  document.getElementById("lightbox-prev").onclick = () => {
    if (currentIndex > 0) {
      currentIndex--;
      lightboxImg.src = images[currentIndex].src;
    }
  };
  document.getElementById("lightbox-next").onclick = () => {
    if (currentIndex < images.length - 1) {
      currentIndex++;
      lightboxImg.src = images[currentIndex].src;
    }
  };

  window.addEventListener("keydown", (e) => {
    if (lightbox.style.display === "flex") {
      if (e.key === "ArrowLeft") document.getElementById("lightbox-prev").click();
      if (e.key === "ArrowRight") document.getElementById("lightbox-next").click();
      if (e.key === "Escape") document.getElementById("lightbox-close").click();
    }
  });
</script>-->