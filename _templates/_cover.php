<style>
	/* Define a class for the circular image */
	.circular-image {
		width: 200px;
		/* Set the width and height to your desired size */
		height: 200px;
		border-radius: 50%;
		/* Make it circular by setting border-radius to 50% */
		object-fit: cover;
		/* Maintain aspect ratio and cover the entire circle */
		border: 2px solid rgb(110, 104, 102);
		/* Add a border (optional) */
	}

</style>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
	<header class="mb-auto">
		<div>
			<!-- <h3 class="float-md-start mb-0">Cover</h3> -->
			<nav class="nav nav-masthead justify-content-center float-md-end">
				<!-- <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Features</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a> -->
			</nav>
		</div>
	</header>

	<main class="px-3">
		<!-- Create a div for the center container -->
		<div class="center-container">
			<!-- Use the circular-image class for your image -->
			<img src="/portfolio/image/abishek.jpg" alt="Circular Image" class="circular-image">
		</div>
		<h1>Abishek Anandhan</h1>
		<p class="lead">I'm Web Engineer, In addition to my technical expertise, I value teamwork and
			communication. I enjoy working with a diverse group of professionals, including designers, project
			managers, and stakeholders, to bring projects to life successfully. I am a proactive communicator and
			believe that clear and open dialogue is essential for project success.
		</p>
		<p class="lead">
			<a href="/portfolio/aboutme.php" class="btn btn-lg btn-light fw-bold border-white bg-white">About
				Me</a>
		</p>
		

	</main>
</div>