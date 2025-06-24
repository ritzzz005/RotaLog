<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recent Events</title>
  <link rel="stylesheet" href="recent.css">
</head>
<style>
/* Style for the event images */
/* Style for the event images */
.event-img {
  width: auto; /* Maintain aspect ratio */
  max-width: 300px; /* Limit maximum width */
  height: 200px; /* Set a fixed height */
  border-radius: 8px; /* Optional: adds rounded corners */
  margin-top: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Optional: adds shadow for depth */
}

/* Add a container around the images */
.event-images {
  display: flex;
  justify-content: center;
  gap: 20px; /* Space between the images */
  margin-top: 20px;
}

/* Center the middle image */
.center-img {
  margin-left: 20px;
  margin-right: 20px;
}
.eventimg{
  height: 300px;
  width: auto; /* Maintain aspect ratio */
  max-width: 300px; /* Limit maximum width */
 
  border-radius: 8px; /* Optional: adds rounded corners */
  margin-top: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Optional: adds shadow for depth */
}
.img{
  width: auto; /* Maintain aspect ratio */
  max-width: 600px; /* Limit maximum width */
  height: 300px; /* Set a fixed height */
  border-radius: 8px; /* Optional: adds rounded corners */
  margin-top: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}


</style>
<body>
  
    <nav>
      <ul class="nav-bar">
        <li><a href="index.php">Home</a></li>
        <li><a href="announcements.php">Announcements/Achievements</a></li>
        <li><a href="recentevents.php">Recent Events</a></li>
        <li><a href="upcoming.php">Upcoming Events</a></li>
      </ul>
    </nav>
  

  <main>
    <section class="recent-events">
      <h1>Recent Events</h1>

            <!-- Event 1: World AIDS Day Awareness and Fundraiser -->
        <div class="event">
          <h2>World AIDS Day Awareness at Cubbon Park & Fundraiser for Christmas</h2>
          <p>
            Date: December 1, 2024<br>
            We organized an awareness campaign at Cubbon Park on World AIDS Day
          </p>
          <div class="event-images">
            <img src="aids.jpeg" alt="World AIDS Day Awareness at Cubbon Park" class="event-img">
            <img src="aids1.jpeg" alt="World AIDS Day Awareness at Cubbon Park" class="center-img event-img">
            <img src="aids2.jpeg" alt="World AIDS Day Awareness at Cubbon Park" class="event-img">
          </div>
        </div>

        <!-- Event 2: Fundraiser to be secret santa for orphan kids -->
        <div class="event">
          <h2>Fundraiser for orphan kids to be their Secret Santa </h2>
          <p>
            Date: December 1, 2024<br>
            Followed by the AIDS awareness, We had fundraiser to support Christmas charity initiatives by making the people some games & donate whatever was possible
          </p>
          <div class="event-images">
            <img src="fr.jpeg" alt="Fundraiser" class="eventimg">
            
          </div>
        </div>



      <!-- Event 2:  Old Age Home Visit -->
      <div class="event">
        <h2> Old Age Home Visit</h2>
        <p>
          Date: November 30, 2024<br>
         A heartwarming visit to an old age home, making them play their games,dancing & singing with them
        </p>
        <img src="ohv1.jpeg" alt="Old Age Home Visit" class="img">
        <img src="ohv.jpeg" alt="Old Age Home Visit" class="img">
        <img src="ohv2.jpeg" alt="Old Age Home Visit" class="img">
      </div>

      <!-- Event 3: Industrial Visit to Gadag -->
      <div class="event">
        <h2>Industrial Visit to Gadag</h2>
        <p>
          Date: November 15-17, 2024<br>
          A three-day industrial visit to Gadag, where we learned about various industries and their operations.
        </p>
        <img src="iv1.jpeg" alt="Industrial Visit to Gadag" class="img">
        <img src="iv.jpeg" alt="Industrial Visit to Gadag" class="eventimg">
        <img src="iv3.jpeg" alt="Industrial Visit to Gadag" class="img">
      </div>

      <!-- Event 4: Atron Ke Kiladi -->
      <div class="event">
        <h2>Atron Ke Kiladi S2, Followed by Rangeela</h2>
        <p>
          Date: September 21, 2024<br>
          A fun-filled event where participants competed in various exciting challenges and games.
          Ending the day painting the walls of school.
        </p>
        <img src="akk.jpeg" alt="Atron Ke Kiladi" class="event-img">
        <img src="akk1.jpeg" alt="Atron Ke Kiladi" class="eventimg">
        <img src="akk2.jpeg" alt="Atron Ke Kiladi" class="eventimg">
      </div>

      <!-- Event 5: Chinnara Chilipili -->
      <div class="event">
        <h2>Chinnara Chilipili</h2>
        <p>
        Date: October 24, 2024<br>
          A delightful event focused on children's talent of Art, Dance, Music that brought smiles to many faces.
        </p>
        <img src="cc.jpeg" alt="Chinnara Chilipili" class="img">
        <img src="cc1.jpeg" alt="Chinnara Chilipili" class="eventimg">
      </div>

      <!-- Event 6: Cypher 2.0 -->
      <div class="event">
        <h2>Cypher 2.0</h2>
        <p>
        Date: October 18-19, 2024<br>
          A highly anticipated tech fest with various competitions and workshops, showcasing innovation and creativity.
        </p>
        <img src="cy1.jpeg" alt="Cypher 2.0" class="event-img">
        <img src="cy.jpeg" alt="Cypher 2.0" class="eventimg">
        <img src="cy2.jpeg" alt="Cypher 2.0" class="event-img">
      </div>
    </section>
  </main>

  <!--<footer>
    <p>© 2024 Your Website Name. All Rights Reserved.</p>
  </footer>-->
</body>
</html>
